<?php

        include_once "includes/information.php";
        include_once "includes/header.php";
        include_once "includes/navbar.php";
        include_once "includes/popupform.php";
        
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pink eye.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Meilleurs Services de Sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Votre sécurité notre priorité</h1>
                            <button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" onclick="openForm()">Obtenir un devis</button>
                            <a href="contact.php#singup" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img class="w-100" src="img/Fingerprint.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Meilleurs Services de Sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Protéger ce qui compte le plus</h1>
                            <button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" onclick="openForm()">Obtenir un devis</button>
                            <a href="contact.php#singup" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/locked.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Meilleurs Services de Sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">La confiance en sécurité, jour et nuit</h1>
                            <button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" onclick="openForm()">Obtenir un devis</button>
                            <a href="contact.php#singup" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    
    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;" id="services">Services</h5>
                <h1 class="display-5 mb-0" >Nos Excellents Services de Sécurité</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-eye d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h3 class="mb-3">Surveillance et Monitoring 24/7</h3>
                            <p>Assurez la sécurité continue de vos installations avec notre surveillance 24/7, combinant caméras et systèmes de détection pour une réactivité immédiate face aux menaces.</p>
                            <a href="service.php">savoir plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-door-closed display-1 text-secondary"></i>
                            <h3 class="mb-3">Contrôle d'Accès Sécurisé</h3>
                            <p>Gérer et restreindre l'accès à vos locaux avec des technologies avancées comme les cartes, les codes et la biométrie, tout en gardant une trace de chaque accès.</p>
                            <a href="service.php">savoir plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-shield-alt display-1 text-secondary "></i>
                            <h3 class="mb-3">Protection Personnelle et Escorte</h3>
                            <p>Sécurité discrète et personnalisée pour protéger les individus lors de déplacements ou événements, assurée par des agents hautement qualifiés.</p>
                            <a href="service.php">savoir plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
                
    <!-- Services End -->


   

<?php

    include_once "includes/footer.php";


?>