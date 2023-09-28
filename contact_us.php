<?php
if(isset($_POST[""]))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yashwant education society</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css" />
    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
</head>

<body>
    <header-component></header-component>
    <!--Contact-section-start-->
    <section class="main-section text-center d-flex justify-content-center align-items-center">
        <div class="background-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-links">
                        <div class="title">
                            <h2>Contact</h2>
                        </div>
                        <div class="links">
                            <ul class="d-flex justify-content-center align-items-center">
                                <li>Home</li>
                                <li><span><i class="fas fa-chevron-right"></i></span>
                                    <span>Contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Contact-section-end-->
    <!--Get-in-touch-start-->
    <section class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-heading text-center">
                        <div class="heading">
                            <div class="solid-line"></div>
                            <h5>Contact Us</h5>
                        </div>
                        <div class="sub-title">
                            <h2>Get In Touch With Us</h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three-wrapper text-center ">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <div class="box">
                            <div class="box-icon">
                                <span class="circle"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="content">
                                <h3> Location</h3>
                                <p>
                                    Yashwant education society,kolhapur
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  col-lg-6 col-xl-4">
                        <div class="middle-box">
                            <div class="box-icon">
                                <span class="circle"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <div class="content">
                                <h3>Give Us A Call</h3>
                                <p>
                                    (+62)81 157 2241 / (+62)81 157 3341
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  col-lg-6 col-xl-4">
                        <div class="box">
                            <div class="box-icon">
                                <span class="circle"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="content">
                                <h3>Email Us </h3>
                                <p>
                                    support@domain.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Get-in-touch-end-->
    <!--Map-section-start-->
    <section class="main-block">
        <div class="container">
            <div class="for-shadow">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="for-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122283.81527032694!2d74.0953329681784!3d16.7084190426999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1000cdec07a29%3A0xece8ea642952e42f!2sKolhapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1674453423836!5m2!1sen!2sin" width="600" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-form" method="POST">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">Your Message</textarea>
                                </div>
                                <button class="btn ">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Map-section-end-->
    <!-- Footer Component -->
    <footer-component></footer-component>
    <script src="js/jquery.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>