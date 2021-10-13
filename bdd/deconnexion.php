<?php 
session_destroy();
setcookie("user",$login, -1, '/');
setcookie("mdp",$mdp, -1, '/');
header('Location: ../public/connexion.php');
?>