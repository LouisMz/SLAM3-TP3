<?php
session_start();

include 'dbConnexion.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$stmt = $conn->prepare("SELECT user, mdp FROM utilisateur");
$stmt->execute();

foreach ($stmt as $row){
    if ($login==$row['user'] && $mdp==$row['mdp']){
        header('Location: ./public/welcome.php ');
        $_SESSION['user']=$login;
    }
    elseif ($login!=$row['user']){
        header('Location: ./public/inscription.php');
    }
    else{
        header('Location: ./public/Connexion.php');
    }
}
?>