<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/Sign Up/css/bootstrap.min.css'); ?>">
 	<script src="<?php echo ('assets/Sign Up/js/bootstrap.js'); ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Sign Up/Sign Up.css'); ?>">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/Sign Up/img/globe.png'); ?>">
    <title>TravelGo - Sign Up</title>
  </head>
<body>
	<nav class="navbar navbar-default himg">
		<center>
	     	 	<a class="navbar-brand" href="<?php echo base_url('index.php/home')?>">
	     	 		<img class="logo" src="<?php echo base_url('assets/Sign Up/img/globe.png'); ?>">
	     	 	</a>
	    </center>
	</nav>
	<div class="container">
		<div class="row">
				<div class="col-md-4 tengah">
					<p align="center" class="awal">Sign Up</p>
					<form method="POST" action="<?php echo $action ?>">
						<div class="form-group">
							<input type="fullname" class="form-control" id="exampleInputFullname1" name="nama" placeholder="Full Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword" placeholder="Confirm Password" required>
						</div>
						<div class="form-group">
							<input type="phone" class="form-control" id="exampleInputPhone1" name="phonenumber" placeholder="Phone Number" required>
						</div>					  
						<div class="form-group">
							<center>
								<button type="submit" class="btn">Sign Up</button> 
							</center>
						</div>
					</form>
					<p class="ft" align="center">Have an account ? or <b><a class="ft1" href="<?php echo base_url('index.php/login')?>">Login</a></b></p>
					<p class="ft2" align="center">
						By registering, I agree with Terms & Conditions and Privacy Policy of TravelGo.
					</p>
				</div>
		</div>
	</div>
	<footer>
	<div class="i">
		<div align="center" class="foot">
			<p>Copyright WWW.TRAVELGO.COM ® - All Rights Reserved.</p>
		</div>
	</div>
	</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>