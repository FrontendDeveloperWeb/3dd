<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interactive VR Simulations</title>
    <?php include 'links.php' ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        /* ==========================================
           THEME STYLING CONFIGURATION
           ========================================== */
        body {
            background-color: var(--bg-main, #0a0d0c);
            color: var(--text-main, #e1e1e1);
            font-family: var(--font-400, 'MontserratRegular'), sans-serif;
            overflow-x: hidden;
        }

 

        .accent-text {
            color: var(--primary, #6bb338);
            background: linear-gradient(120deg, var(--primary, #6bb338), var(--secondary, #c7f152));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero / Introduction Area */
        .vr-hero-section {
            padding: 100px 0 60px 0;
            text-align: center;
            position: relative;
        }

        .vr-hero-tag {
            background: rgba(107, 179, 56, 0.1);
            border: 1px solid var(--primary, #6bb338);
            color: var(--primary, #6bb338);
            padding: 6px 16px;
            border-radius: var(--radius-lg, 50px);
            font-size: 14px;
            font-family: var(--font-600, 'MontserratSemiBold');
            display: inline-block;
            margin-bottom: 20px;
        }

        .vr-hero-section h1 {
            font-size: var(--main-heading-size, clamp(32px, calc(2rem + 2.5vw), 54px));
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .vr-hero-desc {
            color: var(--text-muted, #8a9490);
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto 35px auto;
            font-family: var(--font-400, 'MontserratRegular');
        }

        /* Metric Grid Counter Rows */
        .vr-metrics-row {
            margin-top: 40px;
            border-top: 1px solid rgba(138, 148, 144, 0.15);
            padding-top: 40px;
        }

        .vr-metric-card {
            background: var(--bg-surface, #121715);
            border: 1px solid rgba(107, 179, 56, 0.15);
            padding: 25px;
            border-radius: var(--radius-sm, 13px);
            text-align: center;
            transition: var(--transition-smooth, all 0.4s ease-in-out);
        }

        .vr-metric-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary, #6bb338);
            box-shadow: 0 10px 20px rgba(107, 179, 56, 0.05);
        }

        .vr-metric-num {
            font-size: 36px;
            font-family: var(--font-800, 'MontserratExtraBold');
            color: var(--secondary, #c7f152);
            margin-bottom: 5px;
        }

        .vr-metric-lbl {
            color: var(--text-muted, #8a9490);
            font-size: 14px;
            font-family: var(--font-500, 'MontserratMedium');
        }

        /* Interactive Video Block Section */
        .vr-video-section {
            padding: 60px 0;
        }

        .vr-section-title {
            font-size: 32px;
            margin-bottom: 15px;
            font-family: var(--font-700, 'MontserratBold');
        }

        .vr-section-desc {
            color: var(--text-muted, #8a9490);
            max-width: 700px;
            margin: 0 auto 40px auto;
        }

        .vr-video-wrapper {
            background: var(--bg-surface, #121715);
            border: 2px solid rgba(107, 179, 56, 0.2);
            border-radius: var(--radius-sm, 13px);
            padding: 15px;
            position: relative;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .vr-video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
        }

        .vr-video-container iframe,
        .vr-video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Workflow Step Layout Module Blocks */
        .vr-steps-section {
            padding: 60px 0;
        }

        .vr-step-card {
            background: var(--bg-surface, #121715);
            border: 1px solid rgba(138, 148, 144, 0.1);
            border-radius: var(--radius-sm, 13px);
            padding: 30px;
            height: 100%;
            transition: var(--transition-fast, all 0.25s ease);
        }

        .vr-step-card:hover {
            border-color: var(--primary, #6bb338);
            background: rgba(18, 23, 21, 0.8);
        }

        .vr-step-num {
            font-size: 14px;
            font-family: var(--font-700, 'MontserratBold');
            color: var(--primary, #6bb338);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .vr-step-title {
            font-size: 18px;
            margin-bottom: 12px;
            font-family: var(--font-600, 'MontserratSemiBold');
        }

        .vr-step-desc {
            font-size: 14px;
            color: var(--text-muted, #8a9490);
            line-height: 1.6;
            margin: 0;
        }

        /* Sector Target Splits */
        .vr-sectors-section {
            padding: 60px 0 100px 0;
        }

        .vr-sector-card {
            background: var(--bg-surface, #121715);
            border: 1px solid rgba(138, 148, 144, 0.1);
            border-radius: var(--radius-sm, 13px);
            padding: 40px;
            height: 100%;
        }

        .vr-sector-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .vr-sector-card p {
            color: var(--text-muted, #8a9490);
            line-height: 1.6;
            font-size: 15px;
        }
    </style>
</head>

<body class="header-absolute-remove">
    <?php include 'header.php' ?>
    <section class="vr-hero-section">
        <div class="container">
            <span class="vr-hero-tag" data-aos="fade-up">Interactive VR Simulations</span>
            <h1 data-aos="fade-up" data-aos-delay="100">Don't Just Watch. <span class="accent-text">Interact.</span></h1>
            <p class="vr-hero-desc" data-aos="fade-up" data-aos-delay="200">
                We build virtual reality simulations where your team can practice real work before they ever do it in the real world with no risk and wasted materials. Just confident, well-trained people with hands-on experience.
            </p>

            <div class="hero-actions d-flex flex-sm-row flex-column justify-content-center align-items-center gap-3" data-aos="fade-up" data-aos-delay="300">
                <a href="#demo-video" class="btn btn-theme">
                    <i class="ri-play-fill me-2"></i> Watch The Demo
                </a>
                <a href="#" class="btn btn-theme btn-theme-outline">
                    Tell Us About Your Project <i class="ri-arrow-right-line ms-2"></i>
                </a>
            </div>

            <div class="row vr-metrics-row g-4 justify-content-center">
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="vr-metric-card">
                        <div class="vr-metric-num">5</div>
                        <div class="vr-metric-lbl">Interactive production stages in each simulation</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="vr-metric-card">
                        <div class="vr-metric-num">100%</div>
                        <div class="vr-metric-lbl">Unreal Engine powered — photorealistic environments</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="vr-metric-card">
                        <div class="vr-metric-num">3</div>
                        <div class="vr-metric-lbl">User roles: Trainee, returning user & admin</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="vr-metric-card">
                        <div class="vr-metric-num">0</div>
                        <div class="vr-metric-lbl">Risk to real equipment, materials or personnel</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vr-video-section" id="demo-video">
        <div class="container text-center">
            <h2 class="vr-section-title" data-aos="fade-up">Watch How It <span class="accent-text">Works</span></h2>
            <p class="vr-section-desc" data-aos="fade-up" data-aos-delay="100">
                The best way to understand VR is to see it. Watch the full walkthrough of simulation from logging in to completing all five stages and viewing the results in the dashboard.
            </p>

            <div class="vr-video-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="vr-video-container">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=0&mute=1" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="vr-steps-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="vr-section-title" data-aos="fade-up">Simple to <span class="accent-text">Use</span></h2>
                <p class="vr-section-desc" data-aos="fade-up" data-aos-delay="100">Here's what actually happens when someone puts on the headset and starts a session.</p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="vr-step-card">
                        <div class="vr-step-num">01</div>
                        <h4 class="vr-step-title">The trainee logs in</h4>
                        <p class="vr-step-desc">They enter their name through a clean 3D virtual keyboard menu inside the VR environment. The system creates their personal profile right away and gets ready to track everything from that point on.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="vr-step-card">
                        <div class="vr-step-num">02</div>
                        <h4 class="vr-step-title">Track Progress</h4>
                        <p class="vr-step-desc">Returning users just enter their name and tap "My Dashboard" to see their previous sessions, what they completed, and where they can improve.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="vr-step-card">
                        <div class="vr-step-num">03</div>
                        <h4 class="vr-step-title">Managers get the full picture</h4>
                        <p class="vr-step-desc">Admins can log into a secure panel with a password and get a clear view of every worker's progress, their performance, and how they're improving over time.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="vr-step-card">
                        <div class="vr-step-num">04</div>
                        <h4 class="vr-step-title">Hands-on Experience</h4>
                        <p class="vr-step-desc">The trainee moves through five rooms, and each one consists of a different part of the process. They must complete each stage correctly before moving forward, just like in real life.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="vr-step-card">
                        <div class="vr-step-num">05</div>
                        <h4 class="vr-step-title">Every action is recorded</h4>
                        <p class="vr-step-desc">The system tracks everything as it happens—from what was done, in what order, and how long it took. No one needs to manually log anything; it's all there.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="vr-step-card">
                        <div class="vr-step-num">06</div>
                        <h4 class="vr-step-title">Install and go</h4>
                        <p class="vr-step-desc">We hand you a single file. You install it on your VR headset and it's ready to use. That's it. No complicated setup required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vr-sectors-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="vr-section-title" data-aos="fade-up">If Your Team Needs to Learn a Process, <span class="accent-text"><br>We Can Simulate It</span></h2>
                <p class="vr-section-desc" data-aos="fade-up" data-aos-delay="100">Our VR simulations are built for organizations where training matters and zero limits for errors.</p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="vr-sector-card">
                        <h3>Medical & Pharmaceutical <span class="accent-text">Training Institutes</span></h3>
                        <p>Give students a virtual lab they can use as many times as they need. It's a practical, hands-on way to build real skills without the cost or logistics of a physical training setup.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="vr-sector-card">
                        <h3>Corporate <span class="accent-text">Training Teams</span></h3>
                        <p>Whether you're onboarding new hires or upskilling an existing team, VR simulations give everyone the same consistent experience regardless of where they are or who's running the session.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>
</body>

</html>