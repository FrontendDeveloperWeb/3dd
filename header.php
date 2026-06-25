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
                <img src="assets/images/logo.png" alt="Logo" />
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

                    <li class="nav-item premium-services-dropdown">
                        <a class="nav-link main-services-link <?php
                                                                $service_pages = ['3d-architectural-visualization', 'interactive-vr-simulations', 'virtual-staging', 'decluttering', 'virtual-renovation', 'virtual-staging-decluttering', '360-virtual-staging'];
                                                                if (in_array(trim($page), $service_pages)) {
                                                                    echo 'active';
                                                                }
                                                                ?>" href="#">
                            Services <i class="ri-arrow-down-s-line dropdown-arrow-icon"></i>
                        </a>

                        <div class="mega-dropdown-panel">
                            <div class="mega-dropdown-grid">

                                <a class="mega-service-item <?php if (trim($page) == '3d-architectural-visualization') {
                                                                echo 'active-service';
                                                            } ?>" href="3d-architectural-visualization">
                                    <div class="icon-wrapper"><i class="ri-box-3-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">3D Architectural Visualization</span>
                                        <span class="item-desc">Photorealistic external and internal renders.</span>
                                    </div>
                                </a>

                                <a class="mega-service-item <?php if (trim($page) == 'interactive-vr-simulations') {
                                                                echo 'active-service';
                                                            } ?>" href="interactive-vr-simulations">
                                    <div class="icon-wrapper"><i class="ri-instance-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">Interactive VR Simulations</span>
                                        <span class="item-desc">Immersive walk-throughs and environments.</span>
                                    </div>
                                </a>

                                <a class="mega-service-item <?php if (trim($page) == 'virtual-staging') {
                                                                echo 'active-service';
                                                            } ?>" href="virtual-staging">
                                    <div class="icon-wrapper"><i class="ri-home-gear-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">Virtual Staging</span>
                                        <span class="item-desc">Furnish empty spaces digitally with style.</span>
                                    </div>
                                </a>

                                <a class="mega-service-item <?php if (trim($page) == 'decluttering') {
                                                                echo 'active-service';
                                                            } ?>" href="decluttering">
                                    <div class="icon-wrapper"><i class="ri-magic-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">Decluttering</span>
                                        <span class="item-desc">Remove mess and clean up existing layouts.</span>
                                    </div>
                                </a>

                                <a class="mega-service-item <?php if (trim($page) == 'virtual-renovation') {
                                                                echo 'active-service';
                                                            } ?>" href="virtual-renovation">
                                    <div class="icon-wrapper"><i class="ri-paint-brush-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">Virtual Renovation</span>
                                        <span class="item-desc">Remodel floors, walls, and structural spaces.</span>
                                    </div>
                                </a>

                                <a class="mega-service-item <?php if (trim($page) == 'virtual-staging-decluttering') {
                                                                echo 'active-service';
                                                            } ?>" href="virtual-staging-decluttering">
                                    <div class="icon-wrapper"><i class="ri-layout-grid-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">Virtual Staging & Decluttering</span>
                                        <span class="item-desc">Complete hybrid aesthetic transformation.</span>
                                    </div>
                                </a>
                                <a class="mega-service-item <?php if (trim($page) == '360-virtual-staging') {
                                                                echo 'active-service';
                                                            } ?>" href="360-virtual-staging">
                                    <div class="icon-wrapper"><i class="ri-anticlockwise-2-line"></i></div>
                                    <div class="item-details">
                                        <span class="item-title">360° Virtual Staging</span>
                                        <span class="item-desc">Immersive, fully furnished panoramic experiences.</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'pricing') {
                                                echo 'active';
                                            } ?>" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'portfolio') {
                                                echo 'active';
                                            } ?>" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact-us') {
                                                echo 'active';
                                            } ?>" href="contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="#" class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#consultationModal">Get Started</a>
            </div>
        </div>
    </nav>


</header>

<div class="modal fade" id="consultationModal" tabindex="-1" aria-labelledby="consultationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content custom-consultation-modal">

            <div class="modal-header border-0 pb-0">
                <div class="modal-title-group">
                    <span class="modal-tagline">BEGIN YOUR PROJECT</span>
                    <h2 class="modal-main-title id=" consultationModalLabel">Request a Consultation</h2>
                    <p class="modal-subtitle m-0">Share your vision and our team will respond within 24 hours with a tailored proposal.</p>
                </div>
                <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>

            <div class="modal-body pt-4">
                <form id="consultationForm" class="needs-validation" novalidate autocomplete="off">
                    <div class="row g-4">

                        <div class="col-12 col-md-6">
                            <label for="validationName" class="form-label custom-label">FULL NAME *</label>
                            <input type="text" class="form-control custom-input" id="validationName" placeholder="Your full name" required minlength="3">
                            <div class="invalid-feedback">Please enter your name (minimum 3 characters).</div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="validationEmail" class="form-label custom-label">EMAIL ADDRESS *</label>
                            <input type="email" class="form-control custom-input" id="validationEmail" placeholder="you@example.com" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="validationPhone" class="form-label custom-label">PHONE NUMBER</label>
                            <input type="tel" class="form-control custom-input" id="validationPhone" placeholder="+1 (555) 000-0000">
                            <div class="invalid-feedback">Please enter a valid phone number format.</div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="validationService" class="form-label custom-label">SERVICE REQUIRED *</label>
                            <select class="form-select custom-select" id="validationService" required>
                                <option value="" selected disabled hidden>Select a service</option>
                                <option value="3d-architectural-visualization">3D Architectural Visualization</option>
                                <option value="interactive-vr-simulations">Interactive VR Simulations</option>
                                <option value="virtual-staging">Virtual Staging</option>
                                <option value="decluttering">Decluttering</option>
                                <option value="virtual-renovation">Virtual Renovation</option>
                                <option value="virtual-staging-decluttering">Virtual Staging & Decluttering</option>
                                <option value="360-virtual-staging">360° Virtual Staging</option>
                            </select>
                            <div class="invalid-feedback">Please select a service option.</div>
                        </div>

                        <div class="col-12">
                            <label for="validationDesc" class="form-label custom-label">PROJECT DESCRIPTION *</label>
                            <textarea class="form-control custom-textarea" id="validationDesc" rows="4" placeholder="Describe your project, property type, timeline, and any specific requirements..." required minlength="15"></textarea>
                            <div class="invalid-feedback">Please provide a small project brief (at least 15 characters).</div>
                        </div>

                    </div>

                    <div class="modal-footer-row d-flex flex-column flex-sm-row justify-content-between align-items-center mt-4 pt-2 gap-3">
                        <span class="response-guarantee">We respond within <span class="highlight">24 hours</span></span>
                        <button type="submit" class="btn btn-theme px-4 py-2.5 d-flex align-items-center gap-2">
                            <i class="ri-send-plane-line"></i> SUBMIT REQUEST
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>