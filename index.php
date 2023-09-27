<?php 
$koneksi = mysqli_connect("localhost", "root","","salsa");

 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Beautiflie</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.php">Home</a>
                  <a href="#about-link">About</a>
                  <a href="#product-link">Products</a>
                  <a href="#contact-link">Contact</a>
               </div>

               <a class="logo" href="index.php"><img src="images/logo.png"></a></a>
               
               <div class="search-container">
                  <form action="/action_page.php" method="GET">
                     <div class="form">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control form-input" placeholder="Search anything...">
                      </div>
                  </form>
                </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Salsa <br>Chuaksss</h1>
                           <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                           <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Salsa <br>Chuaksss</h1>
                           <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                           <div class="read_bt"><a href="#product-link">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                           <div class="read_bt"><a href="#product-link">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Beauty <br>Kit</h1>
                           <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                           <div class="read_bt"><a href="#product-link">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_main">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <h1 id="about-link" class="about_taital">About Our beauty sotore</h1>
                        <p class="about_text">labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="images/about-img.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- product section start -->
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-sm-12">
                  <br><br>
                  <h1 id="product-link" class="product_taital">Our Products</h1>
               </div>
            </div>
            <br>
               <div class="row">
                  <div class="col-lg-3">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">Bath & Shower</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                           <a href="Bar-Soap.php"><li class="list-group-item">Bar Soap</li></a>
                           <a href="ShowerGel&Cream.php"><li class="list-group-item">Shower Gel & Cream</li></a>
                           <a href="Bath-Treatment.php"><li class="list-group-item">Bath Treatment</li></a>
                           <a href="Scrub&Exfoliator.php"><li class="list-group-item">Scrub & Exfoliator</li></a>
                        </ul>
                     </div>
                  </div>
                  <!-- Repeat similar structure for other cards -->
                  <div class="col-lg-3">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">Moisturizer</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                           <a href="Butter.php"><li class="list-group-item">Butter</li></a>
                           <a href="Sun-Protection.php"><li class="list-group-item">Sun Protection</li></a>
                           <a href="Self-Tanner.php"><li class="list-group-item">Self Tanner</li></a>
                           <a href="Lotion.php"><li class="list-group-item">Lotion</li></a>
                           <a href="Creams.php"><li class="list-group-item">Creams</li></a>
                           <a href="Oil.php"><li class="list-group-item">Oil</li></a>
                        </ul>
                     </div>
                  </div>
                  <!-- Repeat similar structure for other cards -->
                  <div class="col-lg-3">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">Personal Care</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                           <a href="Body-Powder.php"><li class="list-group-item">Body Powder</li></a>
                           <a href="Deodorants.php"><li class="list-group-item">Deodorants</li></a>
                           <a href="Hair-Removal.php"><li class="list-group-item">Hair Removal</li></a>
                           <a href="Intimate-Care.php"><li class="list-group-item">Intimate Care</li></a>
                           <a href="Treatment.php"><li class="list-group-item">Treatment</li></a>
                        </ul>
                     </div>
                  </div>
                  <!-- Repeat similar structure for other cards -->
                  <div class="col-lg-3">
                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">Hand & Foot</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                           <a href="Foot-Spray.php"><li class="list-group-item">Foot Spray</li></a>
                           <a href="Foot-Scrub.php"><li class="list-group-item">Foot Scrub</li></a>
                           <a href="Foot-Mask.php"><li class="list-group-item">Foot Mask</li></a>
                           <a href="Hand-Soap.php"><li class="list-group-item">Hand Soap</li></a>
                           <a href="Hand-Mask.php"><li class="list-group-item">Hand Mask</li></a>
                           <a href="Hand-Cream.php"><li class="list-group-item">Hand Cream</li></a>
                           <a href="Foot-Cream.php"><li class="list-group-item">Foot Cream</li></a>
                        </ul>
                     </div>
                  </div>
               </div>
         </div>
         <br><br>
  
      <!-- product section end --> 

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <h3 id="contact-link" class="address_text">Contact Us</h3>
                     <div class="address_bt">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Loram Ipusm</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : demo@gmail.com</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="footer_logo_1"><a href="index.php"><img src="images/footer-logo.png"></a></div>
                     <p class="dummy_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="main">
                        <h3 class="address_text">Best Products</h3>
                        <p class="ipsum_text">dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>