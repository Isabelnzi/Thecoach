<?php
include 'configuration.php';
$login = '';
$formError = array();
$message='';

  // definir un cookie qui sera envoyé et ou sera stocké le login et le password     
  if (!empty($_POST)) {
setcookie('login', $_POST['login'], time() + (60 * 120 * 24 * 30));
}
if (!empty($_POST['password'])) {
setcookie('password', $_POST['password'], time() + (60 *120 * 24 * 30));
}      

if (!empty($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
}else{
    $formError['login'] = ERROR_LOGIN;
}

if (!empty($_POST['password'])) {
    $password = $_POST['password'];
}else{
  $formError['password'] = ERROR_LOGIN;
}

if(count($formError) == 0){
    $user = new users();
    $user->login = $login;
    if($user->userConnection()){
        if(password_verify($password, $user->password)){
            //la connexion se fait
            header('location:accueil');//redirection
            $message = USER_CONNECTION_SUCCESS;
            //On rempli la session avec les attributs de l'objet issus de l'hydratation
            $_SESSION['login'] = $user->login;
            $_SESSION['lastname'] = $user->lastname;
            $_SESSION['firstname'] = $user->firstname;
            $_SESSION['id'] = $user->id;
            $_SESSION['isConnect'] = true;
        }else{
            //la connexion échoue
            $message = USER_CONNECTION_ERROR;
        }
    }
}
