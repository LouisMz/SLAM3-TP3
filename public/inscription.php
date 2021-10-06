<?php include 'header.php';
include 'status.php';
@$status = $_GET['status'];?>
<form action="../bdd/inscriptionUser.php" method="post">
    <div>
        <p>Nom d'utilisateur :</p>
        <input type="text" id="user" name="user" required />
    </div>

    <div>
        <p>Mot de Passe :</p>
        <input type="password" id="mdp" name="mdp" required />
    </div>

    <div>
        <p>Confirmer le mot de Passe :</p>
        <p style="color: red"><?php statusInscri($status) ?></p>
        <input type="password" id="mdpC" name="mdpC" required />
    </div>
    
    <div>
        <button type="submit">S'inscrire </button>
    </div>
</form>
<?php include 'footer.php'; ?>