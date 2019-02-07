<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];
$id_jadwal=$_POST['id_jadwal'];
$tanggal = $_POST['tanggal'];
$nip = $_POST['nip'];
$keterangan = $_POST['keterangan'];
$id_jadwal=$_POST['id_jadwal'];
// HAPUS
if($module=='input_ijin' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM jadwal WHERE id_jadwal='".$_GET['id_jadwal']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='input_ijin' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE jadwal SET
				  nip = '$nip',
				  id_shift='$id_shift',
				  tanggal='$tanggal'
				  WHERE id_jadwal = '$id_jadwal'");
// header('location:../../index.php?module='.$module);
if($query){
echo " <script>alert('Update Ijin Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=input_ijin'; </script>";
}
	else{
		echo " <script>alert('Update Ijin Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=input_ijin'; </script>";

}
}
//Tambah
else if($module=='input_ijin' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
		$query = mysql_query("UPDATE jadwal SET
				  keterangan='$keterangan'
				  WHERE id_jadwal='$id_jadwal'");
if($query)
{ 
echo " <script>alert('Input Data Ijin Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=input_ijin'; </script>";
}
	else{
		echo " <script>alert('Input Data Ijin Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=input_ijin'; </script>";


}
	
	}
else if($module=='jadwal' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>