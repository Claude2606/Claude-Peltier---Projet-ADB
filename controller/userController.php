<?php
session_start();
//Récupération du model avec les fonctions
require($_SERVER['DOCUMENT_ROOT']."/GalerieArt/model/userModel.php");

// Si le bouton inscription à été envoyé
if(isset($_POST['bInscription'])){
    //Récupération des données du formulaire
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $nom = htmlspecialchars(strtolower(trim($_POST['nom'])));
    $username = htmlspecialchars(trim($_POST['username']));
    $password1 = htmlspecialchars(trim($_POST['password1']));
    $password2 = htmlspecialchars(trim($_POST['password2']));

    //Si les données récupérés ne sont pas vides
    if(!empty($prenom)&&!empty($prenom)&&!empty($username)&&!empty($password1)){
        //Si le mot de passe et la confirmation correspondent
        if($password1 === $password2){
            // On crypte le mot de passe reçu
            $password1 = md5($password1);
            // On transmet à la fonction "insertdata" les données à introduire en base de données
            $message = insertData($prenom,$nom,$username,$password1);
            if(isset($message)){
                //On transmet le message par l'url
                header("Location: ../vue/pinscription.php?message=".$message);
                exit;
            }
            //On redirige et transmet à l'utilisateur la réussite de l'inscription
            header("Location: ../vue/pconnexion.php?success");
            exit;
        } 
        //Si les mots de passes ne correspondent pas, on indique le message dans la variable message
        else {
            $message = "Les mots de passes ne correspondent pas !";
        }
        echo $message;
    }
}
// Si l'utilisateur a appuyer sur le bouton connexion
else if(isset($_POST['bconnexion'])){
    //On récupère le username et le password
    $username = htmlspecialchars(strtolower(trim($_POST['username'])));
    $password = md5(htmlspecialchars(trim($_POST['password'])));
    // On appelle la fonction login
    login($username,$password);
    // On le redirige vers l'accueil
    header("Location: ../vue/paccueil.php");
    exit;

} 
// Si l'utilisateur a appuyer sur le bouton deconnexion
else if (isset($_POST['bDeconnect'])) {
    //On appelle la fonction déconnexion
    logout();
    header("Location: vue/pconnexion.php");
    exit;
}
?>
