<?php
require_once('db-connect.php');
if (isset($_POST['user_username']) && !empty($_POST['user_username']) && isset($_POST['user_email']) && !empty($_POST['user_email']) && isset($_POST['user_password']) && !empty($_POST['user_password']) && isset($_POST['confirmation']) && !empty($_POST['confirmation'])) {
    $username = strip_tags($_POST['user_username']);
    $email = strip_tags($_POST['user_email']);
    $password = strip_tags($_POST['user_password']);
    $confirmation = strip_tags($_POST['confirmation']);


    if ($password == $confirmation) {
        $password_encrypt = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(username,email,password)VALUES(:user_username,:user_email,:user_password)";
        $query = $db->prepare($sql);
        $query->bindValue(':user_username', $username, PDO::PARAM_STR);
        $query->bindValue(':user_email', $email, PDO::PARAM_STR);
        $query->bindValue(':user_password', $password_encrypt, PDO::PARAM_STR);
        $query->execute();
        echo 'c\'est ok';
    } else {
        echo 'les mots de passe ne correspondent pas';
    }
} else {
    echo 'remplissez tous les champs du formulaire';
}