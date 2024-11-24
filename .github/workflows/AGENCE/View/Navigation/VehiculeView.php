-<div class="containerVoirVehiculeMain">
    <H1 class="TitrePage">Liste des véhicules :</H1>
    <div class="sousContainerVoirVehicule">
        <?php
        while ($row = $VoirVehicule->fetch()) {
            echo "
                      <div class='Row voirVehicule'>
                      <img src='View/assets/img/{$row['photo']}'><h2 class='vehicule'> Marque : {$row['marque']} | Modèle : {$row['modele']} | Matricule n°{$row['matricule']} | Prix : {$row['prix_journalier']} |  Type : {$row['type_vehicule']}</h2>
                      </div>
                ";
        }
        ?>
    </div>
</div>
