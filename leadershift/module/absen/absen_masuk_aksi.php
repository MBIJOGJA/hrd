<?php
include "koneksi.php";
error_reporting(0);
$module=$_GET['module'];
$aksi=$_GET['aksi'];

// $id_absen = $_POST['id_absen'];
$nip = $_POST['nip'];
// $jam_sekarang=$_POST['jam'];
$shift_sekarang=$_POST['shift_id'];
$jam_telat=$_POST['jam_telat'];
$jam= Date("H:i:s"); 
$selisih  = $jam - $jam_telat;
$keterangan=$_POST['keterangan'];



if($module=='absen_masuk' AND $aksi=='hapus' ){ 
$mySql = "DELETE FROM absen WHERE id_absen='".$_GET['id_absen']."'";
$myQry = mysql_query($mySql);
if($myQry)
{ 
echo " <script>alert('Berhasil Dibatalkan');</script> ";
?>
 <script>window.location=history.go(-1); </script>
 <?php

}
}

if($module=='absen_masuk' AND $aksi=='tambah' ){
$cekdata="select nip ,tanggal  from absen where nip='$nip' and tanggal=CURRENT_DATE()";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada)>0)
{ 
echo " <script>alert('Anda Sudah Melakukan Presensi');</script> ";
?>
 <script>window.location=history.go(-1); </script>
 <?php

}
	else{

		$cekjadwal="select nip ,tanggal  from jadwal where nip='$nip' and tanggal=CURRENT_DATE()";
$yes=mysql_query($cekjadwal) or die(mysql_error());
if(mysql_num_rows($yes)>0)
{ 
	$sql = "INSERT INTO `absen` (`id_absen`, `nip`, `id_shift`, `tanggal`,`jam_masuk`, `jam_pulang`, `keterangan_masuk`, `keterangan_pulang`) VALUES (NULL, '$nip', '$shift_sekarang', now() ,curtime(), '00:00:00', '$keterangan','-')";
	$simpan = mysql_query($sql);
$sql1 ="UPDATE `jadwal` SET `keterangan` = '$keterangan' WHERE `nip` = '$nip' AND tanggal=CURRENT_DATE()";
$simpan1 = mysql_query($sql1);
if($simpan)
{ 
echo " <script>alert('Presesnsi  Berhasil');</script> ";
echo " <script>window.location='../../index.php?module=absen_masuk'; </script>";
}
	else{
		echo " <script>alert('Presesnsi Gagal');</script> ";
		echo " <script>window.location='../../index.php?module=absen_masuk'; </script>";

}
}
else {
echo " <script>alert('Anda Tidak Ada di Jadwal');</script> ";
?>
 <script>window.location=history.go(-1); </script>
 <?php
}

}



}

?>