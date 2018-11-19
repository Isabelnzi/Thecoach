<?php
include 'header.php';
include 'controllers/contactCtrl.php';
?>
<form class="contact-form" action="contact.php" method="POST">
    <!-- Section: Contact v.1 -->
    <section class="my-">

        <h2 class="h1-responsive font-weight-bold text-center mt-4 my-5">Contactez Nous</h2>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-4 ml-4">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header  accent-1">
                            <h3 class="mt-2"><i class="fa fa-envelope"></i> Contact:</h3>
                        </div>

                        <!-- Body -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>      
                            <input type="text" id="form-name" class="form-control" name="name" placeholder="Nom/Prénom"/>
                            <label for="form-name">Nom</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" name="mail" placeholder="mail" id="form-email" class="form-control">
                            <label for="form-email">Adresse email</label>
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
                            <button type="submit" name="submit" id="submit" class="btn btn-indigo">Envoyer</button>
                        </div>
                    </div>
                </div>
                <!-- Form with header -->
                </form>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2">

                <!-- Google map-->
                <div id="map-container" class="rounded z-depth-1-half map-container" style="height: 400px">
                    <img src="assets/img/box-1514845_960_720.jpg" alt="" title=""/>
                </div>
                <br>
            </div>
        </div>
    </section>
    <?php
    include 'footer.php';
    ?>