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
         
        <form action="#" method="POST">
            <label for="login"><?= FORM_LOGIN ?></label>
            <input type="text" name="login" id="login" />
            <label for="password"><?= FORM_PASSWORD ?></label>
            <input type="password" name="password" id="password" />
            <input type="submit" value="<?= FORM_LOGIN_SUBMIT ?>" name="loginSubmit" id="loginSubmit" />
        </form>
        <?php if($message != '') { ?>
            <p><?= $message ?></p>
        <?php } ?>
    </body>
</html>
    <?php
    include 'Footer.php';
    ?>
    <div>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
