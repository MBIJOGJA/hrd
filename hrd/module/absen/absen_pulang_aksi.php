<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_absen = $_POST['id_absen'];
$nip = $_POST['nip'];
$jam= Date("H:i:s"); 
	if(($jam > '07:00:00') && ($jam <'14:00:00'))
		{
			$shift_sekarang='PAGI';
			$shift_id='1';
		}
	else if(($jam > '14:00:00') && ($jam <'23:00:00'))
		{
			$shift_sekarang='SIANG';
			$shift_id='2';
		}
		else{
			$shift_sekarang='MALAM';
			$shift_id='3';
		}

if($module=='absen_pulang' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM absen WHERE id_absen='".$_GET['id_absen']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
//Tambah
else if($module=='absen_pulang' AND $aksi=='tambah' ){ 
	$query = mysql_query("UPDATE `absen` SET `jam_pulang` = now(), `keterangan_pulang`='-' WHERE `absen`.`nip` = '$nip';");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Selamat Jalan Terima kasih');</script> ";
echo " <script>window.location='../../index.php?module=absen_pulang'; </script>";
}
	else{
		echo " <script>alert('Presesnsi Pulang Gagal');</script> ";
		echo " <script>window.location='../../index.php?module=absen_pulang'; </script>";

}
}

?>