<?php
	include('dbconnect.php');
	$hapus=mysqli_query($conn,"DELETE FROM budi WHERE id='$_GET[id_hapus]'");
	if($hapus)
	{
		header("location:index.php");
	}
	else
	{
		echo "Gagal Menghapus Data";
	}

?>