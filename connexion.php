<?php
include_once 'header.php';
include_once 'controllers/connexionCtrl.php';
include 'controllers/headerCtrl.php';
//définir un cookie qui sera envoyé 
//if (!empty($_POST)) {
// setcookie('login', $_POST['login'], time() + (60 * 60 * 24 * 30));
//}
//if (!empty($_POST['password'])) {
//setcookie('password', $_POST['password'], time() + (60 * 60 * 24 * 30));
//}
?>

<!-- Email -->
<form action="#" method="POST" class="text-center border border-light p-5">
    <h1 class="h4 mb-4">S'inscrire</h1>
    <label for="login"><?= FORM_LOGIN ?></label>
    <input type="text" name="login" id="login" class="form mb-4"/>
    <label for="password"><?= FORM_PASSWORD ?></label>
    <input type="password" name="password" id="password" class="form mb-4"/>
    <input type="submit" value="<?= FORM_LOGIN_SUBMIT ?>" name="loginSubmit" id="loginSubmit" />
</form>
<?php if ($message != '') { ?>
    <p><?= $message ?></p>
<?php } ?>
</body>
</html>
<?php
include 'footer.php';
?>
<div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
