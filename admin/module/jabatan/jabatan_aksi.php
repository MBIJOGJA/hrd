<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id = $_POST['id_jabatan'];
$jabatan = $_POST['nm_jabatan'];
// HAPUS
if($module=='jabatan' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM jabatan WHERE id_jabatan='".$_GET['id_jabatan']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='jabatan' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE jabatan SET
				  nm_jabatan = '$jabatan'
				  WHERE id_jabatan = '$id'");
if($query)
{ 
echo " <script>alert('Update Data Jabatan Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=jabatan'; </script>";
}
	else{
		echo " <script>alert('Update Data Jabatan Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=jabatan'; </script>";

}
}
//Tambah
else if($module=='jabatan' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO jabatan  (id_jabatan, nm_jabatan) VALUES ('$id', '$jabatan')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Jabatan Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=jabatan'; </script>";
}
	else{
		echo " <script>alert('Input Data Jabatan Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=jabatan'; </script>";

}
}
else if($module=='jabatan' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>