<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];
$id_shift = $_POST['id_shift'];
$nama_shift = $_POST['nama_shift'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$flag_aktif = $_POST['flag_aktif'];
// HAPUS
if($module=='shift' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM shift WHERE id_shift='".$_GET['id_shift']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='shift' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE shift SET
				  nama_shift = '$nama_shift',
				  jam_mulai='$jam_mulai',
				  jam_selesai='$jam_selesai',
				  flag_aktif='$flag_aktif'
				  WHERE id_shift = '$id_shift'");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Update Data Shift Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=shift'; </script>";
}
	else{
		echo " <script>alert('Update Data Shift Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=shift'; </script>";

}
}
//Tambah
else if($module=='shift' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO shift  (id_shift, nama_shift, jam_mulai, jam_selesai,flag_aktif) VALUES ('$id_shift', '$nama_shift','$jam_mulai','$jam_selesai','$flag_aktif')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Shift Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=shift'; </script>";
}
	else{
		echo " <script>alert('Input Data Jabatan Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=shift'; </script>";

}
}
else if($module=='shift' AND $aksi=='edit' ){ 
 

	}
?>