<?php

        include_once "includes/information.php";
        include_once "includes/header.html";
        include_once "includes/navbar.php";
        
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
                            <a href="price.php#offre" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenir un devis</a>
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
                            <a href="price.php#offre" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenir un devis</a>
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
                            <a href="price.php#offre" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Obtenir un devis</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/detection 2.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Accueil</h5>
                        <h1 class="display-5 mb-0" id="accueil">Nous Offrons des Systèmes de Sécurité de Qualité</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Chez SECURED, nous nous engageons à fournir des systèmes de surveillance avancés pour garantir la sécurité de vos installations 24/7</h4>
                    <p class="mb-4"> Nous combinons technologie de pointe et expertise pour offrir des solutions de sécurité personnalisées qui répondent à vos besoins spécifiques. Que ce soit pour la surveillance par caméras, le contrôle d'accès, ou la protection personnelle, notre équipe dédiée est là pour vous assurer une tranquillité d'esprit totale.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0" >10 ans d'Expérience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <i class="fa fa-award fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Primé</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

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
                            <p>Nous offrons un service de surveillance et monitoring 24/7 pour garantir la sécurité de vos installations en permanence. Grâce à nos technologies avancées de caméras de sécurité et de systèmes de détection, nous surveillons activement vos locaux et réagissons immédiatement en cas de menace. Notre équipe de professionnels est formée pour gérer tous les types de situations d'urgence avec rapidité et efficacité.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-door-closed display-1 text-secondary"></i>
                            <h3 class="mb-3">Contrôle d'Accès Sécurisé</h3>
                            <p>Notre service de contrôle d'accès sécurisé vous permet de gérer et de restreindre l'accès à vos installations. Nous installons et maintenons des systèmes d'accès par carte, code, biométrie, et autres technologies avancées. Vous avez un contrôle total sur qui peut entrer et sortir de vos locaux, tout en gardant une trace de chaque accès pour des raisons de sécurité et de conformité.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-shield-alt display-1 text-secondary "></i>
                            <h3 class="mb-3">Protection Personnelle et Escorte</h3>
                            <p>Pour les personnes qui nécessitent une sécurité personnelle accrue, nous offrons des services de protection personnelle et escorte. Nos agents de sécurité hautement qualifiés sont discrets et professionnels, assurant votre sécurité lors de vos déplacements, événements, ou autres situations sensibles. Nous adaptons nos services à vos besoins spécifiques pour garantir votre tranquillité d'esprit.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-user d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h3 class="mb-3">Patrouilles de Sécurité Mobile</h3>
                            <p>Pour une sécurité renforcée, nous offrons des patrouilles de sécurité mobile, assurées par nos agents qualifiés. Ces patrouilles régulières permettent de dissuader les comportements suspects et d'intervenir rapidement en cas de besoin, garantissant ainsi la protection continue de vos propriétés.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-camera d-block display-1 fw-normal text-secondary"></i>
                            <h3 class="mb-3">Consulation en Sécurité</h3>
                            <p>Nos experts en sécurité vous offrent des services de consultation pour évaluer et renforcer la sécurité de vos installations. Nous analysons les vulnérabilités potentielles et proposons des solutions sur mesure pour améliorer la protection de votre entreprise ou de votre domicile, vous aidant ainsi à prévenir les risques avant qu'ils ne deviennent des problèmes.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-bell d-block display-1 fw-normal text-secondary " id="services"></i>
                            <h3 class="mb-3">Installation et Maintenance de Systèmes d'Alarme</h3>
                            <p>Nous installons des systèmes d'alarme sophistiqués pour protéger vos biens contre les intrusions. Nos services incluent également la maintenance régulière de ces systèmes pour garantir leur bon fonctionnement à tout moment. Que ce soit pour des propriétés résidentielles ou commerciales, nous adaptons nos solutions à vos besoins spécifiques.</p>
                            <a href="contact.php">Savoir Plus<i class="bi bi-arrow-right ms-2" ></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Plans de Tarification Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Plans de Tarification</h5>
            <h1 class="display-5 mb-0">Nos Offres de Tarification pour les Services de Sécurité</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary rounded">
                    <div class="bg-primary text-center pt-5 pb-4">
                        <h3 class="text-white">Plan Basique</h3>
                        <h1 class="display-4 text-white">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">€</small>49<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mois</small>
                        </h1>
                    </div>
                    <div class="text-center py-5">
                        <p class="border-bottom border-light mb-2 pb-2">Surveillance 24/7</p>
                        <p class="border-bottom border-light mb-2 pb-2">Contrôle d'Accès Standard</p>
                        <p class="border-bottom border-light mb-2 pb-2">Patrouilles Périodiques</p>
                        <p class="border-bottom border-light mb-2 pb-2">Rapports Hebdomadaires</p>
                        <p class="mb-2 pb-2">Assistance Téléphonique</p>
                    </div>
                    <a href="contact.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Commander Maintenant</a>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="position-relative border border-secondary rounded">
                    <div class="bg-secondary text-center pt-5 pb-4">
                        <h3 class="text-white">Plan Standard</h3>
                        <h1 class="display-4 text-white">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">€</small>99<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mois</small>
                        </h1>
                    </div>
                    <div class="text-center py-5">
                        <p class="border-bottom border-light mb-2 pb-2">Surveillance 24/7 Avancée</p>
                        <p class="border-bottom border-light mb-2 pb-2">Contrôle d'Accès Sécurisé</p>
                        <p class="border-bottom border-light mb-2 pb-2">Patrouilles Quotidiennes</p>
                        <p class="border-bottom border-light mb-2 pb-2">Rapports Quotidiens</p>
                        <p class="mb-2 pb-2">Support 24/7</p>
                    </div>
                    <a href="contact.php" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">Commander Maintenant</a>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="position-relative border border-primary rounded">
                    <div class="bg-primary text-center pt-5 pb-4">
                        <h3 class="text-white">Plan Avancé</h3>
                        <h1 class="display-4 text-white">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">€</small>149<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mois</small>
                        </h1>
                    </div>
                    <div class="text-center py-5">
                        <p class="border-bottom border-light mb-2 pb-2">Surveillance 24/7 Premium</p>
                        <p class="border-bottom border-light mb-2 pb-2">Contrôle d'Accès Personnalisé</p>
                        <p class="border-bottom border-light mb-2 pb-2">Patrouilles Ininterrompues</p>
                        <p class="border-bottom border-light mb-2 pb-2">Rapports en Temps Réel</p>
                        <p class="mb-2 pb-2">Assistance Dédiée 24/7</p>
                    </div>
                    <a href="contact.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Commander Maintenant</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Plans de Tarification End -->



    <!-- Offre Spéciale Start -->
