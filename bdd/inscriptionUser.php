<?php
session_start();

include 'dbConnexion.php';

$login = $_POST['user'];
$mdp = $_POST['mdp'];
$mdpC = $_POST['mdpC'];
$dateC = 

$stmt = $conn->prepare("INSERT INTO utilisateur VALUES (?, ?, ?, ?, 0");
$stmt->bindParam(1, $login);
$stmt->bindParam(2, $mdp);
$stmt->bindParam(3, $dateC);
$stmt->bindParam(4, $dateA);

$stmt->execute();

?>