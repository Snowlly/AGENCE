<?php

session_start();

if(isset($_POST['BtnNewAccount'])){

    $civilite = htmlspecialchars($_POST['civilite']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $login = htmlspecialchars($_POST['login']);
    $mail = htmlspecialchars($_POST['mail']);
    $tel = htmlspecialchars($_POST['tel']);
    $password = htmlspecialchars($_POST['mdp']);
    $confirmPassword = htmlspecialchars($_POST['confirmMdp']);

    if($password === $confirmPassword){

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $reqNewAccount = "INSERT INTO personne (civilite, prenom, nom, login, email, role, date_inscription, tel, mdp) VALUES (?, ?, ?, ?, ?, 'Client', CURRENT_TIMESTAMP, ?, ?)";
        $prepareNewAccount = $bdd->prepare($reqNewAccount);
        $prepareNewAccount->execute([$civilite, $prenom, $nom, $login, $mail, $tel, $passwordHash]);

        echo "<script> alert('Inscription réussie !') </script>";
        header('location: index.php?page=Login');
    } else  {
        echo "<script> alert('La confirmation du mot de passe n\'est pas bonne !') </script>";
    }

    echo "<script> alert('Inscription impossible !') </script>";

}

?>
