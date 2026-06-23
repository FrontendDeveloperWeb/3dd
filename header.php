<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!-- <div class="top-bar">
    <div class="container">
        <div class="top-warpper">
            <div class="phone-mail">
                <a href="tel:+1234567890"><i class="ri ri-phone-line"></i> +1 234 567 890</a>
                <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@yourdomain.com</a>
            </div>
            <div class="social-media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div> -->
<header class="header">

    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') {
                            echo 'active';
                        } ?>" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about-us') {
                            echo 'active';
                        } ?>" href="about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == '#') {
                            echo 'active';
                        } ?>" href="#">
                            Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="3d-architectural-visualization">3d Architectural Visualization</a></li>
                            <li><a class="dropdown-item" href="interactive-vr-simulations">Interactive VR Simulations</a></li>
                            <li><a class="dropdown-item" href="#">Service 3</a></li>
                            <li><a class="dropdown-item" href="#">Service 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') {
                            echo 'active';
                        } ?>" href="#">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'portfolio') {
                            echo 'active';
                        } ?>" href="portfolio">
                            Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact-us') {
                            echo 'active';
                        } ?>" href="contact-us">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="#" class="btn btn-theme">Get Started</a>
            </div>
        </div>
    </nav>
</header>