<?php

include 'controllers/propositionCtrl.php'
?>
<form action="#" method="post">
    <table>
        <tr><td>
                <?= REGISTER_LOGIN ?>
            </td><td>
                <input type="text" name="auteur" maxlength="30" size="50" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"/>
            </td></tr><tr><td>
                Date et heure :
            </td><td>
                <input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['datehour'])) echo htmlentities(trim($_POST['datehour'])); ?>"/>
            </td></tr><tr><td>
                Activité :
            </td><td>
                <input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['activity'])) echo htmlentities(trim($_POST['activité'])); ?>"/>
            </td></tr><tr><td>
                Sujet :
            </td><td>
                <textarea name="news" cols="50" rows="10"><?php if (isset($_POST['sujet'])) echo htmlentities(trim($_POST['sujet'])); ?></textarea>
            </td></tr><tr><td><td align="right">
                <input type="submit" name="go" value="Poster l'activité">
            </td></tr></table>
</form>
<?php
if (isset($erreur))
    echo '<br /><br />', $erreur;
?>


