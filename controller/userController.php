<?php
session_start();
require($_SERVER['DOCUMENT_ROOT']."/GalerieArt/model/userModel.php");

if(isset($_POST['bInscription'])){
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $nom = htmlspecialchars(strtolower(trim($_POST['nom'])));
    $username = htmlspecialchars(trim($_POST['username']));
    $password1 = htmlspecialchars(trim($_POST['password1']));
    $password2 = htmlspecialchars(trim($_POST['password2']));

    if(!empty($prenom)&&!empty($prenom)&&!empty($username)&&!empty($password1)){
        if($password1 === $password2){
            $message = insertData($prenom,$nom,$username,$password1);
            if(isset($message)){
                header("Location: ../vue/pinscription.php?message=".$message);exit;
            }
            header("Location: ../vue/pconnexion.php?success");exit;
        } 
        else {
            $message = "Les mots de passes ne correspondent pas !";
        }
        echo $message;
    }
}
else if(isset($_POST['bconnexion'])){
    $username = htmlspecialchars(strtolower(trim($_POST['username'])));
    $password = md5(htmlspecialchars(trim($_POST['password'])));
    login($username,$password);
    header("Location: ../vue/paccueil.php");exit;
}
?>
