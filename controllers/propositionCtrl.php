<?php
if (isset($_POST['go']) && $_POST['go']=='Poster la news') {
	

	// on teste la déclaration de nos variables
	if (!isset($_POST['login']) && !isset($_POST['datehour']) && !isset($_POST['activity']) && !isset($_POST['sujet'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	if (empty($_POST['login']) || empty($_POST['datehour']) || empty($_POST['activity'])) {
		$erreur = 'Au moins un des champs est vide.';
	}
	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// lancement de la requête d'insertion
		$sql = 'INSERT INTO news VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['titre']).'", "'.date("Y-m-d H:i:s").'", "'.mysql_escape_string($_POST['news']).'")';

		// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on ferme la connexion à la base de données
		mysql_close();

		// on redirige vers la page d'accueil du site (attention, cette redirection ne fonctionne qui si vous avez placé cette page dans un répertoire à partir de la racine du site). Si ce n'est pas le cas, veuillez entrer ici le bon chemin d'accès afin de retomber sur la page d'accueil du site.
		header('Location: ../index.php');
		// on termine le script courant
		exit();
	}
	}
}

