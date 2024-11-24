<h1 class="TitrePage">Modifier un véhicule :</h1>

<?php
while ($row = $AfficheVehicule->fetch()) {
    echo "<form id='formModifVehicule' method='post'>";
    echo "<label>Marque :</label><br>";
    echo "<select name='marque'>";
    echo "<option value='{$row["marque"]}'>{$row["marque"]}</option>";
    echo "<option value='BMW''>BMW</option>";
    echo "<option value='Toyota'>Toyota</option>";
    echo "<option value='Tesla'>Tesla</option>";
    echo "</select><br><br>";
    echo "<label>Modèle :</label><br>";
    echo "<select name='modele'>";
    echo "<option value={$row["modele"]}>{$row["modele"]}</option>";
    echo "<option value='2020'>2020</option>";
    echo "<option value='2021'>2021</option>";
    echo "<option value='2022'>2022</option>";
    echo "</select><br><br>";
    echo "<label>Matricule :</label><br>";
    echo "<input name='matricule' type='text' minlength='9' maxlength='9' required value='{$row["matricule"]}'><br><br>";
    echo "<label>Prix journalier :</label><br>";
    echo "<input name='prix' type='number' min='100' max='350' required value='{$row["prix_journalier"]}'><br><br>";
    echo "<label>Type de véhicule :</label><br>";
    echo "<select name='type'>";
    echo "<option value='{$row["type_vehicule"]}'>{$row["type_vehicule"]}</option>";
    echo "<option value='Voiture''>Voiture</option>";
    echo "<option value='Camion'>Camion</option>";
    echo "<option value='2roues'>2 roues</option>";
    echo "</select><br><br>";
    echo "<button name='BtnModifVehicule'>Modifier le véhicule</button>";
    echo "</form>";
}
?>
