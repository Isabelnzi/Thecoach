<?php
//définir un cookie qui sera envoyé 
if (!empty($_POST)) {
    setcookie('login', $_POST['login'], time() + (60 * 60 * 24 * 30));
}
if (!empty($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + (60 * 60 * 24 * 30));
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
        <title>Connexion</title>
    </head>
    <body>
        <div>
            <?php
            include 'header.php';
            ?>
        </div>
        <div class="container" id="connexion">
            <div class="row">
                <div class="form input-group  mt-4 mb-4">
                        <form action="index.php" method="POST">
                            <div class="block">
                                <h1>Se connecter à The Coach</h1>
                            <div>
                                <label for="login">Identifiant</label>
                                <input type="text" class="form-control" name="login" id="login" placeholder="Adresse mail ou Identifiant" />
                            </div>
                            <div>
                                <label for="password">Mot de passe</label>
                                <input type="text" name="password" class="form-control" class="password" placeholder="Mot de passe"/>
                            </div>
                            <div>
                                <input type="submit" name="submit" id="btnConnexion" value="Connexion">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include 'Footer.php';
    ?>
    <div>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
