<?php
session_start();

include 'header.php';

$user=$_SESSION['user'];
echo 'Bienvenue ', $user ,' !!!!';

include 'footer.php'; ?>