<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_status_pegawai = $_POST['id_status_pegawai'];
$status_pegawai = $_POST['status_pegawai'];

if($module=='status_pegawai' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM status_pegawai WHERE id_status_pegawai='".$_GET['id_status_pegawai']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}


else if($module=='status_pegawai' AND $aksi=='edit' ){ 
$sql = "UPDATE status_pegawai SET 
status_pegawai='$status_pegawai'
WHERE id_status_pegawai = '$id_status_pegawai'";
$edit = mysql_query($sql);
if($edit)
{ 
echo " <script>alert('Update Data Status Pegawai Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=status_pegawai'; </script>";
}
	else{
		echo " <script>alert('Update Data Status Pegawai Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=status_pegawai'; </script>";

}
}
//Tambah
else if($module=='status_pegawai' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO status_pegawai  (id_status_pegawai, status_pegawai) VALUES (null, '$status_pegawai')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Status Pegawai Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=status_pegawai'; </script>";
}
	else{
		echo " <script>alert('Input Data Status Pegawai Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=status_pegawai'; </script>";

}
}

?>