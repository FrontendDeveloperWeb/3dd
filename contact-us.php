<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php' ?>
    <!-- https://f5394ad4a4d84890b42f15605b139cf8.prod.enterapp.pro/ -->
    <!-- https://f5394ad4a4d84890b42f15605b139cf8.prod.enterapp.pro/ -->
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section banner -->
    <section class="hero-section about-hero">
        <div class="hero-bg-zoom"
            style="background-image: linear-gradient(rgba(10, 13, 12, 0.85), rgba(10, 13, 12, 0.95)), url('assets/images/about-us-bg.jfif');">
        </div>

        <div class="container hero-container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-xl-9">

                    <span class="hero-badge text-uppercase">Get In Touch</span>
                    <div class="hero-title-wrapper">
                        <h1 class="hero-title phrase-1">
                            Let's Build Your <span>Vision</span>
                        </h1>
                    </div>

                    <p class="hero-desc">
                        Have an upcoming architectural project or structural master plan? Reach out to our visualization studio today. Let’s translate your blueprints into hyper-photorealistic digital environments.
                    </p>

                    <div class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3">
                        <a href="#direct-message" class="btn btn-theme">
                            Drop a Message <i class="ri-mail-send-line ms-2"></i>
                        </a>
                        <a href="tel:+18001234567" class="btn btn-theme btn-theme-outline">
                            <i class="ri-phone-line me-2"></i> Call Studio
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- End section -->


    <!--  sec-Counter-->
    <?php include 'counter.php' ?>

    <!--  sec-Counter End-->


    <section id="direct-message" class="contact-form-section">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-5 col-md-12">
                    <div class="info-sidebar-wrapper">
                        <span class="info-section-tag text-uppercase">Contact Info</span>
                        <h2 class="info-section-title">Reach Out Directly</h2>
                        <p class="info-section-desc">
                            Our team of visualization specialists is ready to discuss your project and craft the perfect solution.
                        </p>

                        <div class="info-meta-list">

                            <div class="info-meta-item d-flex align-items-start gap-3">
                                <div class="info-icon-box d-flex align-items-center justify-content-center">
                                    <i class="ri-map-pin-2-line"></i>
                                </div>
                                <div class="info-text-content">
                                    <h3>Address</h3>
                                    <p>1 Luxury Tower, 5th Floor<br>Beverly Hills, CA 90210</p>
                                </div>
                            </div>

                            <div class="info-meta-item d-flex align-items-start gap-3">
                                <div class="info-icon-box d-flex align-items-center justify-content-center">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="info-text-content">
                                    <h3>Phone</h3>
                                    <p><a href="tel:+18001234567">+1 (800) 123-4567</a></p>
                                </div>
                            </div>

                            <div class="info-meta-item d-flex align-items-start gap-3">
                                <div class="info-icon-box d-flex align-items-center justify-content-center">
                                    <i class="ri-mail-line"></i>
                                </div>
                                <div class="info-text-content">
                                    <h3>Email</h3>
                                    <p><a href="mailto:studio@visualcraft.io">studio@visualcraft.io</a></p>
                                </div>
                            </div>

                            <div class="info-meta-item d-flex align-items-start gap-3">
                                <div class="info-icon-box d-flex align-items-center justify-content-center">
                                    <i class="ri-time-line"></i>
                                </div>
                                <div class="info-text-content">
                                    <h3>Hours</h3>
                                    <p>Mon–Fri: 9am–7pm PST<br>Weekend: By Appointment</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="contact-card-panel">
                        <h2 class="form-panel-title">Send Us a Message</h2>

                        <form class="studio-interactive-form">
                            <div class="row g-4">

                                <div class="col-md-6 col-12">
                                    <div class="input-field-group">
                                        <label class="text-uppercase">Full Name <span>*</span></label>
                                        <input type="text" class="form-studio-control" placeholder="Your name" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="input-field-group">
                                        <label class="text-uppercase">Email <span>*</span></label>
                                        <input type="email" class="form-studio-control" placeholder="you@example.com" required>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="input-field-group">
                                        <label class="text-uppercase">Phone</label>
                                        <input type="text" class="form-studio-control" placeholder="+1 (555) 000-0000">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="input-field-group">
                                        <label class="text-uppercase">Service <span>*</span></label>
                                        <div class="select-field-wrapper">
                                            <select class="form-studio-control selector-element" required>
                                                <option value="" disabled selected hidden>Select a service</option>
                                                <option value="3d-rendering">3D Exterior Rendering</option>
                                                <option value="interior-visualization">Interior Space Design</option>
                                                <option value="vr-walkthrough">Virtual Reality Walkthrough</option>
                                                <option value="animation">Cinematic Architectural Animation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="input-field-group">
                                        <label class="text-uppercase">Project Description <span>*</span></label>
                                        <textarea class="form-studio-control text-area-control" rows="5" placeholder="Describe your project..." required></textarea>
                                    </div>
                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-center gap-4 mt-4">
                                    <div class="form-response-alert">
                                        Response within <span class="response-time-highlight">24 hours</span>
                                    </div>
                                    <button type="submit" class="btn-studio-submit-action text-uppercase">
                                        <i class="ri-send-plane-fill me-2"></i> Send Message
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="testimonials-section">
        <div class="testi-grid-line"></div>

        <div class="container">

            <div class="row justify-content-center text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-8 col-lg-6">
                    <span class="t-tagline d-inline-block mb-2">Client Voices</span>
                    <h2 class="t-title m-0">Trusted by <span class="accent-text">Industry Leaders</span></h2>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
                <div class="col-12 col-md-10 col-lg-8">

                    <div class="swiper testimonialsSwiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quote-mark"><i class="ri-double-quotes-l"></i></div>

                                    <div class="card-top-row d-flex justify-content-between align-items-center mb-4">
                                        <div class="star-rating" data-rating="5.0">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <span class="rating-number">5.0</span>
                                        </div>
                                        <div class="project-tag-badge">Residential Tower • Dubai</div>
                                    </div>

                                    <p class="testimonial-quote">
                                        "VisualCraft Studio delivered renders so photorealistic that our clients were
                                        genuinely surprised when we revealed they were digital. The level of detail in
                                        every material texture and spatial light source is simply unmatched."
                                    </p>

                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                                alt="Alexander Harrington">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Alexander Harrington</h4>
                                            <span class="author-role d-block">Principal Architect, Harrington &
                                                Associates</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quote-mark"><i class="ri-double-quotes-l"></i></div>

                                    <div class="card-top-row d-flex justify-content-between align-items-center mb-4">
                                        <div class="star-rating" data-rating="4.5">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>
                                            <span class="rating-number">4.5</span>
                                        </div>
                                        <div class="project-tag-badge">Boutique Hotel • Miami</div>
                                    </div>

                                    <p class="testimonial-quote">
                                        "The immersive lighting calibration brought our boutique pavilion design to life
                                        long before groundbreaking. Their computational architecture workflow is clean,
                                        agile, and remarkably high-tier."
                                    </p>

                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
                                                alt="Marcus Vance">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Marcus Vance</h4>
                                            <span class="author-role d-block">Design Director, Vertex Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quote-mark"><i class="ri-double-quotes-l"></i></div>

                                    <div class="card-top-row d-flex justify-content-between align-items-center mb-4">
                                        <div class="star-rating" data-rating="4.0">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                            <span class="rating-number">4.0</span>
                                        </div>
                                        <div class="project-tag-badge">Luxury Villa • Monaco</div>
                                    </div>

                                    <p class="testimonial-quote">
                                        "We required extremely rapid visualization iterations for a demanding
                                        presentation board. Not only did they beat our time criteria, but the glass
                                        opacity and reflections maps were flawlessly calculated."
                                    </p>

                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80"
                                                alt="Julian Sterling">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Julian Sterling</h4>
                                            <span class="author-role d-block">Senior Partner, Sterling Atelier</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quote-mark"><i class="ri-double-quotes-l"></i></div>

                                    <div class="card-top-row d-flex justify-content-between align-items-center mb-4">
                                        <div class="star-rating" data-rating="5.0">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <span class="rating-number">5.0</span>
                                        </div>
                                        <div class="project-tag-badge">Civic Center • London</div>
                                    </div>

                                    <p class="testimonial-quote">
                                        "Their 3D asset optimization completely transformed our virtual VR workflow
                                        pipeline. Clients can walk through unbuilt spatial schemes feeling the realistic
                                        weight of every choice."
                                    </p>

                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80"
                                                alt="Elena Rostova">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Elena Rostova</h4>
                                            <span class="author-role d-block">Head of Infrastructure, Apex Urban</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="testimonials-controls-row d-flex justify-content-between align-items-center mt-4 px-2">
                        <div class="swiper-pagination testimonials-pagination w-auto"></div>

                        <div class="testimonials-nav-group d-none d-md-flex">
                            <button class="testimonials-nav-btn btn-prev" aria-label="Previous slide">
                                <i class="ri-arrow-left-line"></i>
                            </button>
                            <button class="testimonials-nav-btn btn-next" aria-label="Next slide">
                                <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- section partner -->

    <!-- section Start -->
    <section class="sec-01">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-8">

                    <span class="cta-tagline d-block" data-aos="fade-up" data-aos-duration="1000">
                        Let's Begin
                    </span>

                    <h2 class="cta-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        Ready to Visualize <span class="accent-text">Your Vision?</span>
                    </h2>

                    <!-- Description Body Text -->
                    <p class="cta-desc mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        Share your blueprints with us and receive a photorealistic preview of your future space within
                        24 hours.
                    </p>

                    <div class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3"
                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">

                        <a href="#" class="btn btn-theme">
                            Request a Consultation <i class="ri-arrow-right-line ms-2"></i>
                        </a>

                        <a href="#" class="btn btn-theme btn-theme-outline">
                            <i class="ri-play-fill me-2"></i> View Our Work
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- section ENd -->

    <?php //include "partners.php" 
    ?>

    <?php  // include 'get-quote.php' 
    ?>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->


</body>

</html>