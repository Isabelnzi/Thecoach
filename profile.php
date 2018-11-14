<?php
include 'header.php';
include 'controllers/registerCtrl.php';
include 'controllers/profileCtrl.php';
include 'controllers/userCtrl.php';
?>

<div class="container emp-profile">
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="assets/img/fitness-1348867__340.jpg" alt="joggeur" height="200" width="200" title="joggeur"/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"placeholder="Fichier" id="fichier"/>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-head">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Page permettant de récupérer les données de l'utilisateur enregistrer dans le formulaire en utilisant la méthode POST--> 
            <div class="form-group">
                <div class="row">
                    <label for="lastname">Nom </label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom" value="<?= $profilUser->lastname ?>"/>
                    <?php if (isset($formError['lastname'])) { ?>
                        <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                    <?php } ?>
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom" value="<?= $profilUser->firstname ?>"/>
                    <?php if (isset($formError['firstname'])) { ?>
                        <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                    <?php } ?>
                    <label for="birthDate">Date de naissance</label>
                    <input type="date" class="form-control" name="birthDate" id="birthDate" value="<?= $profilUser->birthDate ?>"/>
                    <?php if (isset($formError['birthDate'])) { ?>
                        <p class="text-danger"><?= isset($formError['birthDate']) ? $formError['birthDate'] : '' ?></p>
                    <?php } ?>
                    <label for="email">Adresse email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Adresse mail" value="<?= $profilUser->email ?>"/>
                    <?php if (isset($formError['email'])) { ?>
                        <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                    <?php } ?>
                    <label for="phoneNumber">Téléphone</label>
                    <input type="text" class="form-control" name="phoneNumber" id="phone" placeholder="Téléphone" value="<?= $profilUser->phoneNumber ?>"/>
                    <?php if (isset($formError['phoneNumber'])) { ?>
                        <p class="text-danger"><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?></p>
                    <?php } ?>
                    <label for="address">Adresse</label>
                    <input type="text" class="form-control" name="address" id="phone" placeholder="Adresse" value="<?= $profilUser->address ?>"/>
                    <?php if (isset($formError['address'])) { ?>
                        <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
                    <?php } ?>
                    <label for="cityName">Ville</label>
                    <input type="text" class="form-control" name="cityName" id="city" placeholder="Ville" value="<?= $profilUser->cityName ?>"/>
                    <?php if (isset($formError['cityName'])) { ?>
                        <p class="text-danger"><?= isset($formError['cityName']) ? $formError['cityName'] : '' ?></p>
                    <?php } ?>
                    <label for="zipCode">Code Postal</label>
                    <input type="text" class="form-control" name="zipCode" id="zipCode" placeholder="Code postal" value="<?= $profilUser->zipCode ?>"/>
                    <?php if (isset($formError['zipCode'])) { ?>
                        <p class="text-danger"><?= isset($formError['zipCode']) ? $formError['zipCode'] : '' ?></p>
                    <?php } ?>
                <i class="far fa-user-edit"></i>
                     <input type="submit" name="updateButton" value="MODIFIER" />
                    <a href="profile.php?idUser=<?= $profilUser->id ?>" class="btn btn-danger" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div> 
            </div>

    </form>
    <p class="text-danger"><?= isset($formError['submit']) ? $formError['submit'] : '' ?></p>
</div>
</form>           
</div>
<?php
include 'footer.php';
?>