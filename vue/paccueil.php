<?php
$title = "Accueil";
include('header.php');
?>

<header>

    <div>
    <!-- Le bouton déconnexion apparaît -->
    <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/GalerieArt/controller/userController.php" method="POST">
        <input class="deconnect" type="submit" value="Déconnexion" name="bDeconnect">
    </form>
    </div>


    <div class="logo">
        <a href="paccueil.php"><img src="../assets/Logo.png" alt="Logo galerie d'art"></a>
    </div>
    <div class="user">
        <img src="../assets/icon user.png" alt="Logo Utilisateur">
    </div>
</header>

<section class="section-one">
    <div class="fond">
        <p>L'art aide à vivre</p>
    </div>
</section>

<section class="section_two">
    <div class="images-container">

        <div class="oeuvres">
            <p>La Joconde - Lénonard de Vinci (1517)</p>
            <div class="zoom">
                <img src="../assets/La Joconde" alt="La Joconde">
            </div>
        </div>

        <div class="oeuvres">
            <p>La Cène - Léonard de Vinci (1498)</p>
            <div class="zoom">
                <img src="../assets/La Cène" alt="La Cène">
            </div>
        </div>

        <div class="oeuvres">
            <p>La Nuit étoilée - Vincent Van Gogh (1889)</p>
            <div class="zoom">
                <img src="../assets/La Nuit étoilée" alt="La Nuit étoilée">
            </div>

        </div>

        <div class="oeuvres">
            <p>La Persistance de la mémoire - Salvator Dali (1931)</p>
            <div class="zoom">
                <img src="../assets/La Persistance de la mémoire" alt="La Persistance de la mémoire">
            </div>
        </div>

        <div class="oeuvres">
            <p>Le Dernier Voyage du Téméraire - J.M.W Turner (1838)</p>
            <div class="zoom">
                <img src="../assets/Le Dernier Voyage du Téméraire" alt="Le Dernier Voyage du Téméraire">
            </div>

        </div>

        <div class="oeuvres">
            <p>Impression, soleil levant - Claude Monet (1872)</p>
            <div class="zoom">
                <img src="../assets/Impression, soleil levant" alt="Impression, soleil levant">
            </div>
        </div>

        <div class="oeuvres">
            <p>La Jeune Fille à la perle - Johannes Vermeer (1665)</p>
            <div class="zoom">
                <img src="../assets/La Jeune Fille à la perle" alt="La Jeune Fille à la perle">
            </div>
        </div>

        <div class="oeuvres">
            <p>Le Radeau de la Méduse - Théodore Géricault (1819)</p>
            <div class="zoom">
                <img src="../assets/Le Radeau de la Méduse" alt="Le Radeau de la Méduse">
            </div>
        </div>

        <div class="oeuvres">
            <p>Saturne dévorant un de ses fils - Francisco de Goya (1823)</p>
            <div class="zoom">
                <img src="../assets/Saturne dévorant un de ses fils" alt="Saturne dévorant un de ses fils">
            </div>
        </div>

        <div class="oeuvres">
            <p>La Grande Vague de Kanagawa (La Vague) - Katsushika Hokusai (1831)</p>
            <div class="zoom">
                <img src="../assets/La Grande Vague de Kanagawa" alt="La Grande Vague de Kanagawa">
            </div>
        </div>

        <div class="oeuvres">
            <p>La Naissance de Vénus - Sandro Botticelli (1485)</p>
            <div class="zoom">
                <img src="../assets/La Naissance de Vénus" alt="La Naissance de Vénus">
            </div>
        </div>

        <div class="oeuvres">
            <p>Le Baiser - Francesco Hayez (1859)</p>
            <div class="zoom">
                <img src="../assets/Le Baiser" alt="Le Baiser">
            </div>
        </div>
    </div>

    <div class="popup_image">
        <span>&times;</span>
        <img src="../assets/La Joconde" alt="">
    </div>

    <script>
    document.querySelectorAll('.images-container img').forEach(image =>{
        image.onclick = () =>{
            document.querySelector('.popup_image').style.display = 'block';
            document.querySelector('.popup_image img').src = image.getAttribute('src');
        }
    });

    document.querySelector('.popup_image span').onclick = () =>{
        document.querySelector('.popup_image').style.display = 'none';
    }
    </script>

    <footer>
        <p>Copyright @ Claude Peltier 2024</p>
    </footer>
</section>
</body>
</html>