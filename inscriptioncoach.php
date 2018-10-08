<?php
include 'header.php';
?>
</div>        
<h1>Inscription coach </h1>
<?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?> 
    <p id="ok">Les données ont été enregistrées</p>
    <p id="ok"><a href="#" title="lien vers l'ajout de patient" alt="ajout de patient"><button type="button" class="btn btn-dark">AJOUTER UN NOUVEAU PATIENT</button></a></p>
<?php } else { ?>   
    <div class="container-fluid">
        <div class="row">
            <div id="formBox" class="offset-2 col-8 offset-2">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom" <?= isset($lastname) ? 'value="' . $lastname . '"' : '' ?>/>
                        <?php if (isset($formError['lastname'])) { ?>
                            <p class="text-danger"><?= $formError['lastname']; ?></p>
                        <?php } ?>
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" <?= isset($firstname) ? 'value="' . $firstname . '"' : '' ?>/>
                        <?php if (isset($formError['firstname'])) { ?>
                            <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                        <?php } ?>
                        <label for="birthDate">Date de naissance</label>
                        <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="jj/mm/aaaa" <?= isset($birthdate) ? 'value="' . $birthdate . '"' : '' ?>/>
                        <?php if (isset($formError['birthdate'])) { ?>
                            <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></p>
                        <?php } ?>
                        <label for="mail">Adresse mail</label>
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Adresse mail" <?= isset($mail) ? 'value="' . $mail . '"' : '' ?>/>
                        <?php if (isset($formError['mail'])) { ?>
                            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : '' ?></p>
                        <?php } ?>
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" <?= isset($phone) ? 'value="' . $phone . '"' : '' ?>/>
                        <?php if (isset($formError['phone'])) { ?>
                            <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : '' ?></p>
                        <?php } ?>
                        <input type="submit" name="submit" id="submit" value="Envoyer"/>
                    </div> 
                </form>
                <p class="text-danger"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
            </div>
        </div>
    </div>
<?php } ?>

<?php
include 'Footer.php';
?>


