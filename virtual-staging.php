<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Virtual Staging</title>
    <?php include 'links.php' ?>
    <!-- Custom styling for this page is appended below or linked via an external stylesheet -->
</head>

<body class="header-absolute-remove">
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- ==========================================
         NEW SECTION: HERO OVERVIEW
         ========================================== -->
    <section class="vs-hero-section">
        <div class="container">
            <div class="vs-hero-wrapper" data-aos="fade-up" data-aos-duration="1200">
                <div class="vs-hero-img-box">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1600&q=80" alt="High-End Virtual Staging Canvas">
                </div>
                <div class="vs-hero-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="vs-tagline">Spatial Optimization</span>
                    <h1 class="vs-main-title">Virtual <span class="accent-text">Staging</span></h1>
                    <p class="vs-hero-desc">
                        Transform cold, empty blueprints and vacant properties into warm, photorealistic, premium interior environments calibrated to capture buyer emotion and accelerate listings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         NEW SECTION: SPLIT INTERIOR MAKEOVERS
         ========================================== -->
    <section class="vs-makeovers-section">
        <div class="container">
            <div class="vs-section-header text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="vs-tagline">High-Tier Render Transformations</span>
                <h2 class="vs-section-title">Budget Makeovers <span class="accent-text">You Can't Ignore</span></h2>
                <div class="header-line"></div>
            </div>

            <!-- Row 1: Living Room -->
            <div class="row vs-makeover-row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-lg-6">
                    <div class="vs-split-content">
                        <h3 class="vs-row-title">Premium Living Room Makeover</h3>
                        <p class="vs-row-desc">
                            We clear out dark structural shadows and introduce custom mid-century timber furniture models, layered ambient task lighting profiles, and architectural finishes designed to maximize perceived spatial square footage.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="vs-preview-box">
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=80" alt="Living Room Transformation">
                        <div class="vs-split-badge">Staged View</div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Children's Room (Reversed Layout) -->
            <div class="row vs-makeover-row align-items-center flex-lg-row-reverse" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-lg-6">
                    <div class="vs-split-content ps-lg-5">
                        <h3 class="vs-row-title">Optimized Children's Room Suite</h3>
                        <p class="vs-row-desc">
                            Transform awkward or narrow ancillary bedrooms into highly functional, clean layouts. Utilizing bright, low-profile Scandinavian furniture packages that emphasize functional architectural depth.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="vs-preview-box">
                        <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?auto=format&fit=crop&w=1200&q=80" alt="Children Room Transformation">
                        <div class="vs-split-badge">Staged View</div>
                    </div>
                </div>
            </div>

            <!-- Row 3: Open Space -->
            <div class="row vs-makeover-row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-lg-6">
                    <div class="vs-split-content">
                        <h3 class="vs-row-title">Monolithic Open Space Frameworks</h3>
                        <p class="vs-row-desc">
                            Vast open areas can confuse buyers. Our spatial staging structures long-range sightlines by calculating continuous micro-cement floor reflections and anchoring programmatic dining and lounge configurations cleanly.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="vs-preview-box">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1200&q=80" alt="Open Space Transformation">
                        <div class="vs-split-badge">Staged View</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UNTOUCHED: Portfolio Section -->
    <section class="portfolio-section">
        <div class="container">
            <!-- Header Group -->
            <div class="portfolio-header" data-aos="fade-up" data-aos-duration="1000">
                <span class="p-tagline">Featured Work</span>
                <h2 class="p-title">Portfolio <span class="accent-text">Showcase</span></h2>
                <p class="p-subtitle">Every render is a masterclass in photorealism — crafted with meticulous attention to lighting, material, and spatial storytelling.</p>
            </div>

            <div class="portfolio-tabs" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <button class="portfolio-tab-btn active" data-tab="living-rooms">Living Rooms</button>
                <button class="portfolio-tab-btn" data-tab="master-bedrooms">Master Bedrooms</button>
                <button class="portfolio-tab-btn" data-tab="kitchens">Kitchens</button>
                <button class="portfolio-tab-btn" data-tab="exterior">Exterior</button>
            </div>

            <div class="portfolio-slider-block active" id="living-rooms" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1400&q=80" alt="Living Room 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Minimalist Concept Salon</h4>
                                        <p class="slide-desc">Spacious architectural layout showing the interplay between harsh daytime window shadows.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1400&q=80" alt="Living Room 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Modernist Atrium Lounge</h4>
                                        <p class="slide-desc">Polished micro-cement floors paired with custom mid-century timber accent elements.</p>
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

            <div class="portfolio-slider-block" id="master-bedrooms">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?auto=format&fit=crop&w=1400&q=80" alt="Bedroom 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">The Grand Obsidian Suite</h4>
                                        <p class="slide-desc">Photorealistic interior visualization focusing on dark material palettes and ambient low-light.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1400&q=80" alt="Bedroom 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Japandi Rest Chamber</h4>
                                        <p class="slide-desc">Low-profile oak beds frames calibrated against custom textured plaster wall solutions.</p>
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

            <div class="portfolio-slider-block" id="kitchens">
                <div class="swiper portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1400&q=80" alt="Kitchen 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Nordic Culinary Framework</h4>
                                        <p class="slide-desc">Bespoke marble island counters and timber joinery rendering highlighting realistic reflections.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1400&q=80" alt="Kitchen 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Matte Charcoal Laboratory</h4>
                                        <p class="slide-desc">Integrated handleless monolithic cabinets utilizing hidden integrated LED task light profiles.</p>
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
                                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1400&q=80" alt="Exterior 1">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Twilight Estate Elevation</h4>
                                        <p class="slide-desc">High-end residential framing mapping exact environmental light pollution and glass opacity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-img-box">
                                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1400&q=80" alt="Exterior 2">
                                <div class="slide-overlay">
                                    <div class="slide-content">
                                        <h4 class="slide-title">Brutalist Coastal Pavilion</h4>
                                        <p class="slide-desc">Raw raw shuttered concrete textures integrated with dynamic computational water reflections.</p>
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

    <!-- ==========================================
         NEW SECTION: ARCHITECTURAL PIPELINE (HOW WE DO IT)
         ========================================== -->
    <section class="vs-process-section">
        <div class="container">
            <div class="vs-section-header text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="vs-tagline">Our Workflow Pipeline</span>
                <h2 class="vs-section-title">How We <span class="accent-text">Do It</span></h2>
                <div class="header-line"></div>
            </div>

            <div class="row vs-process-grid">
                <!-- Step 1 -->
                <div class="col-12 col-md-6 col-lg-3 vs-process-col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="vs-process-card">
                        <div class="vs-process-icon-wrapper">
                            <i class="ri-upload-cloud-2-line"></i>
                            <span class="vs-process-number">01</span>
                        </div>
                        <h4 class="vs-process-step-title">Upload Assets</h4>
                        <p class="vs-process-step-desc">Provide your structural blueprints, empty photographs, or wide-angle architectural drafts effortlessly.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-12 col-md-6 col-lg-3 vs-process-col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="vs-process-card">
                        <div class="vs-process-icon-wrapper">
                            <i class="ri-layout-3-line"></i>
                            <span class="vs-process-number">02</span>
                        </div>
                        <h4 class="vs-process-step-title">3D Modeling</h4>
                        <p class="vs-process-step-desc">Our design engineers map spatial geometry parameters and establish proper technical room bounds.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-12 col-md-6 col-lg-3 vs-process-col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="vs-process-card">
                        <div class="vs-process-icon-wrapper">
                            <i class="ri-magic-line"></i>
                            <span class="vs-process-number">03</span>
                        </div>
                        <h4 class="vs-process-step-title">Texture & Finish</h4>
                        <p class="vs-process-step-desc">We calibrate physically-based rendering textures along with real-world atmospheric indoor lighting paths.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-12 col-md-6 col-lg-3 vs-process-col" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="vs-process-card">
                        <div class="vs-process-icon-wrapper">
                            <i class="ri-checkbox-circle-line"></i>
                            <span class="vs-process-number">04</span>
                        </div>
                        <h4 class="vs-process-step-title">Ready Delivery</h4>
                        <p class="vs-process-step-desc">Receive ultra high-definition photorealistic interior imagery directly within 24 hours turnaround time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UNTOUCHED: Testimonials Section -->
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
                                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                            <span class="rating-number">5.0</span>
                                        </div>
                                        <div class="project-tag-badge">Residential Tower • Dubai</div>
                                    </div>
                                    <p class="testimonial-quote">
                                        "VisualCraft Studio delivered renders so photorealistic that our clients were genuinely surprised when we revealed they were digital. The level of detail in every material texture and spatial light source is simply unmatched."
                                    </p>
                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Alexander Harrington">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Alexander Harrington</h4>
                                            <span class="author-role d-block">Principal Architect, Harrington & Associates</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="quote-mark"><i class="ri-double-quotes-l"></i></div>
                                    <div class="card-top-row d-flex justify-content-between align-items-center mb-4">
                                        <div class="star-rating" data-rating="4.5">
                                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i>
                                            <span class="rating-number">4.5</span>
                                        </div>
                                        <div class="project-tag-badge">Boutique Hotel • Miami</div>
                                    </div>
                                    <p class="testimonial-quote">
                                        "The immersive lighting calibration brought our boutique pavilion design to life long before groundbreaking. Their computational architecture workflow is clean, agile, and remarkably high-tier."
                                    </p>
                                    <div class="author-meta d-flex align-items-center">
                                        <div class="author-img-box flex-shrink-0">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Marcus Vance">
                                        </div>
                                        <div class="author-info ms-3">
                                            <h4 class="author-name m-0 mb-1">Marcus Vance</h4>
                                            <span class="author-role d-block">Design Director, Vertex Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials-controls-row d-flex justify-content-between align-items-center mt-4 px-2">
                        <div class="swiper-pagination testimonials-pagination w-auto"></div>
                        <div class="testimonials-nav-group d-none d-md-flex">
                            <button class="testimonials-nav-btn btn-prev" aria-label="Previous slide"><i class="ri-arrow-left-line"></i></button>
                            <button class="testimonials-nav-btn btn-next" aria-label="Next slide"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         NEW SECTION: TECHNICAL FAQ ACCORDION
         ========================================== -->
    <section class="vs-faq-section">
        <div class="container">
            <div class="vs-section-header text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="vs-tagline">Common Architect Clearances</span>
                <h2 class="vs-section-title">Frequently Asked <span class="accent-text">Questions</span></h2>
                <div class="header-line"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="vs-accordion-wrapper" data-aos="fade-up" data-aos-duration="1200">
                        <!-- Item 1 -->
                        <div class="vs-accordion-item">
                            <div class="vs-accordion-header">
                                <span>What architectural source inputs do you accept?</span>
                                <i class="ri-add-line vs-icon"></i>
                            </div>
                            <div class="vs-accordion-body">
                                <p>We seamlessly accept standard architectural assets including AutoCAD schematic DWG files, Revit models, hand-drawn layout sheets, blueprints, or high-definition mobile photographs of raw vacant rooms.</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="vs-accordion-item">
                            <div class="vs-accordion-header">
                                <span>Can I customize specific structural furniture styles?</span>
                                <i class="ri-add-line vs-icon"></i>
                            </div>
                            <div class="vs-accordion-body">
                                <p>Absolutely. You can designate your desired furniture themes such as Luxury Minimalist, Industrial, Modern Mid-Century, or Japandi. Our model library leverages highly-accurate physical textures matching commercial brands.</p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="vs-accordion-item">
                            <div class="vs-accordion-header">
                                <span>What is the standard delivery timeframe for high-tier scaling?</span>
                                <i class="ri-add-line vs-icon"></i>
                            </div>
                            <div class="vs-accordion-body">
                                <p>Standard room configurations are fully rendered, light-calibrated, and delivered via secure cloud link within 24 to 48 hours from structural asset confirmation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UNTOUCHED & POLISHED: CTA Section -->
    <section class="sec-01">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <span class="cta-tagline d-block" data-aos="fade-up" data-aos-duration="1000">Let's Begin</span>
                    <h2 class="cta-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        Ready to Visualize <span class="accent-text">Your Vision?</span>
                    </h2>
                    <p class="cta-desc mx-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        Share your blueprints with us and receive a photorealistic preview of your future space within 24 hours.
                    </p>
                    <div class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
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

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->

    <!-- Quick vanilla JS script injected just for handling the new FAQ item interactions smoothly -->
    <script>
        document.querySelectorAll('.vs-accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                item.classList.toggle('active');
                const icon = header.querySelector('.vs-icon');
                if (item.classList.contains('active')) {
                    icon.classList.replace('ri-add-line', 'ri-subtract-line');
                } else {
                    icon.classList.replace('ri-subtract-line', 'ri-add-line');
                }
            });
        });
    </script>
</body>
</html>