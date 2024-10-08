<?php

        include_once "includes/information.php";
        include_once "includes/header.php";
        include_once "includes/navbar.php";
        
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">The Team</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">The Team</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="ourteam">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nos Agents</h5>
            <h1 class="display-5 mb-0">Rencontrez Notre Équipe Professionnelle</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="<?php echo $agent3photo; ?>" alt="<?php echo $agent3nom; ?>">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white"><?php echo $agent3nom; ?></h3>
                    <p class="text-white m-0"><?php echo $agent3service; ?></p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="<?php echo $agent2photo; ?>" alt="<?php echo $agent2nom; ?>">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white"><?php echo $agent2nom; ?></h3>
                    <p class="text-white m-0"><?php echo $agent2service; ?>/p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="<?php echo $agent3photo; ?>" alt="<?php echo $agent3nom; ?>">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white"><?php echo $agent3nom; ?></h3>
                    <p class="text-white m-0"><?php echo $agent3service; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
    

<?php
        include_once "includes/footer.php";

?>