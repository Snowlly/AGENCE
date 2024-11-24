<?php

session_start();

$idVehicule = $_GET['idVehicule'];

$reqAfficheVehicule = "SELECT * FROM vehicule WHERE id_vehicule = $idVehicule";
$AfficheVehicule = $bdd->prepare($reqAfficheVehicule);
$AfficheVehicule->execute();

if(isset($_POST['BtnModifVehicule'])){

    $marque = htmlspecialchars($_POST['marque']);
    $model = htmlspecialchars($_POST['modele']);
    $matricule = htmlspecialchars($_POST['matricule']);
    $prix = htmlspecialchars($_POST['prix']);
    $type = htmlspecialchars($_POST['type']);

    $reqNewVehicule = "UPDATE vehicule SET marque = ?, modele = ?, matricule = ?, prix_journalier = ?, type_vehicule = ? WHERE id_vehicule = ?";
    $prepareNewVehicule = $bdd->prepare($reqNewVehicule);
    $prepareNewVehicule->execute([$marque, $model, $matricule, $prix, $type , $idVehicule]);

    echo "<script> alert('La modification du véhicule est réussie !') </script>";
    header('location: index.php?page=ANewVehicule');

}


?>
