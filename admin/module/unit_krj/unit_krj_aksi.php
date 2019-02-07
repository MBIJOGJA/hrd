<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id = $_POST['id_unit_krj'];
$unit_krj = $_POST['nm_unit_krj'];
// HAPUS
if($module=='unit_krj' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM unit_krj WHERE id_unit_krj='".$_GET['id_unit_krj']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='unit_krj' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE unit_krj SET
				  nm_unit_krj = '$unit_krj'
				  WHERE id_unit_krj = '$id'");
if($query)
{ 
echo " <script>alert('Update Data Unit Kerja Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=unit_krj'; </script>";
}
	else{
		echo " <script>alert('Update Data Unit Kerja Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=unit_krj'; </script>";

}
}
//Tambah
else if($module=='unit_krj' AND $aksi=='tambah' ){ 	
$sql = "INSERT INTO unit_krj  (id_unit_krj, nm_unit_krj) VALUES ('$id', '$unit_krj')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Unit Kerja Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=unit_krj'; </script>";
}
	else{
		echo " <script>alert('Input Data Unit Kerja Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=unit_krj'; </script>";

}
}
?>