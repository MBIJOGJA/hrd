<?php
error_reporting(0);
include "../../koneksi.php";

$module=$_GET['module'];
$aksi=$_GET['aksi'];

$id_cuti = $_POST['id_cuti'];
$nip = $_POST['nip'];
$periode=$_POST['periode'];
$jml_cuti=$_POST['jml_cuti'];

if($module=='cuti' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM cuti WHERE id_cuti='".$_GET['id_cuti']."'";
$myQry = mysql_query($mySql);
header('location:../../index.php?module='.$module);
}
//Tambah
else if($module=='cuti' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
$sql = "INSERT INTO `cuti` (`id_cuti`, `nip`, `periode`, `jml_cuti`, `sisa_cuti`, `flag_status`) VALUES (NULL, '$nip', '$periode', '$jml_cuti', '$jml_cuti', 'Y')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data Cuti Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=cuti'; </script>";
}
	else{
		echo " <script>alert('Input Data Cuti Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=cuti'; </script>";

}
}
else if($module=='cuti' AND $aksi=='edit' ){ 
$query = mysql_query("UPDATE cuti SET
				  nip='$nip',
				  periode = '$periode',
				  jml_cuti='$jml_cuti'
				  WHERE id_cuti = '$id_cuti'");
// header('location:../../index.php?module='.$module);
if($query)
{ 
echo " <script>alert('Update Data Cuti Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=cuti'; </script>";
}
	else{
		echo " <script>alert('Update Data Cuti Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=cuti'; </script>";

}
}
else if($module=='cuti' AND $aksi=='edit' ){ 
 
	header('location:../../index.php?module='.$module);
	}

?>