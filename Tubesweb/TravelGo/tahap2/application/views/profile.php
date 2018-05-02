<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Profile/profile.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Profile/globe.png'); ?>">
    <title>Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="#page-top">
            <img class="logo" src="<?php echo base_url('assets/Profile\globe.png') ?>">
          </a>
          <!-- tombol toggle -->
          <button class="navbar-toggler navbar-toggler-right text-uppercase bg-white text-secondary rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
          </button>
          <!-- List Menu navigasi header -->
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
              <li class="nav-item active mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="<?php echo base_url('index.php/homelogin')?>">Home</a>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3" href="<?php echo base_url('index.php/booking')?>">Booking</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown my-2 my-lg-0 navbar-nav">
                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3" data-toggle="dropdown"><img class="Profile" src="<?php echo base_url('assets/Profile/img\user (1).png') ?>"><span style="color: white;"><?php echo $this->session->userdata("email"); ?></span></a>
                <div class="dropdown-menu dr">
                  <a class="dropdown-item t" href="<?php echo base_url('index.php/profile')?>">Edit Profile</a>
                  <a class="dropdown-item t" href="#">Notification</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item t" href="<?php echo base_url('index.php/Home')?>" onclick="myFunction()">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="kiri">
              <div class="tfoto">
                <center>
                  <img src="<?php echo base_url('assets/Profile\fprof.png') ?>" class="foto">
                  <p class="nfoto efoto">Angela Hutson</p>
                </center>
              </div>
            <div class="ti">
                <button class="tablinks tab" onclick="openTab(event, 'Prof')" id="defaultOpen">Edit Profile</button>
                <button class="tablinks tab" onclick="openTab(event, 'Purch')">Purchase List</button>
                <button class="tablinks tab" onclick="openTab(event, 'Book')">My Booking</button>
                <button class="tab" onclick="myFunction()">Log Out</button>
                <a href="#"  id="demo"></a>
            </div>
        </div>
        <div id="Prof" class="tprofile">
          <!-- <form>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div>
                  Full Name
                  <input type="fullname" class="form-control" id="exampleInputFullname1">
                  </div>
                  <div>
                    Email
                    <input type="email" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div>
                    Old Password
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div>
                    New Password
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div>
                    Confirm Password
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div>
                    Phone Number
                    <input type="phone" class="form-control" id="exampleInputPhone1">
                  </div>
                  <div align="right">
                    <div class="btn">
                      <button typ e="button" class="btnC">Cancel</button>
                      <button type="button" class="btnS">Save</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
          </form> -->
            <form  class="eprofil" method="POST" action="<?php echo $action ?>">
              <table>
                <tr>
                  <td class="he">Full Name</td>
                </tr><br>
                <tr>
                  <td><input type="fullname" name="fname" class="form-control" id="exampleInputFullname1"></td>
                </tr>
                <tr><td class="note">As appears on identity card (without punctuation mark)</td></tr>
                <tr>
                  <td class="he">Email</td>
                </tr>
                <tr>
                  <td><input type="email" name="email" class="form-control" id="exampleInputEmail1"></td>
                </tr>
                <tr>
                  <td class="he">Old Password</td>
                </tr>
                <tr>
                  <td><input type="password" class="form-control" id="exampleInputPassword1"></td>
                </tr>
                <tr>
                  <td class="he">New Password</td>
                </tr>
                <tr>
                  <td><input type="password" name="password" class="form-control" id="exampleInputPassword1"></td>
                </tr>
                <tr>
                  <td class="he">Confirm Password</td>
                </tr>
                <tr>
                  <td><input type="password" name="cpassword" class="form-control" id="exampleInputPassword1"></td>
                </tr>
                <tr><td class="note">Please enter a password you have not used in any other sites</td></tr>
                <tr>
                  <td class="he">Phone Number</td>
                </tr>
                <tr>
                  <td><input type="phone" name="pnumber" class="form-control" id="exampleInputPhone1"></td>
                </tr>
                <tr align="right">
                  <td class="btn">
                    <button type="button" class="btnC">Cancel</button>
                  </td>
                  <td class="btn">
                    <button type="submit" class="btnS">Save</button>
                  </td>
                </tr>
              </table>
            </form>
        </div>
        <div id="Book" class="tprofile tambahan">
            <div class="eprofil">
              <h3 class="jud">Booking History</h3>
              <table class="mybooking">
                <thead>
                  <tr class="tt">
                    <th class="thh">No</th>
                    <th class="thh">Transaction ID</th>
                    <th class="thh">Email</th>
                    <th class="thh">Kota</th>
                    <th class="thh">Jadwal</th>
                    <th class="thh">Harga</th>
                    <th class="thh">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($transaksi as $trx){
                  ?>
                  <tr>
                    <td class="thh"><?php echo $no++;?></td>
                    <td class="thh"><?php echo $trx->id_transaksi?></td>
                    <td class="thh"><?php echo $trx->email?></td>
                    <td class="thh"><?php echo $trx->id_kota?></td>
                    <td class="thh"><?php echo $trx->id_jadwal?></td>
                    <td class="thh"><?php echo $trx->harga?></td>
                    <td class="thh"><?php echo $trx->status?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- <div align="right">
                  <div class="btn">
                    <button type="button" class="btnRe">Delete</button>
                  </div>
              </div> -->
            </div>
        </div>
      </div>
    <section class="bg-secondary padf">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3" align="center">
              <img class="logo-1 img-responsive" src="<?php echo base_url('assets/Profile\globe.png') ?>"> 
            </div>
            <div class="col-md-3">
              <ul class="order">
                <li>
                  <a href="">Site Map</a>
                </li>
                <li>
                  <a href="">Terms & conditions</a>
                </li>
                <li>
                  <a href="">Privacy & Policy</a>
                </li>
                <li>
                  <a href="">Help</a>
                </li>
                <li>
                  <a href="">Affliate</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="order">
                <li>
                  <a href="">Our Location</a>
                </li>
                <li>
                  <a href="">Career</a>
                </li>
                <li>
                  <a href="#about">About Us</a>
                </li>
                <li>
                  <a href="">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="order">
                <li>
                  <a href="">Faqs</a>
                </li>
                <li>
                  <a href="">News</a>
                </li>
                <li>
                  <a href="">Photo & Video</a>
                </li>
                <li>
                  <a href="">Gift Card</a>
                </li>
                <li>
                  <a href="">Ticket</a>
                </li>
              </ul>
            </div>
            <div class="line-1"></div>
            <div class="fot col-md-6 col-md-4 col-xs-4">
              Copyright © 2017 by TravelGO.
            </div>
            <div class="col-md-6  col-md-4 col-xs-4" align="right">
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Profile/img\paypal.png') ?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Profile/img\visa.png') ?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Profile/img\master-card.png') ?>">
              </a>
              <a href="#">
                <img class="pay" src="<?php echo base_url('assets/Profile/img\discover.png') ?>">
              </a>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <script>
    function myFunction() {
        if (confirm("Are you sure for Log Out?")) {
            window.location = "file:///F:/Project/Tubes%20Webpro/2.0/Home/Home.html";
        } else {
            window.location = "file:///F:/Project/Tubes%20Webpro/2.0/Profile/profile.html" 
        }
        document.getElementById("demo").innerHTML = window.location;
    }
    </script>

    <script>
      function openTab(evt, tabName) {
          var i, tprofile, tablinks;
          tprofile = document.getElementsByClassName("tprofile");
          for (i = 0; i < tprofile.length; i++) {
              tprofile[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(tabName).style.display = "block";
          evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
 <script src="jquery-1.12.4.min.js"></script>
 <script src="tp2.js"></script>
    <script>
    $(document).ready(function(){
        $.getJSON("myJSON.json",function(data){
            console.log(data);
            var i=0;
            $.each(data.booking, function(i, booking){
                $("#id"+i).html(booking.id);
                $("#maskapai"+i).html(booking.maskapai);
                $("#asal"+i).html(booking.asal);
                $("#tujuan"+i).html(booking.tujuan);
                $("#jadwal"+i).html(booking.jadwal);
                $("#pembayaran"+i).html(booking.pembayaran);
                i++;
                if(i == 4){
                    return false;
                }
            })
        })
    });
    function deleteDt(){
      var x = document.getElementById("")
    }
  </script>
  