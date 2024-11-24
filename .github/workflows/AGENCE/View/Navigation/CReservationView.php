<div class="containerResa">
    <form class="formClientele" method="post">
        <label>Vehicule :</label><br>
        <select name="marque">
            <?php
            while ($row = $Reservation->fetch()) {
                echo "<option value='{$row['id_vehicule']}'>{$row['marque']}</option>";
            }
            ?>
        </select><br><br>
        <label>Choisir une date de début :</label><br>
        <input name="dateDebut" type="date"><br><br>
        <label>Choisir une date de fin :</label><br>
        <input name="dateFin" type="date"><br><br>
        <button name="BtnResa">Reservation</button>

    </form>

</div>
