<?php
include 'header.php';
include 'class/database.php';
include 'controllers/registerCtrl.php';
if (isset($_POST['register']) && (count($formError) === 0)) {
    ?> 
    <div class="containe-fluid">
        <div class="alert" id="Userregister">
            <h1>Votre inscription a bien été prise en compte !</h1>  
        </div>
    <?php } else { ?>
       
                <form class="text-center border  p-2"  style="color: #757575" action="register.php" method="POST">
                    <div class="form-group has-error">
                        <div class="card">
                            <h5 class="card-header warning-color-dark white-text text-center py-4">
                                <strong>S'inscrire</strong>
                            </h5>
                            <!--Card content-->
                            <div class="card-body px-lg-2 pt-0 center">
                                <div class="row">
                                  
                                <!--userTypes et civility -->
                                <p>
                                    <select name="usersTypes">
                                        <option selected disabled="Veuillez choisir">Utilisateurs</option>
                                        <option name="usersTypes" value="1">Clients</option>
                                        <option name="usersTypes" value="2">Coach</option>
                                    </select>
                                </p>
                                <p>
                                    <select name="civility">
                                        <option selected disabled="Veuillez choisir une civilité">Civilité</option>
                                        <option>Mr</option>
                                        <option>Mme</option>
                                    </select>
                                </p>
                                 
                            </div>
                            </div>
                            
                            <div class="col">
                                <!-- Last name  firstname-->
                                <div class="md-form">
                                    <label for="lastname"><?= REGISTER_LASTNAME ?></label>
                                    <input id="lastname" type="text" name="lastname" placeholder="Nom" value="<?= isset($lastname) ? $lastname : '' ?>" />
                                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>

                                    <div class="md-form">
                                        <label for="firstname"><?= REGISTER_FIRSTNAME ?></label>
                                        <input id="firstname" type="text" name="firstname" placeholder="Prénom" value="<?= isset($firstname) ? $firstname : '' ?>" />
                                        <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                                    </div>
                                </div>
                                <!-- Date de naissance -->
                                <div class="md-form mt-0">
                                    <label for="birthDate"><?= REGISTER_BIRTHDATE ?></label>
                                    <input id="birthDate" type="date" name="birthDate" placeholder="Date de naissance" value="<?= isset($birthDate) ? $birthDate : '' ?>" />
                                    <p class="text-danger"><?= isset($formError['birthDate']) ? $formError['birthDate'] : ''; ?></p>
                                </div>
                                <!-- mail -->
                                <div class="md-form">
                                    <label for="email"><?= REGISTER_EMAIL ?></label>
                                    <input id="email" type="text" name="email" placeholder="adresse mail" value="<?= isset($mail) ? $email : '' ?>" />
                                    <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : ''; ?></p>
                                </div>
                                <!-- Phone number -->
                                <div class="md-form">
                                    <label for="phoneNumber"><?= REGISTER_PHONENUMBER ?></label>
                                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="numéro de téléphone" value="<?= isset($phoneNumber) ? $phoneNumber : '' ?>"/>
                                    <p class="text-danger"><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : ''; ?></p>
                                </div>
                                <!-- Address -->
                                <div class="md-form">
                                    <label for="address"><?= REGISTER_ADDRESS ?></label>
                                    <input type="text" name="address" id="address" placeholder="adresse" value="<?= isset($address) ? $address : '' ?>"/>
                                    <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                                </div>
                                <!-- ZIPCODE -->
                                <div class="md-form">
                                    <label for="zipCode"><?= REGISTER_ZIPCODE ?></label>
                                    <input type="text" name="zipCode" id="zipCode" placeholder="code postal"/>
                                    <p class="text-danger"><?= isset($formError['zipCode']) ? $formError['zipCode'] : ''; ?></p>
                                </div>
                                <!-- ville -->
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
                                <!-- identifiant -->
                                <div class="md-form">
                                    <label for="login"><?= REGISTER_LOGIN ?></label>
                                    <input type="text" name="login" id="login"/>
                                    <p class="text-danger"><?= isset($formError['login']) ? $formError['login'] : ''; ?></p>
                                </div>
                                <!-- Mot de passe-->
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
                                <!-- Sign up button -->
                                <div>
                                    <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    <?php } ?>



<?php
include 'footer.php';
?>