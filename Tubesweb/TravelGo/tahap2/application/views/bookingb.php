<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Pesan/booking.css'); ?>">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/Home/img\globe (2).png'); ?>">
    <title>Booking</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url('index.php/home') ?>">
            <img class="logo" src="<?php echo base_url('assets/Home/img\globe.png') ?>">
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
              <img class="gambar" src="<?php echo base_url('assets/Pesan/1.png') ?>" alt="first slide">
            </div>
            <div class="carousel-item">
              <img class="gambar" src="<?php echo base_url('assets/Pesan/3.png') ?>" alt="second slide">
            </div>
            <div class="carousel-item">
              <img class="gambar" src="<?php echo base_url('assets/Pesan/2.png') ?>" alt="third slide">
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
    <section class="pesan">
      <div class="container bg-white bg-pesan">
        <form method="POST" action="" id="pesan">
          <div class="container">
          <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                  From
                  <input type="text" class="form-control" name="asal"> 
                </div>
                <div class="form-group">
                  Departure
                  <input type="date" class="form-control" name="tanggal_berangkat"> 
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  To
                  <input type="text" class="form-control" name="tujuan">
                </div>
                <div class="form-group">
                  <input type="checkbox" id="return" onclick="mMuncul()"> Return
                  <input type="date" class="form-control" id="tgl" style="display: none;" name="tanggal_kembali">
                </div>   
            </div>
            <div class="col-md-6">
              <div class="form-group">
                Passengers
                <div>
                  <select class="form-control selectt">
                    <option>No. of Passengers :</option>
                      <option> 1 Person </option>
                      <option> 2 Person </option>
                      <option> 3 Person </option>
                      <option> 4 Person </option>
                      <option> 5 Person </option>
                  </select>
                </div>
              </div>
              <div>
                <button type="submit" class="btn text-white" name="submit"> Search </button>
              </div> 
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  
  <?php 
      if (isset($_POST['submit'])) { 
        echo "<script>alert('Please login first')</script>";
      } 
  ?>
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
            <h4 class="modal-title">Log In to TravelGo</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>    
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    function myFunction() {
        if (confirm("Are you sure for Log Out?")) {
            window.location = "file:///F:/Project/Tubes%20Webpro/2.0/Home/Home.html";
        } else {
            window.location = "file:///F:/Project/Tubes%20Webpro/2.0/Pesan/booking.html"
        }
    }
    function mMuncul() {
    var checkBox = document.getElementById("return");
    var pulang = document.getElementById("tgl");
      if (checkBox.checked == true){
          pulang.style.display = "block";
      } else {
         pulang.style.display = "none";
      }
    }
  </script>
</html>