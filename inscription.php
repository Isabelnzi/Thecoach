<!--insere le controleur du formulaire ou se trouve tout le code PHP-->
<?php include 'Controllers/controllerINscription.php' ?>

        <!--affiche les resultat si aucune érreur est compté dans le tableau-->
        <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
            <p><?= $lastName ?></p>
            <p><?= $firstName ?></p>
            <p><?= $dateOfBirth ?></p>
            <p><?= $countryOfBirth ?></p>
            <p><?= $nationality ?></p>
            <p><?= $address ?></p>
            <p><?= $mail ?></p>
            <p><?= $phone ?></p>
            <p><?= $City ?></p>
            <p><?= $zipcode ?></>
            <p><?= $exp ?></p>
            <!--Sinon affiche le formulaire-->
        <?php } else { ?>
            <!Doctype html>
        <html>
            <head>
                <meta charset = "utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
                <link rel="stylesheet" href="/assets/css/style.css">
                <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
                <title>Inscription</title>
            </head>
            <body>
                <div>
                    <?php
                    include 'header.php';
                    ?>
                </div>

                <form class="form-group" method="Post" action="inscription.php"> 
                    <!--créatiton d'un formulaire pour l'inscription d'un candidat en utilisant la methode POST-->

                    <div class="container">
                        <!--formulaire demandant une liste déroulante(Mr ou Mme), nom, prénom age et société rediriger vers la page index.php-->
                        <h1><span class="badge-warning">Formulaire d'inscription</span></h1>
                        <div class="form-group">
                            <label for="civility">Civilité : *</label>
                            <Select class="form-control is-valid" name="civility" id="civility">
                                <option selected disabled>Veuillez choisir une option</option>
                                <!--vérifie si une option est choisie et si la clé = 1 ou 2  si oui sauvegarde l'option selectionnée aprés la validation du formulaire-->
                                <option value="1" <?= (!empty($_POST['civility']) && $_POST['civility'] == 1) ? 'selected' : '' ?>>M</option>
                                <option value="2" <?= (!empty($_POST['civility']) && $_POST['civility'] == 2) ? 'selected' : '' ?>>Mme</option>
                            </select>
                            <p class="text-danger"> <?= isset($formError['civility']) ? $formError['civility'] : ''; ?></p>
                            <label for="lastname">Nom : *</label>
                            <!--sauvegarde les données saisie dans le champs aprés la validation du formulaire-->
                            <input class="form-control is-valid" placeholder="Nom" type="text" name="lastname" id="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
                            <p class="text-danger"> <?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>

                            <label for="firstname">Prénom : *</label>
                            <input class="form-control is-valid" placeholder="Prénom" type="text" name="firstname" id="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
                            <p class="text-danger"> <?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>

                            <label for="dateOfBirth">Date de naissance</label>
                            <input class="form-control" type="date" id="dateOfBirth" name="dateOfBirth" value="<?= isset($dateOfBirth) ? $dateOfBirth : '' ?>" />
                            <p class="text-danger"><?= isset($formError['dateOfBirth']) ? $formError['dateOfBirth'] : ''; ?></p>

                            <label for="address">Adresse</label>
                            <input class="form-control" id="address" placeholder="Adresse" type="text" name="address" value="<?= isset($address) ? $address : '' ?>" />
                            <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                            <label for="lastname">Ville : *</label>
                            <!--sauvegarde les données saisie dans le champs aprés la validation du formulaire-->
                            <input class="form-control is-valid" placeholder="Ville" type="text" name="city" id="city" value="<?= isset($lastname) ? $lastname : '' ?>" />
                            <p class="text-danger"> <?= isset($formError['city']) ? $formError['city'] : ''; ?></p>
                            <label for="phone">Code postal</label>
                            <input class="form-control" id="state zip" placeholder="Code postale" name="state zip" value="<?= isset($statezip) ? $phone : '' ?>" />
                            <p class="text-danger"><?= isset($formError['state zip']) ? $formError['state zip'] : ''; ?></p>
                            <label for="mail">Email</label>
                            <input class="form-control" placeholder="exemple@exemple.com" id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                            <label for="phone">Téléphone</label>
                            <input class="form-control" id="phone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" />
                            <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                            <p>Avez vous déjà eu recours a un coach sportif ?</p>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Non</label>
                            </div>
                        </div>
                        <div>
                            <input class="btn b-warning" type="submit" value="Envoyer" name='submit'/>
                        </div>
                    </div> 
                <?php } ?>

                <div>
                    <?php
                    include 'Footer.php';
                    ?>
                    <div>
                        

