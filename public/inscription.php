<?php include 'header.php'; ?>
<form action="../bdd/createUser.php" method="post">
    <div>
        <p>Nom d'utilisateur :</p>
        <input type="text" id="login" name="login" required />
    </div>

    <div>
        <p>Mot de Passe :</p>
        <input type="password" id="mdp" name="mdp" required />
    </div>

    <div>
        <p>Confirmer le mot de Passe :</p>
        <input type="password" id="mdpC" name="mdpC" required />
    </div>
    
    <div>
        <button type="submit">S'inscrire </button>
    </div>
</form>
<?php include 'footer.php'; ?>