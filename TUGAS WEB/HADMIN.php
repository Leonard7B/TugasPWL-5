<?php
include ("KONEK.php");
$id = $_GET['id'];
$hapus=mysqli_query($konek,"DELETE FROM admin WHERE id='$id'") or die (mysqli_error());
if($hapus) {
	header("Location:INDEX.php?z=ADMIN");
}