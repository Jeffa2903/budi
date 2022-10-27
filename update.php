<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Budi Family</title>

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Righteous&display=swap" rel="stylesheet">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
  </head>
  <body>

	  <!-- Navbar-->
	  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		  <div class="container">
		    <a class="navbar-brand" href="#">Crud Keluarga Budi</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <a class="nav-link"  href="index.php">Home</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<!-- Close Navbar-->


		<!-- Container -->

		<div class="container">
        <?php
				 include('dbconnect.php');
				 $query=mysqli_query($conn,"SELECT * FROM budi WHERE id='$_GET[id_edit]'");
				 $data=mysqli_fetch_assoc($query);
			?>
		<form method="POST" action="cekupdate.php">
				<div class="card" style="width: 60%;margin: auto; margin-top: 30px;">
				  <div class="card-header" style="background-color: #F0F8FF;">
				    Edit Anggota Keluarga
				  </div>
				  <div class="card-body">
				    <div class="mb-3">
						  <label for="nama" class="form-label">Nama</label>
						  <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'] ?>">
						</div>
						<div class="mb-3">
						  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
						  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
						  	<option value="<?=$data['jenis_kelamin'] ?>"><?=$data['jenis_kelamin'] ?></option>
						  	<option value="L"> Laki-Laki </option>
                            <option value="P"> Perempuan </option>
						  </select>
						</div>
						<div class="mb-3">
						  <label for="status" class="form-label">Status</label>
						  <input type="text" class="form-control" id="status" name="status" value="<?=$data['statuss'] ?>">
						</div>
						<div class="mb-3">
						  <label for="orang_tua" class="form-label">Orang Tua</label>
						  <input type="text" class="form-control" id="orang_tua" name="orang_tua" value="<?=$data['ortu'] ?>">
						</div>
						<button type="submit" class="btn btn-primary" name="update" onclick = "Redirect();">Simpan</button>
				  </div>
				</div>
			</form>
		</div>

		<!-- Close Container -->
        
		<?php
			if (isset($_POST['update'])) 
			{

				$nama=$_POST['nama'];
				$jenis_kelamin=$_POST['jenis_kelamin'];
				$status=$_POST['status'];	
				$orang_tua=$_POST['orang_tua'];
			
			 	$query="UPDATE budi SET
				nama='$nama',
				jenis_kelamin='$jenis_kelamin',
				statuss='$status',
				ortu='$orang_tua'		
				WHERE id='$_GET[id_edit]'";		
							
				if ($query) 		
				{
					echo "<script>alert('Data Berhasil DiUpdate');location.replace('index.php');</script>";
				}
			}
		?>
       



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>