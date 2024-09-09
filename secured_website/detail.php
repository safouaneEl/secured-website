<?php

        # connection a la base de donnes : saisir vos propre donnees
        include_once "includes/information.php";
        
        include_once "includes/header.php";
        include_once "includes/navbar.php";

        $conn = mysqli_connect($host, $user, $password, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST["submit"])) {
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $commentaire = $_POST["commentaire"];

            // Insert the comment into the database
            $insert = "INSERT INTO comments (nom, email, commentaire) VALUES ('$nom', '$email', '$commentaire')";
            $query = mysqli_query($conn, $insert);

            if ($query) {
                echo "<script>alert('Votre commentaire a été ajouté avec succès!');</script>";
            } else {
                echo "<script>alert('Échec de l\'ajout du commentaire. Veuillez réessayer.');</script>";
            }
        }

        
        $fetch_comments = "SELECT * FROM comments ORDER BY date_creation DESC";
        $result = mysqli_query($conn, $fetch_comments);

?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Détails du Blog</h1>
                <a href="" class="h4 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Détails du Blog</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/lock.jpeg" alt="Blog Image">
                    <h1 class="mb-4">Comment protéger vos locaux avec des systèmes de sécurité avancés</h1>
                    <p>Protéger votre entreprise ou votre domicile est essentiel pour garantir la sécurité de vos biens et de vos proches. Chez SECURED, nous offrons des solutions de sécurité avancées, allant de la surveillance 24/7 aux systèmes d'alarme sophistiqués.</p>
                    <p>Nous combinons technologie de pointe et expertise pour fournir des services sur mesure adaptés à vos besoins spécifiques. Découvrez comment nos services peuvent transformer la sécurité de vos installations.</p>
                    <p>Contactez-nous dès aujourd'hui pour une consultation gratuite et apprenez-en plus sur nos solutions de sécurité personnalisées.</p>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h2 class="mb-4">3 Commentaires</h2>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Alice Durand</a> <small><i>01 Jan 2015</i></small></h6>
                            <p>Les services de SECURED sont excellents. Ils ont installé un système de surveillance pour notre entreprise, et nous en sommes très satisfaits.</p>
                            <button class="btn btn-sm btn-light">Répondre</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Smail Barakat</a> <small><i>09 Mars 2020</i></small></h6>
                            <p>Je recommande vivement SECURED pour tous vos besoins en sécurité. Leur équipe est très professionnelle et compétente.</p>
                            <button class="btn btn-sm btn-light">Répondre</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/amina.jpeg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Amina Slama</a> <small><i>11 Feb 2022</i></small></h6>
                            <p>Très bon service ! Nous avons installé un système d'alarme avec SECURED, et c'est très rassurant.</p>
                            <button class="btn btn-sm btn-light">Répondre</button>
                        </div>
                    </div>
                    <?php while ($row = mysqli_fetch_assoc($result)) { 
                        $nom = $row['nom'];
                        $email = $row['email'];
                        $commentaire = $row['commentaire'];
                        $date_creation = date('d M Y', strtotime($row['date_creation']));
                    ?>
                    <div class="d-flex mb-4">
                        <img src="img/user1.jpeg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="#"><?= $nom; ?></a> <small><i><?= $date_creation; ?></i></small></h6>
                            <p><?= $commentaire; ?></p>
                            <button class="btn btn-sm btn-light">Répondre</button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                

                <!-- Comment Form Start -->
                <div class="bg-light rounded p-5">
                    <h2 class="mb-4">Laissez un commentaire</h2>
                    <form method="post" action="detail.php">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Votre Nom" style="height: 55px;" name="nom" required >
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Votre Email" style="height: 55px;" name="email" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Commentaire" name="commentaire" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Laissez Votre Commentaire</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

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
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Surveillance</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Protection</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Alarme</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Sécurité Mobile</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Conseils en Sécurité</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Posts récents</h2>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/locked.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="Post Image">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Protéger vos biens avec SECURED
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/find.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="Post Image">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Pourquoi choisir SECURED ?
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/pink eye.jpeg" style="width: 100px; height: 100px; object-fit: cover;" alt="Post Image">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Conseils pour la sécurité de votre domicile
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/data protection.jpeg" alt="Blog Image" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Nuage de Tags</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Sécurité</a>
                        <a href="" class="btn btn-light m-1">Surveillance</a>
                        <a href="" class="btn btn-light m-1">Alarme</a>
                        <a href="" class="btn btn-light m-1">Protection</a>
                        <a href="" class="btn btn-light m-1">Sécurité Mobile</a>
                        <a href="" class="btn btn-light m-1">Conseils</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Texte Simple</h2>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Chez SECURED, nous nous engageons à fournir des solutions de sécurité personnalisées qui répondent à vos besoins. Que vous ayez besoin de surveillance, de systèmes d'alarme ou de conseils, nous sommes là pour vous aider.</p>
                        <a href="" class="btn btn-primary py-2 px-4">En savoir plus</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

<?php
        include_once "includes/footer.php";


?>