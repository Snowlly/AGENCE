<?php

session_start();

$reqReservation = "SELECT * FROM vehicule WHERE statut_dispo = 1";
$Reservation = $bdd->prepare($reqReservation);
$Reservation->execute();


if(isset($_POST['BtnResa'])){

    $marque = htmlspecialchars($_POST['marque']);
    $dateDebut = htmlspecialchars($_POST['dateDebut']);
    $dateFin = htmlspecialchars($_POST['dateFin']);
    $idClient = $_SESSION['id_personne'];

    $reqNewVehicule = "INSERT INTO reservation (date_debut, date_fin, id_vehicule, id_personne) VALUES (?, ?, ?, ?)";
    $prepareNewVehicule = $bdd->prepare($reqNewVehicule);
    $prepareNewVehicule->execute([$dateDebut, $dateFin, $marque, $idClient]);

    echo "<script> alert('Ajout du véhicule réussi !') </script>";
    header('location: index.php?page=CReservation');

}
?>
