<?php
//on y retrouve la navbar
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
            <img class="d-block w-100" src="assets/img/sport-2266184__340.jpg"  height="950" alt="joggeur entrain de courir" title="running"/>
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
    <!--création d'un bouton "qui-sommes nous" permettant d'expliquer le site et le le role de MasterCoach-->
    <a href="#quisommes-nous" class="btn btn btn-lg " tabindex="-1" role="button" id="quisommes-nous" onclick="hidden()">Qui sommes-nous ?</a>
    <!--insertion d'une bulle de texte-->
    <div id="Cadre">
        <div id="text">
            <p> The Coach est une plateforme sportive qui permet de mettre en relation de façon simple et rapide un coach sportif et ses futurs élèves .
                L'originalité de The Coach vient du rôle actif qui est attribué à élève celui-ci peut quand il le souhaite proposer une activité à l'heure et à la date qu'il souhaite. Proposition ouverte à tous qui est effectif après validation d'un coach. Vous faites un choix selon vos envies et vos disponibilités, le coach s'adapte à votre demande le sport pourra être pratiqué à l'intérieur comme à l'extérieur. </p>     
            <p>Inscrivez vous et découvrez tout les nombreux avantages mis à votre disposition.Venez découvrir votre plateforme participative et devenez l'acteur de votre réussite sportive</p>
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
                <a href="http://thecoach/ProgrammeSportifs.php" class="btn btn-indigo">Programme</a>
            </div>
        </div>
    </div>
    <!-- 2nd card por le programme alimentaire-->
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="assets/img/healthy.jpg" alt="photo d'une assiette avec des aliments sains" title="assiette de produits sains"/>
            <div class="card-body">
                <h5 class="card-title">Programme alimentaire</h5>
                <a href="http://thecoach/ProgrammeAlimentaire.php" class="btn btn-indigo">Programme</a>
            </div>
        </div>
    </div>
    <!-- 3ème card por le programme decouverte-->
    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top" src="assets/img/IMG-20180703-WA0014.jpg" alt="Coach entrain de parler à ces éléves" title="Coaching" />
            <div class="card-body">
                <h5 class="card-title">Découverte</h5>
                <a href="http://thecoach/Decouverte.php" class="btn btn-indigo">Découvrir</a>
            </div>
        </div>
    </div>
    <!-- 4ème card por le programme d édiée aux entreprises et CE-->
    <div class="col-lg-3"> 
        <div class="card">
            <img class="card-img-top" src="assets/img/entreprise.jpg" alt="sportifs soudant leurs mains" title="Groupe de sportif"/>
            <div class="card-body">
                <h5 class="card-title">Société/Entreprise</h5>
                <a href="http://thecoach/SocieteEntreprise.php" class="btn btn-indigo">Entreprise</a>
            </div>
        </div>
    </div>
</div> 

<!--Propositon d'activité de la part d'un client ou un coach peut proposer ces services et les clients peuveut s'inscrire-->
<!--on a deux select pour choisir le sport et l'autre pour savoir si on veut pratiquer le sport en intérieur ou extérieur-->
<h1>Partagez vos Activités</h1>
<div class="partagez">
<h2>Fini le sport seul sans fun amusez vous à plusieurs et partagez vous le coach.</h2>
<div class="select">
    <div class="row">                       
        <div class="col-md-2">
  <label for="cours" id="cours">Cours/Sports</label>
  <select name="cours" id="cours" class="form">
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
        
          <div class="col-md-2">
  <label for="cours" id="lieux">Lieux</label>
  <select name="cours" id="lieux" class="form">
            <option selected disabled>Veuillez selectionnez un lieux</option>
            <option value="1">Intérieur</option>
            <option value="2">Extérieur</option>
        </select>
    </div>
        <div class="col-md-2">
        <a href="#" role="" class="btn btn-indigo">Partagez</a>
    </div>
</div>
<?php
//include 'proposition.php';
?>
</div>
<?php
//on y retrouve le footer
include 'footer.php';
?>
<div>


