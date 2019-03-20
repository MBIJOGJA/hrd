<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_jadwal = $_POST['id_jadwal'];
$nip = $_POST['nip'];
$id_shift = $_POST['shift'];
$tanggal = $_POST['tanggal'];
// HAPUS
if($module=='jadwal' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM jadwal WHERE id_jadwal='".$_GET['id_jadwal']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='jadwal' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE jadwal SET
				  nip = '$nip',
				  id_shift='$id_shift',
				  tanggal='$tanggal'
				  WHERE id_jadwal = '$id_jadwal'");
header('location:../../index.php?module='.$module);
}
//Tambah
else if($module=='jadwal' AND $aksi=='tambah' ){ 
	header('location:../../index.php?module='.$module);
$sql = "INSERT INTO jadwal  (id_jadwal, nip, id_shift, tanggal) VALUES (null,'$nip','$id_shift','$tanggal')";
$simpan = mysql_query($sql);
}
else if($module=='jadwal' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>