<?php
include 'controllers/propositionCtrl.php'
?>
<form action="index.php" method="post">              
    <div class="container">
        <div class="row">
            <div class="col-sm-md-4">
                <label for="cours" id="Sports">Sports</label>
                <select name="cours" id="Sports" class="form">
                    <option selected disabled>Veuillez selectionnez un sport</option>
                    <option value="1">Fitness</option>
                    <option value="2">Musculation</option>
                    <option value="3">Boxe</option>
                    <option value="4">Relaxation</option>
                    <option value="5">Pertes de poids</option>
                    <option value="6">Zumba</option>
                    <option value="7">Cardio</option>
                    <option value="8">Course à pieds</option>
                </select>
            </div>
            <div class="row">
                <div class="col-sm-md-4">
                    <label for="lieux" id="location">lieux</label>
                    <select name="lieux" id="lieux" class="form">
                        <option selected disabled>Veuillez selectionnez un lieux</option>
                        <option value="1">Intérieur</option>
                        <option value="2">Extérieur</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="md-form">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <input type="date" name="date" maxlength="50" size="50" placeholder="date" value=""/>
        </div>
        <div class="md-form">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <input type="text" name="hour" maxlength="50" size="50" placeholder="heure" value=""/>
        </div>
        <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text" name="subject" placeholder="sujet" id="form-Subject" class="form-control"/>
            <label for="form-Subject">Sujet</label>
        </div>
        <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea type="text" id="form-text" class="form-control md-textarea" name="message" placeholder="Message" rows="3"></textarea>
            <label for="form-text">Message</label>
        </div>
        <div class="text-center">
            <input type="submit" name="go" value="Rejoins moi">           
        </div>
    </div>
</div>
</form>



