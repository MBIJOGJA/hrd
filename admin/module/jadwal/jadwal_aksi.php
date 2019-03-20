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
if($query)
{ 
echo " <script>alert('Update Data jadwal Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=jadwal'; </script>";
}
	else{
		echo " <script>alert('Update Data Jadwalabatan Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=jadwal'; </script>";

}
}
//Tambah
else if($module=='jadwal' AND $aksi=='tambah' ){ 

	// header('location:../../index.php?module='.$module);

	$cekdata="select nip ,tanggal  from jadwal where nip='$nip' and tanggal=CURRENT_DATE()";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada)>0)
{ 
echo " <script> alert('Anda Sudah Melakukan Input Jadwal');</script> ";
echo " <script>window.location='../../index.php?module=jadwal'; </script>";

}
else {
	$sql = "INSERT INTO jadwal  (id_jadwal, nip, id_shift, tanggal , keterangan) VALUES (null,'$nip','$id_shift','$tanggal','Alfa')";
$simpan = mysql_query($sql);
if($simpan)
{ 
echo " <script>alert('Input Data jadwal Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=jadwal'; </script>";
}
	else{
		echo " <script>alert('Input Data jadwal Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=jadwal'; </script>";

}
}



}
else if($module=='jadwal' AND $aksi=='edit' ){ 
 
	// header('location:../../index.php?module='.$module);
	}
?>