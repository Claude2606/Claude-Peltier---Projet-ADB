<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=galerieart', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Émettre une alerte à chaque fois qu'une requête a échoué.
    global $bdd; // Définir la variable globale

}
// Retourne un message d'erreur lorsqu'une exception est levée
catch (\Exception $e){
    echo $e->getMessage();
}

