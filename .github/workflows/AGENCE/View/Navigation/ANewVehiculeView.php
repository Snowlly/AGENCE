<div class="containerVehicule">
    <form id="formVehicule" method="post">
        <label>Marque :</label><br>
        <select name="marque">
            <option value="NULL">-- Séléctionner une marque --</option>
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
            <option value="Tesla">Tesla</option>
        </select><br><br>
        <label>Modèle :</label><br>
        <select name="modele">
            <option value="NULL">-- Séléctionner un modèle --</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select><br><br>
        <label>Matricule :</label><br>
        <input name="matricule" type="text" minlength="9" maxlength="9" required><br><br>
        <label>Prix journalier :</label><br>
        <input name="prix" type="number" min="100" max="350" required><br><br>
        <label>Type de véhicule :</label><br>
        <select name="type">
            <option value="NULL"> -- Séléctionner le type de véhicule --</option>
            <option value="Voiture">Voiture</option>
            <option value="Camion">Camion</option>
            <option value="2roues">2 roues</option>
        </select><br><br>
        <button name="BtnNewVehicule">Ajouter un véhicule</button>
    </form>

    <div class="containerVoirVehicule">
        <div class="sousContainerVoirVehicule">
            <?php
            while ($row = $VoirVehicule->fetch()) {
                echo "
                      <div class='Row voirVehicule'>
                      <img src='View/assets/img/{$row['photo']}'><h2 class='vehicule'>ID n°{$row['id_vehicule']} | Marque : {$row['marque']} | Modèle : {$row['modele']} | Matricule n°{$row['matricule']} | Prix : {$row['prix_journalier']} |  Type : {$row['type_vehicule']} |  Disponible : {$row['prix_journalier']}</h2>
                      <form method='post'>
                        <input type='hidden' name='idVehicule' value='{$row['id_vehicule']}'>
                        <a class='BtnModifier' href='index.php?page=AModifVehicule&idVehicule={$row['id_vehicule']}'>Modifier</a>
                        <button name='BtnDelete'>X</button>
                      </form>
                      </div>
                ";
            }
            ?>
        </div>
    </div>
</div>
