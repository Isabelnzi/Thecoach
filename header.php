<?php
session_start();
include 'lang/FR_FR.php';
include 'controllers/headerCtrl.php';
?>
<!Doctype html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Monoton" rel="stylesheet">
        <title><?= ($_SERVER['PHP_SELF']) == '/header.php' ? LOGIN_TITLE : REGISTER_TITLE ?></title>
        <!--création d'une navbar-->
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning ">
            <a class="navbar-brand" href="http://thecoach/accueil">The Coach</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://thecoach/DevenirCoach">Devenir Coach</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programmes</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://thecoach/programme">Sportifs</a>
                            <a class="dropdown-item" href="http://thecoach/programme">Alimentaire</a>
                            <a class="dropdown-item" href="http://thecoach/Decouverte">Découverte</a>
                            <a class="dropdown-item" href="http://thecoach/Entreprise">Société/Entreprise</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </li> 
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <?php if (!isset($_SESSION['isConnect'])) { ?>
                                <a class="btn btn-indigo" href="http://thecoach/connexion" role="button" id="submit"><?= NAV_CONNECT ?></a>
                            <?php } else { ?>
                                <a class = "nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?= sprintf(NAV_WELCOME, $_SESSION['firstname']) ?></a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="http://thecoach/MonCompte?id=<?= $_SESSION['id'] ?>"><?= NAV_PROFILE ?></a>
                                    <a class="dropdown-item" href="http://thecoach/proposition?idPropositions=<?= $_SESSION['id'] ?>"><?= NAV_EVENT?></a>
                                    <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONNECT ?></a>
                                </div>
                    <?php }
                    ?>
                    </ul>
                </form>
                <div>
                     <?php if (!isset($_SESSION['isConnect'])) { ?>
                <a class="btn btn-indigo" href="http://thecoach/inscription" role="button" id="submit">Inscription</a>
                <?php } ?>
            </div>
            </div>
        </nav> 
