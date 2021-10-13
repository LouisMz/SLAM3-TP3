<?php
if (isset($_COOKIE['user']) && isset($_COOKIE['mdp'])){
    header('Location: ../public/welcome.php ');
}    
else {
    include 'header.php'; 
    include 'status.php'; 
    @$status = $_GET['status'];?>
    <form action="../bdd/userConnexion.php" method="post">
        <div>
            <p>Nom d'utilisateur :</p>
            <input type="text" id="login" name="login" required />
        </div>

        <div>
            <p>Mot de Passe :</p>
            <p style="color: red"><?php statusConn($status) ?></p>
            <input type="password" id="mdp" name="mdp" required />
        </div>
        
        <div>
            <button type="submit">Se connecter </button>
            <a href="inscription.php">S'inscrire </a>
        </div>
    </form>
    <?php include 'footer.php'; 
}?>