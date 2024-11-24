<?php

session_start();

$idClient = $_GET['idClient'];

$reqAfficheClient = "SELECT * FROM personne WHERE id_personne = $idClient";
$AfficheClient = $bdd->prepare($reqAfficheClient);
$AfficheClient->execute();

if(isset($_POST['BtnModifClient'])){

    $civilite = htmlspecialchars($_POST['civilite']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $role = htmlspecialchars($_POST['role']);
    $tel = htmlspecialchars($_POST['tel']);

    $reqNewVehicule = "UPDATE personne SET civilite = ?, prenom = ?, nom = ?, email = ?, role = ?, tel = ? WHERE id_personne = ?";
    $prepareNewVehicule = $bdd->prepare($reqNewVehicule);
    $prepareNewVehicule->execute([$civilite, $prenom, $nom, $email, $role, $tel, $idClient]);

    echo "<script> alert('La modification du véhicule est réussie !') </script>";
    header('location: index.php?page=AClientele');

}


?>
