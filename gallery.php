
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
</head>

<body>
    <!-- Header Component -->
    <header-component></header-component>
    <!--gallery-section-start-->
    <section class="main-section text-center d-flex justify-content-center align-items-center">
        <div class="background-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-links">
                        <div class="title">
                            <h2>our gallery</h2>
                        </div>
                        <div class="links">
                            <ul class="d-flex justify-content-center align-items-center">
                                <li>Home</li>
                                <li><span><i class="fas fa-chevron-right"></i></span>
                                    <span>our gallery</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--gallery-section-end-->
    <!--gallery second section start-->
    <div class="gallery-img">
        <div class="container">
            <div class="row mt-4">
                <?php
                    require 'connect.php';

                    $query = "SELECT * FROM gallery";
                    $query_run = mysqli_query($con,$query);
                    $check_gallery = mysqli_num_rows( $query_run ) > 0;

                    if($check_gallery)
                    {
                        while($row = mysqli_fetch_array($query_run))
                        {
                ?>
                    <div class="gallery">
                       
                        <div class="item col-md-4 mb-1 p-1">
                                <img src="<?php echo  $row['image']; ?>" width="210px" height="120px" alt="gallery image">
                         </div>
                
                    </div>
                <?php
                  
                        }
                    }
                    else{
                        echo "no record found";
                    }
                 ?>
           
            </div>
        
        </div>

    </div>
    <!--gallery second section end-->

    <!-- Footer Component -->
    <footer-component></footer-component>
    <script src="js/jquery.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>