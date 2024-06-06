<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<!-- On démarre la session dans le header -->
<?php session_start();

// Si l'utilisateur est connecté
if(isset($_SESSION['user'])){

?>
<!-- Le bouton déconnexion apparaît -->
<form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/GalerieArt/model/userController.php" method="POST">
    <input type="submit" value="Deconnexion" name="bDeconnect">
</form>
<?php };?>