<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy</title>
    <?php include 'links.php' ?>


    <style>
        body {
            background-color: var(--bg-main, #0a0d0c);
            color: var(--text-main, #e1e1e1);
            font-family: var(--font-400, 'MontserratRegular'), sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            color: var(--text-main, #e1e1e1);
            font-family: var(--font-700, 'MontserratBold'), sans-serif;
        }

        .legal-section {
            padding: 120px 0 80px 0;
        }

        .legal-content {
            background: var(--bg-surface, #121715);
            border: 1px solid rgba(138, 148, 144, 0.15);
            padding: 40px;
            border-radius: var(--radius-sm, 13px);
        }

        .legal-content p, .legal-content li {
            color: var(--text-muted, #8a9490);
            font-size: 15px;
            line-height: 1.7;
        }

        .legal-content h2 {
            font-size: 22px;
            margin-top: 30px;
            margin-bottom: 15px;
            color: var(--primary, #6bb338);
        }
        
        .accent-text {
            color: var(--primary, #6bb338);
            background: linear-gradient(120deg, var(--primary, #6bb338), var(--secondary, #c7f152));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="header-absolute-remove">
    <!-- header -->
    <?php include 'header.php' ?>

    <section class="legal-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="legal-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="mb-2">Privacy <span class="accent-text">Policy</span></h1>
                        <p class="text-muted small mb-4">Last Updated: June 2026</p>
                        <hr style="border-color: rgba(138, 148, 144, 0.2);">

                        <p>Your privacy is important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you use our website and virtual staging services.</p>

                        <h2>1. Information We Collect</h2>
                        <p>We may collect personal details that you voluntarily provide to us, including your name, email address, phone number, and any project assets (such as floor plans or property images) uploaded to our platform.</p>

                        <h2>2. How We Use Your Information</h2>
                        <p>The information we collect is used strictly to:</p>
                        <ul>
                            <li>Deliver, customize, and improve our virtual staging services.</li>
                            <li>Communicate with you regarding orders, support, or consultations.</li>
                            <li>Process secure payments and invoices.</li>
                        </ul>

                        <h2>3. Data Protection & Security</h2>
                        <p>We implement standard, industry-grade physical and electronic security measures to ensure your data and property assets remain private. We do not sell or share your personal information with third-party marketers.</p>

                        <h2>4. Cookies</h2>
                        <p>Our website uses basic cookies to optimize your browsing experience, track site traffic trends, and remember your session preferences.</p>

                        <h2>5. Contact Us</h2>
                        <p>If you have any questions or concerns regarding this Privacy Policy, please feel free to reach out to us via our main support channels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php' ?>
</body>
</html>