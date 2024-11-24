<?php

session_start();

include ('BDD.php');

if (isset($_POST['BtnLogin'])) {
    if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $password = $_POST['mdp'];
        $getUser = $bdd->prepare('SELECT * FROM personne WHERE email = ?');
        $getUser->execute(array($mail));
        $user = $getUser->fetch();

        if ($user && password_verify($password, $user['mdp'])) {
            if ($user['role'] == "Client") {
                getUserInfo($bdd, $mail, 'id_personne');
                getUserInfo($bdd, $mail, 'civilite');
                getUserInfo($bdd, $mail, 'prenom');
                getUserInfo($bdd, $mail, 'nom');
                getUserInfo($bdd, $mail, 'login');
                getUserInfo($bdd, $mail, 'email');
                getUserInfo($bdd, $mail, 'role');
                getUserInfo($bdd, $mail, 'date_inscription');
                getUserInfo($bdd, $mail, 'tel');
                header('Location: index.php?page=CIndex');
                exit();
            } else if ($user['role'] == "Admin") {
                getUserInfo($bdd, $mail, 'id_personne');
                getUserInfo($bdd, $mail, 'civilite');
                getUserInfo($bdd, $mail, 'prenom');
                getUserInfo($bdd, $mail, 'nom');
                getUserInfo($bdd, $mail, 'login');
                getUserInfo($bdd, $mail, 'email');
                getUserInfo($bdd, $mail, 'role');
                getUserInfo($bdd, $mail, 'date_inscription');
                getUserInfo($bdd, $mail, 'tel');
                header('Location: index.php?page=AIndex');
                exit();
            }
        }
    }
}
function getUserInfo($bdd, $mail, $x)
{
    $recup = $bdd->prepare("SELECT $x FROM personne WHERE email = ?");
    $recup->execute(array($mail));
    $utilisateur = $recup->fetch();
    $_SESSION[$x] = $utilisateur[$x];
}
?>
