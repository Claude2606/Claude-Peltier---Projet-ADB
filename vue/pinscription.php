<?php
$title = "Inscription";
include('header.php');
?>

<section class="inscription">
    <div class="container">

        <?php if(isset($_GET['message'])){ echo $_GET['message'];}?>
        <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/GalerieArt/controller/userController.php" method="POST">
        <h1>Inscription</h1>

        <div class="line">
            <div class="input">
                <label>Prénom :</label>
                <input type="text" name="prenom" focus required>
            </div>

            <div class="input">
                <label>Nom :</label>
                <input type="text" name="nom" required>
            </div>  
        </div>

            <div class="input">
                <label>Nom d'utilisateur :</label>
                <input type="text" name="username" required>
            </div>

            <div class="input">
                <label>Mot de passe :</label>
                <input type="password" name="password1" required>
            </div>

            <div class="input">
                <label>Réécrire Mot de passe :</label>
                <input type="password" name="password2" required>
            </div>

            <button type="submit" name="bInscription">S'inscrire</button>
        </form>
    </div>
</section>
</body>
</html>