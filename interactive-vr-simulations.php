<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Architectural Visualization</title>
    <?php include 'links.php' ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- https://f5394ad4a4d84890b42f15605b139cf8.prod.enterapp.pro/ -->
</head>

<body class="header-absolute-remove">
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->
    
    <section class="vr-hero-section">
        <div class="container my-auto ">
        
        <!-- Top Badge -->
        <div class="row text-center mb-4">
            <div class="col">
                <div class="badge-vr">
                    Interactive VR Simulations
                </div>
            </div>
        </div>

        <!-- Heading Text -->
        <div class="row text-center mb-3">
            <div class="col">
                <h1 class="vr-title mx-auto">
                    Don't Just Watch. <span class="text-blue">Interact.</span>
                </h1>
            </div>
        </div>

        <!-- Descriptive Paragraph -->
        <div class="row text-center mb-5">
            <div class="col d-flex justify-content-center">
                <p class="vr-desc">
                    We build virtual reality simulations where your team can practice real work before they ever do it in the real world with no risk and wasted materials. Just confident, well-trained people with hands on experience.
                </p>
            </div>
        </div>

        <!-- Call To Action Buttons -->
        <div class="row text-center mb-4">
            <div class="col d-sm-flex justify-content-center gap-3">
                <button class="btn btn-theme d-inline-flex align-items-center justify-content-center gap-2 mb-3 mb-sm-0">
                    <i class="fa-solid fa-video"></i> Watch The Demo
                </button>
                <button class="btn btn-project d-inline-flex align-items-center justify-content-center gap-2 mb-3 mb-sm-0">
                    Tell Us About Your Project <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

       
       
    
    </div>
    </section>
    <section>
        <div class="container">
        <div class="row g-5 align-items-start">
            
            <div class="col-lg-7">
                <div class="offer-tag">What We Offer</div>
                <h2 class="section-title mb-4">A Virtual Space Where Your Team<br>Can Practice the Real Thing</h2>
                
                <p class="section-desc mb-4">
                    Ever heard about the flight simulator? We made it specific to your industry. Be it for medical or real estate, we create fully interactive, 3D virtual simulations that mirror your actual workplace.
                </p>
                <p class="section-desc mb-0">
                    It is as simple as playing VR games. Your team can put on your VR headset and follow the same steps, using the same tools, going through the same process they would on the job.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="metric-card">
                            <div class="metric-number">5</div>
                            <p class="metric-text">Interactive production stages in each simulation</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="metric-card">
                            <div class="metric-number">100%</div>
                            <p class="metric-text">Unreal Engine powered – photorealistic environments</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="metric-card">
                            <div class="metric-number">3</div>
                            <p class="metric-text">User roles: trainee, returning user & admin</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="metric-card">
                            <div class="metric-number">0</div>
                            <p class="metric-text">Risk to real equipment, materials or personnel</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container space-between-sections">
        
        <div class="row text-center mb-5">
            <div class="col">
                <div class="offer-tag">What We Offer</div>
                <h2 class="video-heading mb-4">Watch How It Works</h2>
                <p class="video-desc">
                    The best way to understand it is to see it. Watch the full walkthrough of simulation from logging in, to completing all five stages and viewing the results in the dashboard.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?q=80&w=1200&auto=format&fit=crop">
                        <source src="your-video-file.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

    </div>
    </section>

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