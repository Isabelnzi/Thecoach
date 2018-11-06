<?php
include_once 'header.php';
include_once 'Class/database.php';
include_once 'Controllers/registerCtrl.php';
if (isset($_POST['register']) && (count($formError) === 0)) {
    ?> 
    <div class="alert" id="Userregister">
        <h1>Votre inscription a bien été prise en compte !</h1>
        <p><?= $_POST['lastname'] ?></p>
        <p><?= $_POST['firstname'] ?></p>
        <p><?= $_POST['birthdate'] ?></p>
        <p><?= $_POST['email'] ?></p>
        <p><?= $_POST['phoneNumber'] ?></p>
        <p><?= $_POST['address'] ?></p>
        <p><?= $_POST['city'] ?></p>
        <p><?= $_POST['zipCode'] ?></p>       
    </div>
<?php } else { ?>
    <form class="text-center border  p-3"" action="register.php" method="POST">
        <div class="container-fluid" id="FormNewUsert">
            <div class="form-group has-error">
             <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>S'inscrire</strong>
    </h5>
                  <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                    <p>
                        <select name="civility">
                            <option selected disabled="Veuillez choisir une civilité">Veuillez choisir une civilité</option>
                            <option>Mr</option>
                            <option>Mme</option>
                        </select>
                    </p>
                    </div>
                </div>
            </div>
                <div class="col">
                    <!-- Last name  firstname-->
                    <div class="md-form">
                       
                    <label for="lastname"><?= REGISTER_LASTNAME ?></label>
                    <input id="lastname" type="text" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                
                     <div class="col"> 
                <label for="firstname"><?= REGISTER_FIRSTNAME ?></label>
                <input id="firstname" type="text" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
                <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                     
                    </div>
                </div>
            </div>

            <!-- Date de naissance -->
            <div class="md-form mt-0">
                <label for="birthdate"><?= REGISTER_BIRTHDATE ?></label>
                <input id="birthdate" type="date" name="birthdate" value="<?= isset($birthdate) ? $birthdate : '' ?>" />
                <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : ''; ?></p>
            </div>

            <!-- mail -->
            <div class="md-form">
               
                <label for="mail"><?= REGISTER_EMAIL ?></label>
                <input id="email" type="text" name="email" value="<?= isset($mail) ? $email : '' ?>" />
                <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : ''; ?></p
                
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <label for="phoneNumber"><?= REGISTER_PHONENUMBER ?></label>
                <input type="text" name="phoneNumber" id="phoneNumber" value="<?= isset($phoneNumber) ? $phoneNumber : '' ?>"/>
                <p class="text-danger"><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : ''; ?></p>
            </div>

            <!-- Address -->
            <div class="md-form">
                <label for="address"><?= REGISTER_ADDRESS ?></label>
                <input type="text" name="address" id="address" value="<?= isset($address) ? $address : '' ?>"/>
                <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
            </div>

     
              <!-- ZIPCODE -->
            <div class="md-form">
                <label for="zipCode"><?= REGISTER_ZIPCODE ?></label>
                <input type="text" name="zipCode" id="zipCode" value="<?= isset($zipCode) ? $zipCode : '' ?>"/>
                <p class="text-danger"><?= isset($formError['zipCode']) ? $formError['zipCode'] : ''; ?></p>
            </div>
              
              
                <!-- ville -->
            <div class="md-form">
                <label for="city"><?= REGISTER_CITY ?></label>
                <input type="text" name="city" id="city"  KeyUp="afficheVille(this.size, this.value)" value="<?= isset($city) ? $city : '' ?>"/>
               <p class="text-danger"><?= isset($formError['city']) ? $formError['city'] : ''; ?></p>
              
            </div>
                
                  <!-- identifiantr -->
            <div class="md-form">
                <label for="login"><?= REGISTER_LOGIN ?></label>
                <input type="text" name="login" id="postalCode"/>
                <p class="text-danger"><?= isset($formError['login']) ? $formError['login'] : ''; ?></p>
            </div>
                  
                    <!-- Mot de passe-->
            <div class="md-form">
                <label for="password"><?= REGISTER_PASSWORD ?></label>
                <input type="password" name="password" id="password"/>
                <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
            </div>
                    
                      <!-- Mot de passe verification-->
            <div class="md-form"
                <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
                <input type="password" name="passwordVerify" id="passwordVerify"/>
                <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p> 
            </div>
            <!-- Sign up button -->
           
                <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="register"/>

           

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a> and
                <a href="" target="_blank">terms of service</a>. </p>

        </form>
        <!-- Form -->
<?php } ?>