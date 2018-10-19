<?php
include 'Models/offresm.php';
include 'Controllers/offresCtl.php'
?>
<form action="offres.php" method="post">
<table>
<tr><td>
[b]Auteur :[/b]
</td><td>
<input type="text" name="auteur" maxlength="30" size="50" value="<?php if (isset($_POST['auteur'])) echo htmlentities(trim($_POST['auteur'])); ?>">
</td></tr><tr><td>
[b]Titre :[/b]
</td><td>
<input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>">
</td></tr><tr><td>
[b]News :[/b]
</td><td>
<textarea name="news" cols="50" rows="10"><?php if (isset($_POST['news'])) echo htmlentities(trim($_POST['news'])); ?></textarea>
</td></tr><tr><td><td align="right">
<input type="submit" name="go" value="Poster la news">
</td></tr></table>
</form>
<?php
// on affiche les erreurs éventuelles
if (isset($erreur)) echo '<br /><br />',$erreur;
?>



<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <title>Partagez</title>
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
  <script src="jquery.rss.min.js"></script>
  <script>
    jQuery(function($) {
      $("#rss-feeds").rss("http://feeds.feedburner.com/premiumpixels",
      {
        entryTemplate:'<li><a href="{url}">[{author}@{date}] {title}</a><br/>{teaserImage}{shortBodyPlain}</li>'
      })
    })
  </script>
</head>

<body>
  <div id="rss-feeds"></div>
</body>

</html>