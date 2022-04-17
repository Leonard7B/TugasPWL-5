<?php
include("KONEK.php");
$nama_mahasiswa= $_POST['txtMahasiswa'];
$alamat= $_POST['txtAlamat'];
$jenis_kelamin= $_POST['kelamin'];
$agama= $_POST['txtAgama'];
$sekolah_asal= $_POST['txtSekolah'];
$simpan= mysqli_query($konek,"INSERT into mahasiswa(nama, alamat, jenis_kelamin, agama, sekolah_asal)
	values('$nama','$alamat','$jenis_kelamin','$agama', '$sekolah_asal')") or die (mysqli_error());
if ($simpan) {
	header("Location:INDEX.php?z=MAHASISWA");
}