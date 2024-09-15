<?php 
    include "includes/database.php";
    $conn = mysqli_connect($host, $user, $password, $db);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $fetch_location = "SELECT * FROM localisation LIMIT 1";
    $result = mysqli_query($conn, $fetch_location);
    $location_data = mysqli_fetch_assoc($result);
?>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.3s">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 order-lg-1 order-1">
                <h3 class="text-white mb-4">Liens rapides</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="index.php#accueil"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                    <a class="text-light mb-2" href="index.php#services"><i class="bi bi-arrow-right text-primary me-2"></i>Contrôle d'Accès Sécurisé</a>
                    <a class="text-light" href="index.php#offre"><i class="bi bi-arrow-right text-primary me-2"></i>Offre Spéciale</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-lg-2 order-2 text-center">
                <h3 class="text-white mb-4">Contactez-nous</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i><span><?= $location_data['rue'] ?> <?= $location_data['pays'] ?> <?= $location_data['ville'] ?></span></p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i><?php echo $email; ?></p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i><?php echo $tel; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 order-lg-3 order-3 text-lg-end text-center">
                <h3 class="text-white mb-4" style="text-align: center;">Suivez-nous</h3>
                <div class="d-flex justify-content-lg-end justify-content-center">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-5" href="<?php echo $twitter; ?>" <?php if(empty($twitter)) {echo "style='display: none;'";} ?>><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-5" href="<?php echo $facebook; ?>" <?php if(empty($facebook)) {echo "style='display: none;'";} ?>><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-5" href="<?php echo $linkedin; ?>" <?php if(empty($linkedin)) {echo "style='display: none;'";} ?>><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="<?php echo $instagram; ?>" <?php if(empty($instagram)) {echo "style='display: none;'";} ?>><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid bg-primary text-light py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="index.php"><?php echo $nom_companie; ?></a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-white border-bottom" href="www.codesolus.com"><?php echo $developers; ?></a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top2" id="back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript">
    
    let mybutton = document.getElementById("back-to-top");

    
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


</body>
</html>
