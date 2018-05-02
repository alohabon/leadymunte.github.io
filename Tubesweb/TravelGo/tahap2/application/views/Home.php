<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Home/css/jquery.lightbox-0.5.css'); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Home/Home.css'); ?>">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/Home/img/globe (2).png'); ?>">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>TravelGo</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
        <div class="container">
          <!-- Logo Gambar -->
          <a class="navbar-brand" href="<?php echo base_url('index.php/home') ?>">
            <img class="logo" src="<?php echo base_url('assets/Home/img/globe.png') ?>">
            <strong><span style="color: white; font-size: 24px;">TravelGo</span></strong>
          </a>
          <!-- tombol toggle -->
          <button class="navbar-toggler navbar-toggler-right text-uppercase bg-white text-secondary rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
          </button>
          <!-- List Menu navigasi header -->
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
              <li class="nav-item active mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="<?php echo base_url('index.php/home')?>">Home</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="<?php echo base_url('index.php/bookingb')?>">Booking</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto" id="login-btn">
              <li class="nav-item  my-2 my-lg-0 ">
                <a class="nav-link  py-3 px-0 px-lg-3" data-toggle="modal" href="#myModal" style="color: white; border: none;" ><img class="Profile" src="<?php echo base_url('assets/Home/img\user (1).png')?>" >Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- silde show --> 
      <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="gambar" src="<?php echo base_url('assets/Home/img\Bavaria - German.jpg')?>" alt="first slide">
              <div class="carousel-caption">
                <h1>Welcome to TravelGo</h1>
                <p>Tour & travel</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="gambar" src="<?php echo base_url('assets/Home/img\Queenstown_in_Winter-2.jpg')?>" alt="second slide">
              <div class="carousel-caption">
                <h5>GO WHERE YOU WANNA GO</h5>
                <strong><h1>QUICK RESPONSE</h1></strong>
              </div>
            </div>
            <div class="carousel-item">
              <img class="gambar" src="<?php echo base_url('assets/Home/img\Algarve-portugal.jpg')?>" alt="third slide">
              <div class="carousel-caption">
                <h1>Welcome to TravelGo</h1>
                <p>Tour & travel</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <!-- Destinasi terbaik -->
      <section class="bg">
      <div class="container">
        <h2 class="d-flex justify-content-center destination">Popular Destination</h2>
        <div class="outline"></div>
        <div class="item" id="gallery" >
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img/about-3.jpg')?>">
                <img src="<?php echo base_url('assets/Home/img/about-3.jpg')?>" class="img" title="Hawai">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">Hawai</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img\Czech.jpg')?>">
                <img src="<?php echo base_url('assets/Home/img\Czech.jpg')?>" class="img" title="Czech">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">Czech</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img/Hanoi-the-huc-bridge.jpg')?>">
                  <img src="<?php echo base_url('assets/Home/img/Hanoi-the-huc-bridge.jpg')?>" class="img" title="Hanoi">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">Hanoi</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img/rome.jpg')?>">
                  <img src="<?php echo base_url('assets/Home/img/rome.jpg')?>" class="img" title="Rome">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">Rome</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img/London.jpg')?>">
                  <img src="<?php echo base_url('assets/Home/img/London.jpg')?>" class="img" title="London">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">London</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <a href="<?php echo base_url('assets/Home/img/Athens_greece-1000x562.jpg')?>">
                <img src="<?php echo base_url('assets/Home/img/Athens_greece-1000x562.jpg')?>" class="img" title="Athens">
                </a>
              </div>
              <div class="sub-title">
                <h4 class="country">Athens</h4>
                <p class="price"> $100 / Person</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Web -->
    <section class="about" id="about">
      <div class="container">
        <div style="padding-top: 70px;">            
          <h2>About Us</h2>
        </div>
        <div class="line"></div>
        <div class="row">
          <div class="col-lg-6">
            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div class="collapse desc" id="demo">Duis aute irure cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <button type="button" class="btn read" data-toggle="collapse" data-target="#demo">READ MORE</button>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <div class="img-1">
              <img class="foto-1 img-responsive" src="<?php echo base_url('assets/Home/img\about-3.jpg')?>">
            </div>
            <div>
              <img class="foto img-responsive" src="<?php echo base_url('assets/Home/img\Testimonials.jpg')?>">
            </div>
          </div>
        </div>          
      </div>
    </section>
    <!-- footer -->
    <section class="bg-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3" align="center">
              <img class="logo-1 img-responsive" src="<?php echo base_url('assets/Home/img\globe.png') ?>"> 
            </div>
            <div class="col-md-3 col-md-2 col-xs-4">
              <ul class="order">
                <li>
                  <a href="#">Site Map</a>
                </li>
                <li>
                  <a href="#">Terms & conditions</a>
                </li>
                <li>
                  <a href="#">Privacy & Policy</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Affliate</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-md-2 col-xs-4">
              <ul class="order">
                <li>
                  <a href="#">Our Location</a>
                </li>
                <li>
                  <a href="">Career</a>
                </li>
                <li>
                  <a href="#about">About Us</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-md-2 col-xs-4">
              <ul class="order">
                <li>
                  <a href="#">Faqs</a>
                </li>
                <li>
                  <a href="#">News</a>
                </li>
                <li>
                  <a href="#">Photo & Video</a>
                </li>
                <li>
                  <a href="#">Gift Card</a>
                </li>
                <li>
                  <a href="#">Ticket</a>
                </li>
              </ul>
            </div>
            <div class="line-1"></div>
            <div class="fot col-md-6 col-md-4 col-xs-4">
              Copyright © 2017 by TravelGO.
            </div>
            <div class="col-md-6  col-md-4 col-xs-4" align="right">
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Home/img\paypal.png')?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Home/img\visa.png')?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Home/img\master-card.png')?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Home/img\discover.png')?>">
              </a>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Log In to TravelGo</h4>    
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="<?php echo $action ?>">
              <div class="form-group">
                <input type="text" class="form-control" id="inputUser" name="email" placeholder="Email or Username" required>
                </div>
              <div class="form-group">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
              </div>
              <div class="checkbox">
                <label class="lupa"><input type="checkbox"> Remember me. <a class="lupa" style="color: blue;" href="#">forgot password ?</a></label>
                <div>
                  <center><button type="submit" class="btn btn-primary bg-secondary text-white"  id="loginbtn">Login</button></center>  
                </div>      
              </div>
              <div align="center">
                <div class="garisfooter"></div>
                Don't have an account? <a href="<?php echo base_url('index.php/signup')?>">Sign up »</a> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/Home/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/Home/js/jquery.lightbox-0.5.min.js')?>"></script>
  </body>
  <script type="text/javascript">
      $(function() {
        $('#gallery a').lightBox();
      });
      /*$(document).ready(function (){ 
        $("#loginbtn").click(function(){
          stat = false;
          $.getJSON("DataLogin.json", function(result){
            $.each(result, function(i, field){
              $.each(this, function(indeks, data){
                if($("#inputUser").val() == data.user && $("#inputPassword").val() == data.password){
                  stat =true;
                }
              });
              if (stat == true){
                window.location.href = "file:///F:/Project/Tubes%20Webpro/2.0/Home/homelogin.html";
              } else{
                alert("Sorry Username and Password doesn't match.");
              }
            });
          });
        });
      });*/
    </script>
</html>