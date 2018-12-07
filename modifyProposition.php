<?php
include 'header.php';
include 'controllers/propositionCtrl.php';
?>
<!--Propositon d'activité de la part d'un client ou un coach peut proposer ces services et les clients peuveut s'inscrire-->
<!--on a deux select pour choisir le sport et l'autre pour savoir si on veut pratiquer le sport en intérieur ou extérieur-->
<h1>Partagez vos Activités</h1>
<div class="partagez">
    <h2>Fini le sport seul sans fun amusez vous à plusieurs et partagez vous le coach.</h2>
</div>
<!--création du formulaire d'événement-->
<form action="proposition.php" method="POST">              
    <div class="container">
        <div class="row">
            <div class="col-sm-md-4">
                <!--les différents types de sports-->
                <label for="sports">Sports</label>
                <select name="sports" id="sports" class="form">
                    <option selected disabled><?= $showUserProposition->sportName ?></option>
<?php foreach ($sportList as $sportListName) { ?>
                        <option value="<?= $sportListName->id ?>"><?= $sportListName->sportName ?></option>   
                    <?php } ?>
                </select>
                <!-- Address -->
                <div class="md-form">
                    <label for="address"><?= REGISTER_ADDRESS ?></label>
                    <input type="text" name="address" id="address" placeholder="" value="<?= $showUserProposition->address ?>"/>
                    <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                </div>
                <!-- ZIPCODE -->
                <div class="md-form">
                    <label for="zipCode"><?= REGISTER_ZIPCODE ?></label>
                    <input type="text" name="zipCode" id="zipCode" placeholder="" value="<?= $showUserProposition->zipCode ?>"/>
                    <p class="text-danger"><?= isset($formError['zipCode']) ? $formError['zipCode'] : ''; ?></p>
                </div>
                <!-- ville -->
                <div class="md-form">
                    <label for="city"><?= REGISTER_CITY ?></label>
                    <select name = "city" id="city" >
                        <option selected disabled><?= $showUserProposition->cityName ?></option>
<?php foreach ($cityName as $cityValue) { ?>
                            <option value="<?= $cityValue->cityValue . id ?>"></option>   
                        <?php } ?>
                    </select>
                    <p class="text-danger"><?= isset($formError['city']) ? $formError['city'] : ''; ?></p>
                </div>
            </div>
        </div>

        <div class="md-form"> 
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <label for="date"></label>
            <input type="date" name="date" id="date" placeholder="date" value="<?= $showUserProposition->date ?>"/>
            <p class="text-danger"><?= isset($formError['date']) ? $formError['date'] : ''; ?></p>
        </div>
        <div class="md-form">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <label for="hour"></label>
            <input type="time" name="hour" id="hour" placeholder="heure" value="<?= $showUserProposition->hour ?>"/>
            <p class="text-danger"><?= isset($formError['hour']) ? $formError['hour'] : ''; ?></p>
        </div>
        <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <label for="propositionName"><?= REGISTER_PROPOSITION ?></label>
            <textarea type="text" id="propositionName" class="form-control md-textarea" name="propositionName" placeholder="" rows="3"><?= $showUserProposition->propositionName ?></textarea>
            <p class="text-danger"><?= isset($formError['propositionName']) ? $formError['propositionName'] : ''; ?></p>
        </div>
        <div class="text-center">
            <a href="" class="btn btn-primary" type="submit" name="modifyProposition"  id="modifyProposition" value="modifyProposition">MODIFIER</a> 
        </div>
    </div>
</form>
<?php include 'footer.php'; ?>