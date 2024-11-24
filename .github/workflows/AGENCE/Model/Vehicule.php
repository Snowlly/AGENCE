<?php

$reqVoirVehicule = "SELECT * FROM vehicule";
$VoirVehicule = $bdd->prepare($reqVoirVehicule);
$VoirVehicule->execute();

?>
