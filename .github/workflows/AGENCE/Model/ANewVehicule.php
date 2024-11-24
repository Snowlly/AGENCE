<?php

session_start();

if(isset($_POST['BtnNewVehicule'])){

    $marque = htmlspecialchars($_POST['marque']);
    $model = htmlspecialchars($_POST['modele']);
    $matricule = htmlspecialchars($_POST['matricule']);
    $prix = htmlspecialchars($_POST['prix']);
    $type = htmlspecialchars($_POST['type']);

    if ($marque == 'BMW') {
        $photo = 'bmw.jpeg';
    }
    if ($marque == 'Toyota' && $type == 'Voiture') {
            $photo = 'Toyota.jpeg';
    }
    if ($marque == 'Toyota' && $type == 'Camion') {
        $photo = 'ToyotaCamion.jpeg';
    }
    if ($marque == 'Tesla') {
        $photo = 'Tesla.jpeg';
    }


    $reqNewVehicule = "INSERT INTO vehicule (marque, modele, matricule, prix_journalier, type_vehicule, photo) VALUES (?, ?, ?, ?, ?, ?)";
    $prepareNewVehicule = $bdd->prepare($reqNewVehicule);
    $prepareNewVehicule->execute([$marque, $model, $matricule, $prix, $type, $photo]);

    echo "<script> alert('Ajout du véhicule réussi !') </script>";
        header('location: index.php?page=ANewVehicule');

}

if(isset($_POST['BtnDelete'])){

    $idVehicule = $_POST['idVehicule'];

    $requeteSupprimeVehicule = "DELETE FROM vehicule WHERE id_vehicule = $idVehicule";
    $supprimeVehicule = $bdd->prepare($requeteSupprimeVehicule);
    $supprimeVehicule->execute();

    header('Location: index.php?page=ANewVehicule');
}

$reqVoirVehicule = "SELECT * FROM vehicule";
$VoirVehicule = $bdd->prepare($reqVoirVehicule);
$VoirVehicule->execute();

?>
