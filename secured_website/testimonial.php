<?php

        include_once "includes/information.php";
        include_once "includes/header.php";
        include_once "includes/navbar.php";
        
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Testimonial</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Témoignages</h5>
            <h1 class="display-5 mb-0">Ce Que Nos Clients Disent De Nos Services:</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Grâce à SECURED, je me sens en sécurité 24 heures sur 24. Leur service de surveillance est impeccable, et je sais que ma maison est protégée en permanence. Je recommande vivement leurs services.                        </p>
                    <h4 class="text-truncate">Smail Barakat</h4>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/amina.jpeg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">SECURED a su répondre à mes besoins spécifiques en matière de protection personnelle. Les agents sont discrets et très professionnels. Je me sens en sécurité lors de mes déplacements grâce à eux.
                    </p>
                    <h4 class="text-truncate">Amina Slama</h4>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Le système de contrôle d'accès installé par SECURED dans notre entreprise est à la fois sophistiqué et simple d'utilisation. Nous avons enfin un contrôle total sur qui peut entrer dans nos locaux, ce qui a considérablement renforcé notre sécurité.
                    </p>
                    <h4 class="text-truncate">Hassan El Omari</h4>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/zaki.jpeg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">L'équipe de SECURED a effectué une évaluation complète de la sécurité de notre site. Grâce à leurs conseils et leur expertise, nous avons pu améliorer significativement la protection de nos installations. Leur service de consultation est exceptionnel.</p>
                    <h4 class="text-truncate">Yahya Zaki</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
    

<?php
    include_once "includes/footer.php";
?>