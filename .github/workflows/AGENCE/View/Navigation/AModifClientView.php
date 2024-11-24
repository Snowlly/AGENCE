<h1 class="TitrePage">Modifier un client :</h1>

<?php
while ($row = $AfficheClient->fetch()) {

    echo "<form class='formClientele' method='post'>";
    echo "<label>Civilité :</label><br>";
    echo "<select name='civilite'>";
    echo "<option value='{$row["civilite"]}'>{$row["civilite"]}</option>";
        echo "<option value='Mr'>Mr</option>";
        echo "<option value='Mme'>Mme</option>";
    echo "</select><br><br>";
    echo "<label>Votre Prénom :</label><br>";
    echo "<input name='prenom' type='text' required value='{$row["prenom"]}'><br><br>";
    echo "<label>Votre Nom :</label><br>";
    echo "<input name='nom' type='text' required value='{$row["nom"]}'><br><br>";
    echo "<label>Votre Login :</label><br>";
    echo "<input name='login' type='text' minlength='4' required value='{$row["login"]}'><br><br>";
    echo "<label>Votre Email :</label><br>";
    echo "<input name='mail' type='email' required value='{$row["email"]}'><br><br>";
    echo "<label>Votre Téléphone :</label><br>";
    echo "<input name='tel' type='tel' required value='{$row["tel"]}'><br><br>";
    echo "<button name='BtnModifClient'>Modifier le client</button>";
    echo "</form>";


}

?>