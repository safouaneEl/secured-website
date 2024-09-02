<?php
include_once "includes/header.html";
include_once "includes/navbar.php";

include "includes/information.php";
include "includes/database.php";
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fetch_location = "SELECT * FROM localisation LIMIT 1";
$result = mysqli_query($conn, $fetch_location);
$location_data = mysqli_fetch_assoc($result);
?>  

<!-- Hero Start -->
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-1 text-white animated zoomIn">Contact-Inscription</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white" id="send_message">Contact-Inscription</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactez-nous</h5>
            <h1 class="display-5 mb-0">N'hésitez Pas à Nous Contacter</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded p-5">
                    <form action="singup.php" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="email" class="form-control border-0 px-4" name="email" placeholder="Votre Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4" name="object" placeholder="Objet" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 px-4 py-3" name="message" rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Envoyer le Message</button>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>

            <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded p-5">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Notre Bureau</h5>
                            <span><?= $location_data['rue'] ?>, <?= $location_data['pays'] ?>, <?= $location_data['ville'] ?></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Envoyez-nous un Email</h5>
                            <span>elkhadirsafouane@gmail.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-1">Appelez-nous</h5>
                            <span>+212 624 366586</span>
                        </div>
                    </div>
                    <div> 
                        <iframe class="position-relative w-100"
                            src="<?= $location_data['localisation'] ?>"
                            frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- S'inscrire Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">S'inscrire</h5>
            <h1 class="display-5 mb-0">Soyez une membre de notre famille!</h1>
        </div>
        <div class="row g-5" style="display: flex; justify-content: center;">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded p-5">
                    <form action="singup.php" method="post">
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="name" class="form-control border-0 px-4" name="name" placeholder="Votre Nom" style="height: 55px;" required>
                            </div>
                            <div class="col-6">
                                <input type="email" class="form-control border-0 px-4" name="email" placeholder="Votre Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control border-0 px-4 py-3" name="password" rows="1" placeholder="Votre mot de passe" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="button" id="singup">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- S'inscrire End -->

<?php
include_once "includes/footer.html";
?>
