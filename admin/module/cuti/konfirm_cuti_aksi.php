<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_pengambilan_cuti = $_POST['id_pengambilan_cuti'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tgl_cuti = $_POST['tgl_cuti'];
$jml_cuti = $_POST['jml_cuti'];
$sisa_cuti = $_POST['sisa_cuti'];
$alasan = $_POST['alasan'];
$id_cuti=$_POST['id_cuti'];

$cuti_sekarang=$sisa_cuti-$jml_cuti;

// // HAPUS
// if($module=='konfirm_jadwal' AND $aksi=='hapus' ){ 
// $mySql = "DELETE FROM pengajuan_cuti WHERE id_pengambilan_cuti='".$_GET['id_pengambilan_cuti']."'";
// $myQry = mysql_query($mySql);
// header('location:../../index.php?module='.$module);
// }
// EDIT
if($module=='konfirm_cuti' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE cuti c, pengambilan_cuti p  SET c.sisa_cuti='$cuti_sekarang', p.flag_hrd='Y'
WHERE c.id_cuti=p.id_cuti and p.id_pengambilan_cuti='$id_pengambilan_cuti' ");
header('location:../../index.php?module='.$module);
}
//Tambah
else if($module=='konfirm_cuti' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>