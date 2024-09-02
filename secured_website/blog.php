<?php

        include_once "includes/information.php";
        include_once "includes/header.html";
        include_once "includes/navbar.php";
?>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Nos Articles</h1>
                <a href="" class="h4 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Articles</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="img/eyeblue.jpeg" >
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
                                <a class="h3 m-0 text-white" href="" id="blog">5 Conseils Pour Renforcer La Sécurité De Votre Entreprise</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="img/lock.jpeg" alt="">
                                <div class="blog-date">
                                    <h5 class="text-white fw-bold mb-0">15</h5>
                                    <h6 class="text-light mb-0">Février</h6>
                                </div>
                            </div>
                            <div class="bg-primary rounded-bottom p-5">
                                <div class="d-flex mb-3">
                                    <span class="text-light text-uppercase">Admin</span>
                                    <span class="text-light px-2">|</span>
                                    <span class="text-light text-uppercase">Protection</span>
                                </div>
                                <a class="h3 m-0 text-white" href="">Pourquoi La Sécurité Est Essentielle Pour Toute Entreprise Moderne</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="img/eye.jpeg" alt="">
                                <div class="blog-date">
                                    <h5 class="text-white fw-bold mb-0">22</h5>
                                    <h6 class="text-light mb-0">Mars</h6>
                                </div>
                            </div>
                            <div class="bg-primary rounded-bottom p-5">
                                <div class="d-flex mb-3">
                                    <span class="text-light text-uppercase">Admin</span>
                                    <span class="text-light px-2">|</span>
                                    <span class="text-light text-uppercase">Sécurité</span>
                                </div>
                                <a class="h3 m-0 text-white" href="">Comment Choisir Le Meilleur Système De Sécurité Pour Votre Domicile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Précédent">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Suivant">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Mot-clé">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Catégories</h2>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Sécurité Domestique</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Sécurité d'Entreprise</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Contrôle d'Accès</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Surveillance 24/7</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Consultation en Sécurité</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Articles Récents</h2>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/hand scan.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Conseils Pour Sécuriser Votre Maison</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/detection 2.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">L'Importance de la Surveillance 24/7</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3" id="recent">
                        <img class="img-fluid" src="img/detection 1.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Choisir Le Bon Système d'Alarme</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/Fingerprint.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Comment Améliorer La Sécurité d'Entreprise</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/locked.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Meilleures Pratiques en Sécurité</a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/data protection.jpeg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Nuage de Tags</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Sécurité</a>
                        <a href="" class="btn btn-light m-1">Surveillance</a>
                        <a href="" class="btn btn-light m-1">Protection</a>
                        <a href="" class="btn btn-light m-1">Contrôle d'Accès</a>
                        <a href="" class="btn btn-light m-1">Consultation</a>
                        <a href="" class="btn btn-light m-1">Alarme</a>
                        <a href="" class="btn btn-light m-1">Sécurité Domestique</a>
                        <a href="" class="btn btn-light m-1">Sécurité d'Entreprise</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Texte Simple</h2>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Chez SECURED, nous croyons fermement que la sécurité est une priorité pour tous. Découvrez nos articles pour en apprendre davantage sur les meilleures pratiques et technologies en matière de sécurité.</p>
                        <a href="" class="btn btn-primary py-2 px-4">Lire Plus</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


<?php
        include_once "includes/footer.html";
 

?>