<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$no_sk = $_POST['no_sk'];
// HAPUS
if($module=='detail_sk' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM jadwal WHERE id_jadwal='".$_GET['id_jadwal']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='detail_sk' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE sk_krj SET
				  status_sk='nonaktif'
				  WHERE no_sk = '$no_sk'");
header('location:../../index.php?module=sk_kerja');
}
//Tambah
else if($module=='detail_sk' AND $aksi=='tambah' ){ 
	header('location:../../index.php?module='.$module);
$sql = "INSERT INTO jadwal  (id_jadwal, nip, id_shift, tanggal) VALUES (null,'$nip','$id_shift','$tanggal')";
$simpan = mysql_query($sql);
}
else if($module=='detail_sk' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
else if($module=='detail_sk' AND $aksi=='tampil' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>