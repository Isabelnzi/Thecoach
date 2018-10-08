<?php
include 'header.php';
?>
<!--Création d'un caroussel d'image de sport ou de sportif-->
<div id="CarouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/fitness.jpg" height="950" alt="photo de basket d'une joggeuse" title="joggeuse" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/Bien-être.jpg"  height="950" alt="deux personnes faisant de la relaxation" title="relaxation" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/sport-2266184__340.jpg"  height="950" alt="joggeur entrain de courir" />
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div>
    <!--création d'un bouton qui sommes nous permettant d'expliquer le site et le le role de MasterCoach-->
    <a href="#quisommes-nous" class="btn btn btn-lg " tabindex="-1" role="button" id="quisommes-nous" onclick="hidden()">Qui sommes-nous ?</a>
    <!--insertion d'une bulle de texte-->
    <div id="Cadre">
        <div id="text">
            <p> The Coach est une plateforme sportive qui permet de mettre en relation de façon simple et rapide un coach sportifs et ces futurs éléves . </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum, lectus in sollicitudin luctus, ex tortor fringilla nisi, at mollis orci elit at augue. Phasellus varius, ligula tempor lobortis auctor, lacus dui laoreet nisi, nec bibendum ex turpis at ante. Aliquam quis sem tincidunt, sagittis nisl a, mattis neque. Fusce eget feugiat dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi auctor scelerisque massa vel consectetur. Curabitur egestas elit vel sem tincidunt sodales. Curabitur hendrerit placerat turpis at suscipit. Maecenas id nunc elit. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum, lectus in sollicitudin luctus, ex tortor fringilla nisi, at mollis orci elit at augue. Phasellus varius, ligula tempor lobortis auctor, lacus dui laoreet nisi, nec bibendum ex turpis at ante. Aliquam quis sem tincidunt, sagittis nisl a, mattis neque. Fusce eget feugiat dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi auctor scelerisque massa vel consectetur. Curabitur egestas elit vel sem tincidunt sodales. Curabitur hendrerit placerat turpis at suscipit. Maecenas id nunc elit. </p>
        </div>
    </div>
</div>
<!--creation de card qui vont rediriger l'utilisateur vers les activités ou programmes que propose la plateforme-->
<h1> Nos Programmes de coaching sportifs </h1>
<!-- 1st card por le programme sportif-->
<div class="card-deck" >  
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="assets/img/coach.jpg" alt="image  d'une coach" title="Coach" />
            <div class="card-body">
                <h5 class="card-title">Programme sportif</h5>
                <a href="http://thecoach/ProgrammeSportifs.php" class="btn btn-light">Programme</a>
            </div>
        </div>
    </div>
    <!-- 2nd card por le programme alimentairef-->
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="assets/img/healthy.jpg" alt="photo d'une assiette avec des aliments sains" title="assiette de produits sains"/>
            <div class="card-body">
                <h5 class="card-title">Programme alimentaire</h5>
                <a href="http://thecoach/ProgrammeAlimentaire.php" class="btn btn-light">Programme</a>
            </div>
        </div>
    </div>
    <!-- 3rd card por le programme decouverte-->
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="assets/img/IMG-20180703-WA0014.jpg" alt="Coach entrain de parler à ces éléves" title="Coaching" />
            <div class="card-body">
                <h5 class="card-title">Découverte</h5>
                <a href="http://thecoach/Decouverte.php" class="btn btn-light">Découvrir</a>
            </div>
        </div>
    </div>
    <!-- 4th card por le programme d édiée aux entreprises et CE-->
    <div class="col-lg-3"> 
        <div class="card">
            <img class="card-img-top" src="assets/img/entreprise.jpg" alt="sportifs soudant leurs mains" title="Groupe de sportif"/>
            <div class="card-body">
                <h5 class="card-title">Société/Entreprise</h5>
                <a href="http://thecoach/SocieteEntreprise.php" class="btn btn-light">Entreprise</a>
            </div>
        </div>
    </div>
</div> 
<h2>Pratiquez votre sport où vous voulez quand vous voulez ? </h2>

<div>
    <label for="clientLocation">Où souhaitez vous pratiquez votre sport</label>
    <input name="clientLocattion" placeholder="Où souhaitez-vous pratiquer ?" type="text" id="place" value="" />
    <label for="activity"></label>
    <select name='activity'>
        <option>Fitness</option>
        <option>Zumba</option>
        <option>Musculation</option>
        <option>Hip-Hop</option>
        <option>Relaxation</option>
        <option>Coach de Running</option>
        <option>Perte de poids</option>
        <option>Self-defense</option>
        <option>Boxe</option>
        <option>Yoga</option>
    </select>
    <button type="button" class="btn btn-outline-danger btn-rounded waves-effect fa fa-thumbs-up" aria-hidden="true"></button>
</div>

<?php
include 'Footer.php';
?>
<div>


