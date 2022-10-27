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
		<h2 align="center" style="margin-top: 0px">Daftar Keluarga Budi</h2>
			<div class="card mt-4" style="margin-bottom: 20px">
			  <div class="card-header bg-info" style="color: white">
			   <h5>Data Keluarga Budi</h5>
			  </div>
			  <div class="card-body">
			  	<a href="add.php" class="btn btn-md btn-success" style="margin-bottom:10px "> Tambah data</a>
				<table width="100%" border="2" cellspacing="0" cellpadding="0">
					<tr bgcolor="#08b5f5" align="center">
						<th>No</th>
						<th>Nama </th>
						<th>Jenis Kelamin</th>
						<th>Status</th>
						<th>Orang Tua</th>

						<th>Aksi</th>
					</tr>
					<?php  
						include('dbconnect.php');
						$tampil=mysqli_query($conn,"SELECT *FROM budi");
						$no=1;
						while($data=mysqli_fetch_array($tampil))
						{
					?>
						<tr align="center">
							<td><?php echo $no; ?></td>
							<td><?php echo $data[1]; ?></td>
							<td>
							<?php echo $data[2]; ?>
							</td>
							<td><?php echo $data[3]; ?></td>
							<td><?php echo $data[4]; ?></td>
							<td>
								<a href="update.php?id_edit=<?php echo $data['id']?>" class="btn btn-primary"> 
								Update
								</a> 
								|
								<a href="delete.php?id_hapus=<?php echo $data['id']?>" class="btn btn-danger" 
								onclick="return confirm('Yakin Hapus Data? ')">
								Delete
								</a>
							</td>
							
						</tr>
					<?php
					$no++;
						}
					?>
				</table>
				<br>

		</div>

		<!-- Close Container -->





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>