<div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                    <h5 class="text-white text-uppercase" style="letter-spacing: 5px;" id="offre">Offre Spéciale</h5>
                    <h1 class="display-5 text-white" id="offre">Économisez 50% sur Votre Première Commande</h1>
                </div>
                <p class="text-white mb-4">Profitez de notre offre spéciale pour découvrir nos services de sécurité à un tarif réduit. Que ce soit pour la surveillance, le contrôle d'accès, ou la protection personnelle, bénéficiez de 50% de réduction sur votre première commande. Ne manquez pas cette opportunité pour assurer votre sécurité avec les meilleurs services du marché.</p>
                <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 me-3">Commander Maintenant</a>
                <a href="service.php" class="btn btn-secondary py-md-3 px-md-5">En Savoir Plus</a>
            </div>
        </div>
    </div>
</div>
<!-- Offre Spéciale End -->


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
                    <img class="img-fluid rounded-top w-100" src="img/team-1.jpg" alt="Aymane Sahat">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white">Aymane Sahat</h3>
                    <p class="text-white m-0">Chef de la Sécurité</p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/team-2.jpg" alt="Adil Twel">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white">Adil Twel</h3>
                    <p class="text-white m-0">Spécialiste de la Surveillance</p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/team-3.jpg" alt="Barae Slimani">
                    <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="bg-primary text-center rounded-bottom p-4">
                    <h3 class="text-white">Barae Slimani</h3>
                    <p class="text-white m-0">Expert en Contrôle d'Accès</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->



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


    <!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Articles</h5>
            <h1 class="display-5 mb-0">Derniers Articles de Notre Blog</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100 rounded-top" src="img/camera.jpeg" alt="">
                        <div class="blog-date">
                            <h5 class="text-white fw-bold mb-0">01</h5>
                            <h6 class="text-light mb-0">Janvier</h6>
                        </div>
                    </div>
                    <div class="bg-primary rounded-bottom p-5">
                        <div class="d-flex mb-3">
                            <span class="text-light text-uppercase">Admin</span>
                            <span class="text-light px-2">|</span>
                            <span class="text-light text-uppercase">Sécurité</span>
                        </div>
                        <a class="h3 m-0 text-white" href="">Les Dernières Tendances en Sécurité et Surveillance</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100 rounded-top" src="img/infos.jpeg" alt="">
                        <div class="blog-date">
                            <h5 class="text-white fw-bold mb-0">01</h5>
                            <h6 class="text-light mb-0">Janvier</h6>
                        </div>
                    </div>
                    <div class="bg-primary rounded-bottom p-5">
                        <div class="d-flex mb-3">
                            <span class="text-light text-uppercase">Admin</span>
                            <span class="text-light px-2">|</span>
                            <span class="text-light text-uppercase">Sécurité</span>
                        </div>
                        <a class="h3 m-0 text-white" href="">Comment Protéger Votre Propriété en 2024</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End --> 
<?php

    include_once "includes/footer.html";


?>