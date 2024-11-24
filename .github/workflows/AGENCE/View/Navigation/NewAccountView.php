<html lang="fr">
<body>

<div class="ContainerNewAccount">
    <div class="Row Grid1x2">
        <div>
            <img src="View/assets/img/New-account.png">
        </div>
        <div>
            <form method="post">
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
        </div>
    </div>

</div>


</body>
</html>

