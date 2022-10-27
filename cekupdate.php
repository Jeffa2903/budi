<?php

include 'dbconnect.php';

    $nama=$_POST["nama"];
	$jenis_kelamin=$_POST["jenis_kelamin"];
	$status=$_POST["status"];	
	$orang_tua=$_POST["orang_tua"];
    
mysqli_query($conn,"UPDATE 'budi' set 
    nama='$nama', 
    jenis_kelamin='$jenis_kelamin', 
    statuss='$status', 
    ortu='$orang_tua'
WHERE id='$_GET[id_edit]'");

header("location:index.php");

?>
				