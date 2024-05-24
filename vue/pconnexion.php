<?php
$title = "Connexion";
include('header.php');
?>

<section class="connexion">
    <div class="container">
        <?php if(isset($_GET['success'])){ echo "<p class='alert alert-success'>Votre inscription s'est correctement déroulée</p>";}?>
        <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/GalerieArt/controller/userController.php" method="POST">
        <h1><?php echo $title;?></h1>
            <div class="input">
                <label>Nom d'utilisateur :</label>
                <input type="text" name="username" focus required>
            </div>

            <div class="input">
                <label>Mot de passe :</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="bconnexion">Se Connecter</button>

            <div>
                <p>Vous n'avez pas de compte ? <a href="pinscription.php">Créer un compte !</a></p>
            </div>
        </form>

    </div>
</section>
</body>
</html>