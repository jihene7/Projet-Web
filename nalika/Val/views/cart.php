<?php

require_once "../core/CartC.php";
 $IPADD=my_simple_crypt(getRealIpUser(), "e");
 $Cart1C=new CartC();
 $count=$Cart1C->countCart($IPADD);
 foreach($count as $row){$C=$row['count'];}
 $result =$Cart1C->displayIPCarts();
 $count=0;
?>
<!DOCTYPE html>
<html lang="en">


   <head>
    <title>carte</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 phone pl-md-2">
              <a href="#" class="mr-2"><span </span> </a> 
              <a href="#"><span ></span></a>
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-md-end">
            <div class="social-media mr-4">
              <p class="mb-0 d-flex">
                
                <a href="#" class="d-flex align-items-center justify-content-center"><span ><i class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span><i class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span ><i class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span ><i class="sr-only">Dribbble</i></span></a>
              </p>
            </div>
            <div class="reg">
                
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
         <a class="navbar-brand" href="index.html"><img  class ="e" src="images/log.jpg" alt="logo"> Gaming <span>Legends </span></a>
   
        
            
          </a>
         
        </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="http://localhost/nalika/store/index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="http://localhost/nalika/store/about.html" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="http://localhost/nalika/store/afficherProduits2.php">liste des produits</a>
          <li class="nav-item"><a href="http://localhost/nalika/store/contact.html" class="nav-link">Contact</a></li>
         <li class="nav-item"><a href="http://localhost/nalika/store/afficherannonce.php" class="nav-link">Annonce</a></li>
        <li class="nav-item"><a href="http://localhost/nalika/store/seif/views/afficherEmploye.php" class="nav-link">Clients</a></li>
        <li class="nav-item"><a href="http://localhost/nalika/store/afficherevenement.php" class="nav-link">Events</a></li>
         <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shopping</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="http://localhost/nalika/Val/views/shop.php">Shop</a>
                <a class="dropdown-item" href="http://localhost/nalika/Val/views/cart.php">Carte</a>
              </div>
        
            </li>
           
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span> carte<i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">carte</h2>
          </div>
        </div>
      </div>
    </section>

  <body align="center">
        <?php include_once "header.php"; ?>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                           
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                          foreach($result as $row)
                          {
                            $tmpIP=$row['ADD_IP'];

                             echo '
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/cart1.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>White Modern PC</h5>
                                        </td>
                                        <td class="price">
                                            <span>'.$row['Prix'].'</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <p class="qty-text">'.$row['Qty'].'</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                        <form method="POST" action="deleteCosCart.php">
                                    <button type="submit" class="btn btn-dark" s>Delete</button>
                                    
                                    <input type="hidden" value="'.$row['ADD_IP'].'" name="deleteIP">
                                    <input type="hidden" value="'.$row['id_produit'].'" name="deletePID"> 
                                    </form>
                                    </td>
                                    <td>
                                    <form method="POST" action="update_Cart.php">
                                    <button type="submit" name="update" class="btn btn-dark" >Update</button>
                    
                                    <input type="hidden" value="'.$row['ADD_IP'].'" name="updateIP">
                                    <input type="hidden" value="'.$row['id_produit'].'" name="updatePID">
                                    </form>
                                    </td>
                                    </tr>';
                                }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
    <style type="text/css">
  
.e{
height: 80px;
border-radius: 30%;
width:100px;

}

#searchbar{position:relative; width:900px; height:auto;}
.formulaire               {display:inline-block;}
.formulaire .champ       {width:400px; height:35px;  }
.formulaire .bout       {  width: 35px;height: 35px;padding: 0; }
  body {
   background-color: #0d1523;
   color:   #0d1523;
  /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

  
  } 
 
  #box1
{
width: 45%;
 position: relative; 
   top: 20px; 
   left: 20px; 
  background-color: rgba(255,255,255,0.6);
  border: 6px solid grey ;

}
#box1:hover
{ color: #ff8000;
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
  background: rgba(255,255,255,0.9);
  box-shadow: 0px 0px 10px #fff;

}


.f{

   color: #cc6600;
}
  .button{
    background:url(img/button.gif);
    display:block;
    color:#fff;
    font-weight:bold;
    height:30px;
    line-height:29px;
    margin-bottom:14px;
    text-decoration:none;
    width:170px;
      clear:left;
      position: relative;
      text-decoration:none;
  }

  .button:hover{
    color:#fff;}

div#si{font-family: Verdana, sans-serif;
   font-weight:bold;
 width:191px;
padding: 10px;
 height:30px;
float: right;
color : #a23f25;
  line-height:29px;
    margin-bottom:14px;
    text-decoration:none;
    top: 20px;

  }

 .bo{

color:   #a23f25;
font-family: Verdana, sans-serif;
font-weight:bold;
 margin-bottom:14px;
  line-height:29px;
 
 text-decoration:none;

 
  
  }
.b{vertical-align: middle;
 border-width:2px;
 border-style:dashed;
 border-color:white;
 border-width: 3px
;
text-align: center;
 width:350px;
  margin-left: auto;
    margin-right: auto;
   
  
}
</style>
  <!-- use sasu part end-->
        <section class="upcomming_war">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                           
                        </div>
                    </div>
                </div>
                <div class="upcomming_war_iner">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-10 col-sm-5 col-lg-3">
                            <div class="upcomming_war_counter text-center">
                                
                                <div id="timer" class="d-flex justify-content-between">
                                    <div id=""></div>
                                    <div id=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            <br>
          <br>
        <br>
      <br>
    </section>
        <!--::footer_part start::-->
       
     <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Gaming <span>Legends</span></a></h2>
              <p>Go far with gaming</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2"></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                <li><a href="afficherProduits2.php"><span class="fa fa-chevron-right mr-2"></span>Produits</a></li>
                <li><a href="contact.html"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"></h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon fa fa-map marker"></span><span class="text">Sfax 2.rue Farhat Hached</span></li>
                  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+216 95 00 00 01</span></a></li>
                  <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">gamingLegends@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
    
              <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  
<style type="text/css"></style>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>