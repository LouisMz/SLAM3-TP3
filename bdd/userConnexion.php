<?php
session_start();

include 'dbConnexion.php';
$connect = "inscri";
$login = $_POST["login"];
$mdp = $_POST["mdp"];

$stmt = $conn->prepare("SELECT user, mdp, dateCreation FROM utilisateur where user = '".$login."';");
$stmt->execute();

if (isset($_COOKIE['user']) && isset($_COOKIE['mdp'])){
   header('Location: ../public/welcome.php ');
}
else {
    foreach ($stmt as $row){
        $dateC = $row['dateCreation'];
        
        $mdpfull =  $mdp.$login;
        $testmdp = password_verify($mdpfull, $row['mdp']);

        if ($login==$row['user'] && $testmdp){
            $connect="true";
            $_SESSION['user']=$login;
            
            setcookie("user", $login, time()+36000, '/');
            setcookie("mdp", $mdpfull, time()+36000, '/');

        }
        elseif ($login!=$row['user']){
            $connect="inscri";
        }
        else{
            $connect="connec";
        }
    }
    if ($connect=="true")
    {
        
    header('Location: ../public/welcome.php ');
    }
    elseif ($connect=="inscri") {
        header('Location: ../public/inscription.php');
    }
    elseif ($connect=="connec") {
        header('Location: ../public/Connexion.php?status=1');
        $_SESSION['user']=$login;
    }
    else {
        echo "Probleme";
    }
}

?>