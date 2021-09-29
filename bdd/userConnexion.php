<?php
session_start();

include 'dbConnexion.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$stmt = $conn->prepare("SELECT user, mdp FROM utilisateur where user = '".$login."';");
$stmt->execute();

foreach ($stmt as $row){
    if ($login==$row['user'] && $mdp==$row['mdp']){
       $connect="true";
        $_SESSION['user']=$login;
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
    header('Location: ../public/Connexion.php');
}
else {
    echo "Probleme";
}

?>