<?php
    include 'utils.inc.php';
    $pageBD = 'base.php';
    $titBD = 'Lire la BD';

    $pageLogin = 'login.php?step=LOGIN';
    $titLogin = 'LOGIN';

    $pageLire = 'lire-enregistrements.php';
    $titLire = 'Lire data.txt';
?>
<?php start_page('TD3'); ?>
<div style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <form action="data-processing.php" method="post" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <input type="text" name="id" placeholder="Identifiant">
        <input type="radio" id="male" name="sexe" value="Homme">
        <label for="male">Homme</label>
        <input type="radio" id="female" name="sexe" value="Femme">
        <label for="female">Femme</label>
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Mot de passe">
        <input type="password" name="verifPwd" placeholder="Vérifiez le mdp">
        <input type="text" name="phone" placeholder="Téléphone">
        <select id="pays" name="pays">
            <option value="">Selectionner Pays</option>
            <option value="France" name="fr">France</option>
            <option value="Belgique" name="bg">Belgique</option>
            <option value="Monaco" name="mn">Monaco</option>
            <option value="Autre" name="autre">Autre</option>
        </select>
        <input type="checkbox" id="cgu" name="cgu">
        <label for="cgu">J'accepte les Conditions Générales d'Utilisation</label>
        <input name="action" type="submit" value="Mailer">
        <input  title="Enregistrer dans data.txt" type="submit" name="action" value="REC"/>
    </form>
    <div style = "height: 1%;"></div>
    <a href="<?= $pageBD?>"><button><?= $titBD?></button></a>
    <a href="<?= $pageLogin?>"><button><?= $titLogin?></button></a>
    <a href="<?= $pageLire?>"><button><?= $titLire?></button></a>
</div>

<?php end_page(); ?>
