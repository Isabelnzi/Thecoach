<?php
include_once 'header.php';
include_once 'controllers/connexionCtrl.php';
include 'controllers/headerCtrl.php';

?>

<!-- Email -->
<form action="#" method="POST" class="text-center border border-light p-5">
    <h1 class="h4 mb-4">SE CONNECTER</h1>
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

