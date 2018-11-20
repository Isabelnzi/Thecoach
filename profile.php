<?php
include 'header.php';
include 'controllers/registerCtrl.php';
include 'controllers/profileCtrl.php';
include 'controllers/userCtrl.php';
?>

<div class="container profile">
    <form action="#" method="POST">
    <div class="md-form">
        <label for="password"><?= REGISTER_PASSWORD ?></label>
        <input type="password" name="password" id="password"/>
        <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
    </div>
    <!-- Mot de passe verification-->
    <div class="md-form">
        <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
        <input type="password" name="passwordVerify" id="passwordVerify"/>
        <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p> 
    </div>
    <input type="submit" name="updatePass" id="updatePass" value="MODIFIER" />
</form> 
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="profile-img ">
                    <img src="assets/img/fitness-1348867__340.jpg" alt="joggeur" height="200" width="200" title="joggeur"/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" placeholder="Fichier" id="fichier"/>
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
                    <label for="zipCode">Code Postal</label>
                    <input type="text" class="form-control" name="zipCode" id="zipCode" placeholder="Code postal" value="<?= $profilUser->zipCode ?>"/>
                    <?php if (isset($formError['zipCode'])) { ?>
                        <p class="text-danger"><?= isset($formError['zipCode']) ? $formError['zipCode'] : '' ?></p>
                    <?php } ?>
                    <div class="md-form">
                        <label for="city"><?= REGISTER_CITY ?></label>
                        <select name = "city" id="city" >
                            <option selected disabled>Choisir une ville</option>
                            <?php foreach ($cityName as $cityValue) { ?>
                                <option value="<?= $cityValue->cityValue . id ?>"></option>
                            <?php } ?>
                        </select>
                        <p class="text-danger"><?= isset($formError['city']) ? $formError['city'] : ''; ?></p>

                    </div>
                </div>
                <div>
                    <input type="submit" name="updateButton" id="updateButton" value="MODIFIER" />
                    <!--suppression de votre compte avec demande de confirmation--> 
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal">
                        <i class="fa fa-trash" aria-hidden="true"></i></button>
                    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <a href="profile.php?idUser=<?= $profilUser->id ?>" class="btn btn-danger" id="delete" data-toggle="modal" data-target="#basicExampleModal" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimer votre compte</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-danger"><?= isset($formError['updateButton']) ? $formError['updateButton'] : '' ?></p>
                </div>  
            </div>
        </div>
</div>
    
<?php
include 'footer.php';
?>
