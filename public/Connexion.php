<?php include 'header.php'; ?>
<form action="../bdd/userConnexion.php" method="post">
    <div>
        <p>Nom d'utilisateur :</p>
        <input type="text" id="login" name="login" required />
    </div>

    <div>
        <p>Mot de Passe :</p>
        <input type="password" id="mdp" name="mdp" required />
    </div>
    
    <div>
        <button type="submit">Se connecter </button>
        <a href="inscription.php">S'inscrire </a>
    </div>
</form>
<?php include 'footer.php'; ?>