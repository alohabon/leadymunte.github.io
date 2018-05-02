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
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
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
                <a class="nav-link py-3 px-0 px-lg-3" href="<?php echo base_url('index.php/booking')?>">Booking</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown my-2 my-lg-0 navbar-nav">
                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3" data-toggle="dropdown"><img class="Profile" src="<?php echo base_url('assets/Home/img\user (1).png') ?>"></a>
                <div class="dropdown-menu dr">
                  <a class="dropdown-item t" href="3">Edit Profile</a>
                  <a class="dropdown-item t" href="#">Notification</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item t" onclick="myFunction()" href="#">Log Out</a>
                </div>
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
    <div class="container" style="margin-top: 20px;padding-left: 25px">
      <div class="container" style="margin-top: 20px">
        <div class="col-md-12">
          <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th> No.Penerbangan </th>
                <th> Nama Maskapai </th>
                <th> Tanggal Keberangkatan </th>
                <th> Jam Keberangkatan </th>
                <th> <center>Action</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($hasil as $hsl) {
              ?>
              <tr>
                <td><?php echo $hsl->id_penerbangan;?></td>
                <td><?php echo $hsl->nama_pesawat; ?></td>
                <td><?php echo $hsl->tanggal; ?></td>
                <td><?php echo $hsl->jamberangkat; ?></td>     
                <!-- <td style="text-align: center;">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php //echo $mhs->nim ?>"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php  //echo $mhs->nim  ?>"><i class="glyphicon glyphicon-trash"></i></button>
                </td> -->
              </tr>
              <?php } ?>   
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <section class="bg-secondary">
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  </body>
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