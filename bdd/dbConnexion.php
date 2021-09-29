<?php 
$user='root';
$pass='';

try{
    $conn = new PDO('mysql:host=localhost;dbname=utilisateur_lm_slam3-tp1', $user, $pass);
}

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
?>