<?php
session_start();
if(isset($_SESSION['user'])){
    include 'header.php';

    $user=$_SESSION['user'];
    echo 'Bienvenue ', $user ,' !!!!';?>
    <div>
        <a href="../bdd/deconnexion.php">Déconnexion </a>
    </div>

    <?php
    include 'footer.php'; 
}
else{
    header('Location: connexion.php');
}
?>