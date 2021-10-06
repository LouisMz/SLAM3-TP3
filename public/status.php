<?php

function statusConn($status){
    if ($status==1){
        echo 'Mauvais mot de passe';
    }
}

function statusInscri($status){
    if($status==1){
        echo 'Pas les même mot de passe';
    }
}
?>