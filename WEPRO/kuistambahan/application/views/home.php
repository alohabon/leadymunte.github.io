<!DOCTYPE html>
<html>
<head>
	<title>Agnes Leady Octaviana | 1301160063</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url() ?>index.php/home/">Barang</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url() ?>index.php/home/penjualan">Penjualan</a>
	      </li>
	    </ul>
	  </div>
	</div>
	</nav>

	<br><br>

	<div class="container">
		<h1>Kelola Barang</h1>
		<br>
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Barang</a>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="<?= base_url() ?>index.php/home/tambah_barang">
	        	  <div class="form-group">
				    <label>Kode Barang</label>
				    <input type="text" class="form-control" placeholder="Masukkan kode barang" name="kbarang">
				  </div>
				  <div class="form-group">
				    <label>Nama Barang</label>
				    <input type="text" class="form-control" placeholder="Masukkan nama barang" name="nbarang">
				  </div>
				  <div class="form-group">
				    <label>Harga</label>
				    <input type="number" class="form-control" placeholder="Masukkan harga barang" name="harga">
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Tambah Sekarang</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>


		<hr>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach($barang->result() as $b){
				?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $b->kbarang ?></td>
					<td><?= $b->nbarang ?></td>
					<td>Rp <?= $b->harga ?></td>
					<td>
						<div class="btn-group">
							<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#<?= $b->kbarang ?>exampleModal">Edit</a>
							<a href="<?= base_url() ?>index.php/home/delete_barang/<?= $b->kbarang ?>" class="btn btn-sm btn-danger">Delete</a>
						</div>
					</td>
				</tr>
				<div class="modal fade" id="<?= $b->kbarang ?>exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="POST" action="<?= base_url() ?>index.php/home/edit_barang">
			        	  <div class="form-group">
						    <label>Kode Barang</label>
						    <input type="text" class="form-control" placeholder="Masukkan kode barang" value="<?= $b->kbarang ?>" disabled>
						    <input type="hidden" value="<?= $b->kbarang ?>" name="kbarang">
						  </div>
						  <div class="form-group">
						    <label>Nama Barang</label>
						    <input type="text" class="form-control" placeholder="Masukkan nama barang" value="<?= $b->nbarang ?>" name="nbarang">
						  </div>
						  <div class="form-group">
						    <label>Harga</label>
						    <input type="number" class="form-control" placeholder="Masukkan harga barang" value="<?= $b->harga ?>" name="harga">
						  </div>
						  <button type="submit" class="btn btn-primary btn-block">Edit Sekarang</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
