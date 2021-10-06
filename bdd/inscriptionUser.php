<?php
session_start();

include 'dbConnexion.php';
date_default_timezone_set('UTC'); 

$login = $_POST['user'];
$mdp = $_POST['mdp'];
$mdpC = $_POST['mdpC'];
$dateC = date('Y-n-j');
$dateA = date('Y-n-j');


if ($mdp == $mdpC){
    $stmt = $conn->prepare("INSERT INTO utilisateur VALUES (?, ?, ?, ?, 0)");
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $mdp);
    $stmt->bindParam(3, $dateC);
    $stmt->bindParam(4, $dateA);

    $stmt->execute();

    $_SESSION['user']=$login;

    header('Location: ../public/welcome.php');
}
else{
    header('Location: ../public/inscription.php?status=1');
}
?>