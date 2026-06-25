<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <?php include 'links.php' ?>
    <!-- https://f5394ad4a4d84890b42f15605b139cf8.prod.enterapp.pro/ -->
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section banner -->
    <section class="hero-section">
        <div class="hero-bg-zoom"
            style="background-image: linear-gradient(rgba(10, 13, 12, 0.8), rgba(10, 13, 12, 0.9)), url('assets/images/hero-bg.jfif');">
        </div>

        <div class="frame-corner top-left"></div>
        <div class="frame-corner top-right"></div>
        <div class="frame-corner bottom-left"></div>
        <div class="frame-corner bottom-right"></div>

        <div class="container hero-container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-xl-9">

                    <span class="hero-badge text-uppercase">Ultra-Luxury 3D Visualization Studio</span>
                    <div class="hero-title-wrapper">

                        <h1 class="hero-title phrase-1">
                            <div class="line-mask">
                                <span class="smooth-line">Render Your Architectural Vision</span>
                            </div>
                            <div class="line-mask">
                                <span class="smooth-line line-italic">Into Reality</span>
                            </div>
                        </h1>

                        <h1 class="hero-title phrase-2">
                            <div class="line-mask">
                                <span class="smooth-line">Immersive 3D Spatial Concepts</span>
                            </div>
                            <div class="line-mask">
                                <span class="smooth-line line-italic">Hyper-Real Precision</span>
                            </div>
                        </h1>

                    </div>

                    <p class="hero-desc">
                        We craft ultra-photorealistic 3D environments that reveal exactly what your property will look
                        like — every texture, every shadow, every detail — before construction begins.
                    </p>

                    <div
                        class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3">
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

        <div class="scroll-explore">
            <span class="text-uppercase">Scroll to Explore</span>
            <i class="ri-arrow-down-s-line chevron-down"></i>
        </div>
    </section>
    <!-- End section -->

    <!-- Sec-01 -->
    <section class="section comparison-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="section-badge text-uppercase">The Transformation</span>
                    <h2 class="section-title">From Empty Room to <span class="accent-text">Luxury Vision</span></h2>
                    <p class="section-desc">
                        Drag the divider to reveal how we transform bare spaces into breathtaking, photorealistic luxury
                        environments.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="comparison-slider-container">

                        <div class="slider-image image-before">
                            <img src="assets/images/before.jpeg" alt="Empty Space Before Transformation" loading="lazy">
                            <span class="image-label label-before text-uppercase">Empty Space</span>
                        </div>

                        <div class="slider-image image-after">
                            <img src="assets/images/after.jpeg" alt="Luxury 3D Architectural Visualization"
                                loading="lazy">
                            <span class="image-label label-after text-uppercase">3D Visualization</span>
                        </div>

                        <div class="slider-handle">
                            <div class="handle-line"></div>
                            <div class="handle-button">
                                <i class="ri-arrow-left-right-line"></i>
                            </div>
                            <div class="handle-line"></div>
                        </div>

                    </div>

                    <div class="text-center mt-3">
                        <span class="drag-hint text-uppercase">
                            <i class="ri-arrow-left-s-line"></i> Drag to compare <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Sec-01 End -->

    <!--  sec-Counter-->
    <?php include 'counter.php' ?>

    <!--  sec-Counter End-->

    <section class="services-section">
        <div class="container">
            <div class="section-divider-line"></div>

            <div class="services-header" data-aos="fade-up">
                <span class="section-tagline">What We Offer</span>
                <h2 class="section-title">Our Premium Services</h2>
                <p class="section-subtitle">From ultra-photorealistic 3D renders to immersive hybrid transformations, we provide end-to-end architectural visualization solutions.</p>
            </div>

            <div class="services-grid">

                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon"><i class="ri-box-3-line"></i></div>
                    <span class="card-tag">Core Service</span>
                    <h3 class="card-title">3D Architectural Visualization</h3>
                    <p class="card-desc">Photorealistic external and internal renders that bridge the gap between blueprint and reality.</p>
                    <a href="3d-architectural-visualization" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-icon"><i class="ri-instance-line"></i></div>
                    <span class="card-tag">Immersive Tech</span>
                    <h3 class="card-title">Interactive VR Simulations</h3>
                    <p class="card-desc">Immersive walk-throughs and environments that let buyers step inside unbuilt spaces.</p>
                    <a href="interactive-vr-simulations" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon"><i class="ri-home-gear-line"></i></div>
                    <span class="card-tag">Virtual Staging</span>
                    <h3 class="card-title">Virtual Staging</h3>
                    <p class="card-desc">Furnish empty spaces digitally with style to dramatically increase buyer appeal.</p>
                    <a href="virtual-staging" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="card-icon"><i class="ri-magic-line"></i></div>
                    <span class="card-tag">Photo Enhancement</span>
                    <h3 class="card-title">Decluttering</h3>
                    <p class="card-desc">Remove mess and clean up existing layouts to present property photos at their pristine best.</p>
                    <a href="decluttering" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon"><i class="ri-paint-brush-line"></i></div>
                    <span class="card-tag">Virtual Renovation</span>
                    <h3 class="card-title">Virtual Renovation</h3>
                    <p class="card-desc">Remodel floors, walls, and structural spaces to visualize a property's full structural potential.</p>
                    <a href="virtual-renovation" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-icon"><i class="ri-layout-grid-line"></i></div>
                    <span class="card-tag">Virtual Staging</span>
                    <h3 class="card-title">Virtual Staging & Decluttering</h3>
                    <p class="card-desc">Complete hybrid aesthetic transformation — remove old clutter and introduce premium styling.</p>
                    <a href="virtual-staging-decluttering" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon"><i class="ri-anticlockwise-2-line"></i></div>
                    <span class="card-tag">Virtual Staging</span>
                    <h3 class="card-title">360° Virtual Staging</h3>
                    <p class="card-desc">Immersive, fully furnished panoramic experiences showcasing every angle of a space.</p>
                    <a href="360-virtual-staging" class="card-link">Learn more <i class="ri-arrow-right-line"></i></a>
                </div>

            </div>
        </div>
    </section>





    <section class="why-choose-section">
        <div class="container why-choose-wrapper">

            <div class="w-content-col" data-aos="fade-right">
                <span class="w-tagline">Why Choose Us</span>
                <h2 class="w-title">Where Architecture Meets Artistry</h2>
                <p class="w-description">
                    We are not simply a rendering studio. We are architectural storytellers who understand
                    that every pixel must communicate luxury, precision, and possibility. Our work
                    transforms how buyers, investors, and developers experience unbuilt spaces.
                </p>

                <div class="w-features-list">

                    <div class="w-feature-item">
                        <div class="w-feature-icon">
                            <i class="ri-medal-line"></i>
                        </div>
                        <div class="w-feature-text">
                            <h3>Uncompromising Quality</h3>
                            <p>Every render undergoes a rigorous multi-stage quality review process. We deliver nothing
                                less than photorealism.</p>
                        </div>
                    </div>

                    <div class="w-feature-item">
                        <div class="w-feature-icon">
                            <i class="ri-time-line"></i>
                        </div>
                        <div class="w-feature-text">
                            <h3>Rapid Delivery</h3>
                            <p>Standard projects delivered within 24–48 hours. Rush delivery available for time-critical
                                listings.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="w-feature-item">
                        <div class="w-feature-icon">
                            <i class="ri-shield-check-line"></i>
                        </div>
                        <div class="w-feature-text">
                            <h3>Unlimited Revisions</h3>
                            <p>We work until you are completely satisfied. Your vision is our mission — no revision
                                caps, ever.</p>
                        </div>
                    </div>

                </div>

                <div class="w-action-wrapper">
                    <a href="#" class="btn btn-theme">
                        Request a Consultation <i class="ri-arrow-right-line ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="w-media-col" data-aos="fade-left">
                <div class="deco-frame frame-top-left"></div>
                <div class="deco-frame frame-bottom-right"></div>

                <div class="w-image-container">
                    <img src="assets/images/architecture-showcase.jpg" alt="Luxury Architecture Walkthrough"
                        class="w-main-img">

                    <div class="w-counter-badge">
                        <span class="counter-number">1,200+</span>
                        <span class="counter-label">Projects Delivered</span>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="portfolio-section">


        <div class="container">

            <!-- Header Group -->
            <div class="portfolio-header" data-aos="fade-up" data-aos-duration="1000">
                <span class="p-tagline">Featured Work</span>
                <h2 class="p-title">Portfolio <span class="accent-text">Showcase</span></h2>
                <p class="p-subtitle">Every render is a masterclass in photorealism — crafted with meticulous attention
                    to lighting, material, and spatial storytelling.</p>
            </div>

            <div class="portfolio-tabs" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <button class="portfolio-tab-btn active" data-tab="living-rooms">Living Rooms</button>
                <button class="portfolio-tab-btn" data-tab="master-bedrooms">Master Bedrooms</button>
                <button class="portfolio-tab-btn" data-tab="kitchens">Kitchens</button>
                <button class="portfolio-tab-btn" data-tab="exterior">Exterior</button>
            </div>

            <div class="portfolio-slider-block active" id="living-rooms" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1200">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1400&q=80"
                                    alt="Living Room 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Minimalist Concept Salon</h4>
                                        <p class="slide-desc">Spacious architectural layout showing the interplay
                                            between harsh daytime window shadows.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1400&q=80"
                                    alt="Living Room 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Modernist Atrium Lounge</h4>
                                        <p class="slide-desc">Polished micro-cement floors paired with custom
                                            mid-century timber accent elements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev portfolio-nav-btn"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="swiper-button-next portfolio-nav-btn"><i class="ri-arrow-right-s-line"></i></div>
                </div>
                <div class="swiper-pagination portfolio-pagination"></div>
            </div>

            <!-- ==========================================
             TAB 2: MASTER BEDROOMS SLIDER BLOCK
             ========================================== -->
            <div class="portfolio-slider-block" id="master-bedrooms">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?auto=format&fit=crop&w=1400&q=80"
                                    alt="Bedroom 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">The Grand Obsidian Suite</h4>
                                        <p class="slide-desc">Photorealistic interior visualization focusing on dark
                                            material palettes and ambient low-light.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1400&q=80"
                                    alt="Bedroom 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Japandi Rest Chamber</h4>
                                        <p class="slide-desc">Low-profile oak beds frames calibrated against custom
                                            textured plaster wall solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev portfolio-nav-btn"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="swiper-button-next portfolio-nav-btn"><i class="ri-arrow-right-s-line"></i></div>
                </div>
                <div class="swiper-pagination portfolio-pagination"></div>
            </div>

            <!-- ==========================================
             TAB 3: KITCHENS SLIDER BLOCK
             ========================================== -->
            <div class="portfolio-slider-block" id="kitchens">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1400&q=80"
                                    alt="Kitchen 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Nordic Culinary Framework</h4>
                                        <p class="slide-desc">Bespoke marble island counters and timber joinery
                                            rendering highlighting realistic reflections.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1400&q=80"
                                    alt="Kitchen 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Matte Charcoal Laboratory</h4>
                                        <p class="slide-desc">Integrated handleless monolithic cabinets utilizing hidden
                                            integrated LED task light profiles.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev portfolio-nav-btn"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="swiper-button-next portfolio-nav-btn"><i class="ri-arrow-right-s-line"></i></div>
                </div>
                <div class="swiper-pagination portfolio-pagination"></div>
            </div>


            <div class="portfolio-slider-block" id="exterior">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1400&q=80"
                                    alt="Exterior 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Twilight Estate Elevation</h4>
                                        <p class="slide-desc">High-end residential framing mapping exact environmental
                                            light pollution and glass opacity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1400&q=80"
                                    alt="Exterior 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Brutalist Coastal Pavilion</h4>
                                        <p class="slide-desc">Raw raw shuttered concrete textures integrated with
                                            dynamic computational water reflections.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev portfolio-nav-btn"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="swiper-button-next portfolio-nav-btn"><i class="ri-arrow-right-s-line"></i></div>
                </div>
                <div class="swiper-pagination portfolio-pagination"></div>
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