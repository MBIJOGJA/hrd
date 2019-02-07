<?php
include '../../koneksi.php';
$module=$_GET['module'];
$aksi=$_GET['aksi'];
$id = $_POST['id_hukuman'];
$hukuman = $_POST['nm_hukuman'];
$tgl = $_POST['tgl_hukuman'];
$nip = $_POST['nip'];
// HAPUS
if($module=='hukuman' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM hukuman WHERE id_hukuman='".$_GET['id_hukuman']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='hukuman' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE hukuman SET
				  tgl_hukuman = '$tgl',
				  nm_hukuman = '$hukuman'
				  WHERE id_hukuman = '$id'");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Update Data Hukuman Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=hukuman'; </script>";
}
	else{
		echo " <script>alert('Update Data Hukuman Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=hukuman'; </script>";

}
}
//Tambah
else if($module=='hukuman' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO hukuman  (id_hukuman,nip,tgl_hukuman, nm_hukuman) VALUES ('$id', '$nip', '$tgl', '$hukuman')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Hukuman Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=hukuman'; </script>";
}
	else{
		echo " <script>alert('Input Data Hukuman Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=hukuman'; </script>";

}
}
?>