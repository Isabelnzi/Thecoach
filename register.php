<?php
include 'header.php';
include_once 'Controllers/registerCtrl.php';
?>
 <h1 class="h4 mb-4 md-6 ">S'inscrire</h1>
<div class="form">
<form action="#" method="POST">
    <div class="form has-error">
        <label for="lastname"><?= REGISTER_LASTNAME ?></label>
        <input type="text" name="lastname" id="lastname"/>
    </div>
    <div class="form has-error">
        <label for="firstname"><?= REGISTER_FIRSTNAME ?></label>
        <input type="text" name="firstname" id="firstname"/>
    </div>
    <div class="form has-error">
        <label for="mail"><?= REGISTER_MAIL ?></label>
        <input type="mail" name="mail" id="mail"/>
    </div>
    <div class="form has-error">
        <label for="login"><?= REGISTER_LOGIN ?></label>
        <input type="text" name="login" id="login"/>
    </div>
    <div class="form has-error">
        <label for="password"><?= REGISTER_PASSWORD ?></label>
        <input type="password" name="password" id="password"/></div>
    <div class="form has-error">
        <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
        <input type="password" name="passwordVerify" id="passwordVerify"/></div>
    <div class="form has-error">
        <input type="submit" name="register" id="register" value="<?= REGISTER_SUBMIT ?>" />
    </div>
</form>
</div>
    <div>
        
        
<?php
include 'Footer.php';
?>
    </div>


