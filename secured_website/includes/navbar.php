<?php
    // Get the current file name
    $page = basename($_SERVER['PHP_SELF'], ".php");
?>
<body>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-default bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 fixed-top" >
    <a href="index.php" class="navbar-brand ms-lg-5">
    <h1 class="display-5 m-0 text-primary"><img src="Files/logo.png" width="200" height="75" ></span></h1>
        <!--<h1 class="display-5 m-0 text-primary">Secu<span class="text-secondary">Red</span></h1>-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php if($page == 'index') {echo 'active';} ?>">Accueil</a>
            <a href="about.php" class="nav-item nav-link <?php if($page == 'about') {echo 'active';} ?>">Apropos</a>
            <a href="service.php" class="nav-item nav-link <?php if($page == 'service') {echo 'active';} ?>">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php if(in_array($page, ['price', 'blog', 'detail', 'team', 'testimonial'])) {echo 'active';} ?>" data-bs-toggle="dropdown" hidden >Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="price.php" class="dropdown-item <?php if($page == 'price') {echo 'active';} ?>">Tarifs</a>
                    <a href="blog.php" class="dropdown-item <?php if($page == 'blog') {echo 'active';} ?>">Blog</a>
                    <a href="detail.php" class="dropdown-item <?php if($page == 'detail') {echo 'active';} ?>">Détails Blog</a>
                    <a href="team.php" class="dropdown-item <?php if($page == 'team') {echo 'active';} ?>">Équipe</a>
                    <a href="testimonial.php" class="dropdown-item <?php if ($page == 'testimonial') {echo 'active';}?>">Témoignages</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link <?php if($page == 'contact') {echo 'active';} ?>">Contact/Inscription</a>
            <a href="tel:<?php echo $tel; ?>" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i><?php echo $tel; ?></a>
        </div>
    </div>
</nav>
<!-- Navbar End --> 
