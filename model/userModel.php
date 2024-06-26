<?php
include($_SERVER['DOCUMENT_ROOT']."/GalerieArt/model/dbconnect.php");

//Insertion de données
function insertData($prenom,$nom,$username,$password){
    // Récupère les données de la base de données
    global $bdd;
    $role = 0;
    
    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL pour insérer les données dans user_data
    $querysql = "INSERT INTO user_data (prenom_user, nom_user) VALUES (:prenom_user, :nom_user)";
    // Prépare la requête SQL
    $stmtUserData = $bdd->prepare($querysql);
    // BindParam
    $stmtUserData->bindParam(":prenom_user",$prenom);
    $stmtUserData->bindParam(":nom_user",$nom);

    //Exécution de la requête SQL
    try {
        $stmtUserData->execute();
    }
    catch(PDOException $e) {
        return "Une erreur s'est produite lors de l'insertion des données de l'utilisateur: " . $e->getMessage();
    }
    if(isset($message)){
        return $message;
    }

    // Récupération du dernier enregistrement
    $sqlLastUser = "SELECT user_data_id FROM user_data ORDER BY user_data_id DESC LIMIT 1";
    $stmtUsers = $bdd->prepare($sqlLastUser);
    $stmtUsers->execute();
    
    // Récupération de l'id du dernier enregistrement
    $idUsers = $stmtUsers->fetchColumn();
    if(!$idUsers){
        return "Une erreur s'est produite lors de la récupération de l'ID utilisateur.";
    }

    // Requête SQL pour insérer les données dans user
    $querysqlData = "INSERT INTO user (username, password, role, user_id) VALUES (:username, :password, :role, :user_id)";
    //Prépare la requête SQL
    $stmtUserInsert = $bdd->prepare($querysqlData);
    $stmtUserInsert->bindParam(":username",$username);
    $stmtUserInsert->bindParam(":password",$password);
    $stmtUserInsert->bindParam(":role",$role);
    $stmtUserInsert->bindParam(":user_id",$idUsers, PDO::PARAM_INT);

    try {
        $stmtUserInsert->execute();
    }
    catch(PDOException $e) {
        return "Une erreur s'est produite lors de l'insertion des données de connexion: " . $e->getMessage();
    }
    // Si message d'erreur, on le retourne
    if(isset($message)){return $message;}
}

// Fonction de vérification avant connexion
function login($username,$password){
    //Récupération de la connexion à la BDD
    global $bdd;
    //Préparation de la requete qui permet de vérifier si l'utilisateur correspond à un utilisateur de base de données
    $sqlUser = "SELECT * FROM `user` join user_data where user.user_data_id = user_data_id AND username= :username AND password= :password";
    $stmtUsers = $bdd->prepare($sqlUser);
    $stmtUsers->bindParam(":username",$username);
    $stmtUsers->bindParam(":password",$password);

    try{
        $stmtUsers->execute();
    }
     catch(PDOException $e){
        $message = "Erreur lors de la connexion";
    }
    //On récupère les données de la base de données dans un tableau
    $user = $stmtUsers->fetch();

    //Si le mdp correspond, on stock le tableau dans une variable session
    if ($user && password_verify($password, $user ['password'])) {
        $_SESSION['user'] = $user;
        return "Connexion réussi.";
    }
    else {
        return "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

// Fonction qui permet de déconnecter l'utilisateur (supprime les données qui sont stockées en session)
function logout(){
   session_destroy();
}
?>