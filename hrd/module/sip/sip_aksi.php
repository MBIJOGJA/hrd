<?php
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$no_sk = $_POST['no_str'];
$nip = $_POST['nip'];
$id_jabatan = $_POST['jabatan'];
$id_unit_krj=$_POST['unit_kerja'];
$id_status_pegawai = $_POST['status_pegawai'];
$tgl_sk = $_POST['tgl_str'];
$tgl_selesai = $_POST['tgl_selesai'];
// HAPUS
if($module=='sip' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM sk_krj WHERE no_sk='".$_GET['no_sk']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
// EDIT
else if($module=='sip' AND $aksi=='edit' ){ 
$query ="UPDATE sk_krj SET
				  		nip='$nip',
				  		tgl_sk='$tgl_sk',
				  		tgl_selesai='$tgl_selesai',
				  		id_jabatan='$id_jabatan',
				  		id_unit_krj='$id_unit_krj',
				  		id_status_pegawai='$id_status_pegawai'
				  WHERE no_sk = '$no_sk'";
$a=mysql_query($query);

if($a)
{ 
echo " <script>alert('Update Data SIP Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=sip'; </script>";
}
	else{
		echo " <script>alert('Update Data STR Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=sip'; </script>";

}
}
//Tambah
else if($module=='sip' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql =mysql_query("INSERT INTO sk_krj (no_sk,nip,tgl_sk,tgl_selesai,id_jabatan,id_unit_krj,id_status_pegawai,status_sk,jenis_sk) VALUES ('$no_sk','$nip','$tgl_sk','$tgl_selesai','$id_jabatan','$id_unit_krj','$id_status_pegawai','aktif','SIP')");
 if($sql)
 { 
 echo " <script>alert('Input Data SIP Berhasil');</script> ";
 echo " <script>window.location='../../index.php?module=sip'; </script>";
 }
 	else{
 		echo " <script>alert('Input Data SIP Berhasil');</script> ";
 		echo " <script>window.location='../../index.php?module=sip'; </script>";

 }
}
else if($module=='sip' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}
?>