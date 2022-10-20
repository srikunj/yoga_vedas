<!doctype html>
<html lang="en">

<head>
    <title>Vadas YOGA CLASS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <script src="https://kit.fontawesome.com/54e7321476.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg bg-color" id="mynavbar">
        <div class="container">
            <img class="logo" height="50px" width="50px" src="images/logo2.png"  alt="logo">
            <a href="#" class="navbar-brand">Vedas Yoga</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav"
                aria-controls="myNav" aria-expanded="false" aria-label="toggle navigation">
                <span></span>Menu
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="priceing.php" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                    </li>
                   
                   
                </ul>
            </div>
        </div>

    </nav>

    <!-- End of navbar -->

<!-- Pricing Section -->
<section class="pricing-section pt-5" id="pri">
        <div class="container">
            <div class="section-title text-center">
                <h2>Pricing Plans</h2>
                <p>We believe in fair, transparent pricing.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="price-item beginner">
                        <div class="price-top">
                            <h4>Beginner</h4>
                        </div>
                        <div class="price-sec">
                            <h3>2500</h3>
                            <p>Per Month</p>
                        </div>
                        <ul>
                            <li>Livestream classes.</li>
                            <li>Sell ClassCards™.</li>
                            <li>Sell Courses.</li>
                            <li>Sell Memberships.</li>
                        </ul>
                        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KOTa28ZAJ7tF87" async> </script> </form>
                        <!-- <a href="">Get started</a> -->
                        
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="price-item intermediate">
                        <div class="price-top">
                            <h4>Intermediate</h4>
                        </div>
                        <div class="price-sec">
                            <h3>3000</h3>
                            <p>Per Month</p>
                        </div>
                        <ul>
                            <li>Unlimited Video Storage.</li>
                            <li>1 Community Group.</li>
                            <li>Sell Bundles.</li>
                            <li>Sell 1:1 Private Coaching.</li>
                        </ul>
                        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KOTfNnYF48o5hk" async> </script> </form>
                        <!-- <a href="" class="site-btn sb-gradient">Get started</a> -->
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="price-item advanced">
                        <div class="price-top">
                            <h4>Advanced</h4>
                        </div>
                        <div class="price-sec">
                            <h3>4000</h3>
                            <p>Per Month</p>
                        </div>
                        <ul>
                            <li>Zapier integration.</li>
                            <li>Deadline Funnel integration.</li>
                            <li>Quizzes.</li>
                            <li>15 instructors 5 Community Groups.</li>
                        </ul>
                        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KOTmr4kDM6gZ2v" async> </script> </form>
                        <!-- <a href="" class="site-btn sb-gradient">Get started</a> -->
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="price-item professional">
                        <div class="price-top">
                            <h4>Professional</h4>
                        </div>
                        <div class="price-sec">
                            <h3>6000</h3>
                            <p>Per Month</p>
                        </div>
                        <ul>
                            <li>Priority Support.</li>
                            <li>25 instructors.</li>
                            <li>10 Community Groups.</li>
                            <li>ConvertKit Integration.</li>
                        </ul>
                        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KOTpPFbKjvcxRo" async> </script> </form>
                        <!-- <a href="" class="site-btn sb-gradient">Get started</a> -->
                    </div>
                </div>
                <!--  -->
            </div>
        </div>

    </section>
    
    <?php
include("footer.php");
?>
    <!-- End of the Pricing Section -->


    <script src="lightbox.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>