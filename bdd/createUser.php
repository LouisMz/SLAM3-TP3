<?php 
session_start();

$login = $_POST["login"];
$mdp = $_PSOT["mdp"];
$mdpC = $_POST["mdpC"];
$date = 

include 'dbConnexion.php';

$stmt = $conn->prepare("INSERT INTO utilisateur VALUES (?, ?,?,?,0);");

?>