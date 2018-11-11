<?php
include 'header.php';
?>

<div class="view jarallax">
    <img class="jarallax-img" src="assets/img/sportsentreprise1.jpg" alt="" height="600px" width="2000">
    <div class="mask rgba-blue-slight">
        <div class="container flex-center text-center">
            <div class="row mt-5">
                <div class="col-md-12 wow fadeIn mb-3">
                    <h1 class="display-3 mb-2 wow fadeInDown indigo-text font-weight-bold" data-wow-delay="0.1s">Sport et entreprise</h1>   
                </div>
            </div>
        </div>
    </div>
</div>

 
    <h2 class="text-center">Prise de rendez-vous</h2>
<div class="row justify-content-center m-5">
    <form class="col-md-10" action="#" method="POST">
        <div class="form">
            <label class="col-md-6" for="lastname">Nom société : </label>
            <input class="col-md-5" type="text" name="lastname" value="" />
            <?php
            if (isset($formError['lastname']))
            {
                ?>
                <p class="text-danger"><?= $formError['lastname'] ?></p>
            <?php } ?>
        </div>
        <div class="form">
            <label class="col-md-6" for="firstname">Nom responsable : </label>
            <input class="col-md-5" type="text" name="firstname" value="" />
            <?php
            if (isset($formError['firstname']))
            {
                ?>
                <p class="text-danger"><?= $formError['firstname'] ?></p>
            <?php } ?>
        </div>
         <div class="form">
            <label class="col-md-6" for="phoneNumber">Numéro de téléphone : </label>
            <input class="col-md-5" type="text" name="phoneNumber" value="" />
            <?php
            if (isset($formError['firstname']))
            {
                ?>
                <p class="text-danger"><?= $formError['firstname'] ?></p>
            <?php } ?>
        </div>
        
        <div class="form">
            <label class="col-md-6" for="date">Date du rendez-vous : </label>
            <input class="col-md-5" type="date" id="date" name="date" value="" />
            <?php
            if (isset($formError['appointmentDate']))
            {
                ?>
                <p class="text-danger"><?= $formError['appointmentDate'] ?></p>
            <?php } ?>
        </div>
        <div class="form">
            <label class="col-md-6" for="hour">Heure du rendez-vous : </label>
            <input class="col-md-5" type="time" id="hour" name="hour" value="" />
            <?php
            if (isset($formError['appointmentHour']))
            {
                ?>
                <p class="text-danger"><?= $formError['appointmentHour'] ?></p>
            <?php } ?>
        </div>
</div>
        <div class="text-center">
            <input class="col-md-4" type="submit" name="submitAppointment" value="Soumettre" />
        </div>
    </form>
    <div class="col-md-6">
    <p>Votre voulez en savoir plus sur The Coach. Prenez donc rendez-vous pour nous exposer votre projet, vos besoins et vos envies. Nous sommes à votre disposition pour répondre à vos questions.
Vous ne vous occupez de rien : le matériel est inclus. The Coach saura vous trouver le bon coach. Pour plus d’informations nous contactez .
</p>
</div>

    <?php
    include 'footer.php';
    ?>
    <div>
        s
