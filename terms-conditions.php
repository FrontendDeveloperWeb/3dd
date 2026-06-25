<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms & Conditions</title>
    <?php include 'links.php' ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

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
                        <h1 class="mb-2">Terms & <span class="accent-text">Conditions</span></h1>
                        <p class="text-muted small mb-4">Last Updated: June 2026</p>
                        <hr style="border-color: rgba(138, 148, 144, 0.2);">

                        <p>Welcome to our platform. By accessing this website and utilizing our virtual staging solutions, you agree to comply with and be bound by the following terms and conditions.</p>

                        <h2>1. Service Utilization</h2>
                        <p>You agree to use this website and our design services solely for legitimate real estate marketing, architectural preview, and personal or commercial presentation intents.</p>

                        <h2>2. Intellectual Property Rights</h2>
                        <p>All core code, website interface branding, and unique layout logic belong exclusively to us. Final delivered 3D rendered assets or staged imagery are licensed to you for your marketing listings upon complete payment clearance.</p>

                        <h2>3. User Assets Submission</h2>
                        <p>When uploading base property assets, photos, or layouts, you warrant that you possess the necessary copyright permissions for those materials. We hold no responsibility for copyright disputes arising from user-provided imagery.</p>

                        <h2>4. Revisions & Delivery Schedules</h2>
                        <p>We aim to fulfill virtual staging orders within our stated timeframes. Minor style revisions are subject to the specific rules laid out in your service package terms.</p>

                        <h2>5. Limitation of Liability</h2>
                        <p>Our virtual layouts are artistic representations built to aid marketing visualization. We are not liable for direct or indirect discrepancies between structural real estate modifications and the stylized preview models.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php' ?>
</body>
</html>