<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];
$no_sk = $_POST['no_sk'];
$nip = $_POST['nip'];
$id_jabatan = $_POST['jabatan'];
$id_unit_krj=$_POST['unit_kerja'];
$id_status_pegawai = $_POST['status_pegawai'];
$tgl_sk = $_POST['tgl_sk'];
$tgl_selesai = $_POST['tgl_selesai'];
$status_sk=$_POST['status_sk'];
// HAPUS
if($module=='tambah_sk' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM sk_krj WHERE no_sk='".$_GET['no_sk']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='tambah_sk' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE sk_krj SET
				  		nip='$nip',
				  		tgl_sk='$tgl_sk',
				  		tgl_selesai='$tgl_selesai',
				  		id_jabatan='$id_jabatan',
				  		id_unit_krj='$id_unit_krj',
				  		id_status_pegawai='$id_status_pegawai',
				  		status_sk='$status_sk'
				  WHERE no_sk = '$no_sk'");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Update Data SK Kerja Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=tambah_sk'; </script>";
}
	else{
		echo " <script>alert('Update Data SK Kerja Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=tambah_sk'; </script>";

}
}
//Tambah
else if($module=='tambah_sk' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO sk_krj (no_sk,nip,tgl_sk,tgl_selesai,id_jabatan,id_unit_krj,id_status_pegawai,status_sk,jenis_sk) VALUES ('$no_sk','$nip','$tgl_sk','$tgl_selesai','$id_jabatan','$id_unit_krj','$id_status_pegawai','aktif','SK')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data SK Kerja Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=tambah_sk'; </script>";
}
	else{
		echo " <script>alert('Input Data SK Kerja Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=tambah_sk'; </script>";

}
}
else if($module=='tambah_sk' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>