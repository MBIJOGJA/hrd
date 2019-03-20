<?php
error_reporting(0);
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_pengambilan_cuti = $_POST['id_pengambilan_cuti'];
$id_cuti = $_POST['id_cuti'];
$tgl_cuti=$_POST['tgl_cuti'];
$jml_cuti=$_POST['jml_cuti'];
$alasan=$_POST['alasan'];

if($module=='pengambilan_cuti' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM pengambilan_cuti WHERE id_pengambilan_cuti='".$_GET['id_pengambilan_cuti']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
//Tambah
else if($module=='pengambilan_cuti' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO `pengambilan_cuti` (`id_pengambilan_cuti`, `id_cuti`, `tgl_cuti`, `jml_cuti`, `flag_hrd`, `alasan`) VALUES (NULL, '$id_cuti', '$tgl_cuti', '$jml_cuti', 'N','$alasan');";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Pengambilan Cuti Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=pengambilan_cuti'; </script>";
}
	else{
		echo " <script>alert('Input Data Pengambilan Cuti Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=pengambilan_cuti'; </script>";

}
}
else if($module=='pengambilan_cuti' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE pengambilan_cuti SET
				  id_cuti='$id_cuti',
				  tgl_cuti = '$tgl_cuti',
				  jml_cuti='$jml_cuti',
				  alasan='$alasan'
				  WHERE id_pengambilan_cuti = '$id_pengambilan_cuti'");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Update Data Pengambilan Cuti Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=pengambilan_cuti'; </script>";
}
	else{
		echo " <script>alert('Update Data Pengambilan Cuti Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=pengambilan_cuti'; </script>";

}
}
else if($module=='pengambilan_cuti' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}

?>