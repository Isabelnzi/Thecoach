<?php
include 'models/offresm.php';
include 'controllers/offresCtl.php'
?>
<form action="offres.php" method="post">
<table>
<tr><td>
Auteur :
</td><td>
<input type="text" name="auteur" maxlength="30" size="50" value="<?php if (isset($_POST['auteur'])) echo htmlentities(trim($_POST['auteur'])); ?>">
</td></tr><tr><td>
Titre :
</td><td>
<input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>">
</td></tr><tr><td>
Activité :
</td><td>
<textarea name="news" cols="50" rows="10"><?php if (isset($_POST['news'])) echo htmlentities(trim($_POST['news'])); ?></textarea>
</td></tr><tr><td><td align="right">
<input type="submit" name="go" value="Poster l'activité">
</td></tr></table>
</form>
<?php
// on affiche les erreurs éventuelles
if (isset($erreur)) echo '<br /><br />',$erreur;
?>



<!DOCTYPE html>
<html>

<head>
 
</body>

</html>