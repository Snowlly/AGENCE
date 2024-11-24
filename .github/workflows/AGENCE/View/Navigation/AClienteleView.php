<div class="containerVehicule">
    <form class="formClientele" method="post">
        <label>Civilité :</label><br>
        <select name="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select><br><br>
        <label>Votre Prénom :</label><br>
        <input name="prenom" type="text" required><br><br>
        <label>Votre Nom :</label><br>
        <input name="nom" type="text" required><br><br>
        <label>Votre Login :</label><br>
        <input name="login" type="text" minlength="4" required><br><br>
        <label>Votre Email :</label><br>
        <input name="mail" type="email" required><br><br>
        <label>Votre Téléphone :</label><br>
        <input name="tel" type="tel" required><br><br>
        <label>Saisir un mot de passe :</label><br>
        <input name="mdp" type="password" minlength="4" required><br><br>
        <label>Confirmer un mot de passe :</label><br>
        <input name="confirmMdp" type="password" minlength="4" required><br><br>
        <button name="BtnNewAccount">S'inscrire</button>
    </form>

    <div class="containerVoirVehicule">
        <div class="sousContainerVoirVehicule">
            <?php
            while ($row = $VoirClientele->fetch()) {
                echo "
                      <div class='Row voirVehicule'>
                      <h2 class='vehicule'> Civilité : {$row['civilite']} | Nom : {$row['nom']} | Prénom : {$row['prenom']} | Login : {$row['login']} | Mail : {$row['email']} |  Rôle : {$row['role']} |  Date Inscription : {$row['date_inscription']} |  Tel : {$row['tel']}</h2>
                      <form method='post'>
                        <input type='hidden' name='idClient' value='{$row['id_personne']}'>
                        <a class='BtnModifier' href='index.php?page=AModifClient&idClient={$row['id_personne']}'>Modifier</a>
                        <button name='BtnDelete'>X</button>
                      </form>
                      </div>
                ";
            }
            ?>
        </div>
    </div>
</div>

