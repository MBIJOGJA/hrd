<?php
include "../../koneksi.php";
$id_hiring = ''; 
if( isset( $_GET['id_hiring'])) {
    $id_hiring = $_GET['id_hiring']; 
}
$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$user_input = $_POST['user_input'];
$tgl_lamaran = $_POST['tgl_lamaran'];
$sumber = $_POST['sumber'];
$progres_recruitment = $_POST['progres_recruitment'];
$resume = ''; 
if( isset( $_GET['resume'])) {
    $resume = $_GET['resume']; 
}
$status_recruitment = $_POST['status_recruitment'];


$module=$_GET['module'];
$aksi=$_GET['aksi'];



// HAPUS
if($module=='recruitment' AND $aksi=='hapus' ){ 
	$mySql1 = mysql_query("DELETE FROM recruitment WHERE id_hiring='".$_GET['id_hiring']."'");
	header('location:../../index.php?module='.$module);
}
// EDIT

  $hasil1 = mysql_query("SELECT MAX(SUBSTRING(nip,4,7)) as terakhir FROM pegawai"); $data = mysql_fetch_array($hasil1);
  $lastID1 = $data['terakhir']; $nextNoUrut1 = $lastID1 + 1;
  $nextID1 = "MBI".sprintf("%04s",$nextNoUrut1);


if($module=='recruitment' AND $aksi=='edit' ){ 
	if ($_POST['status_recruitment']=='Hired') {		
		$query1 ="UPDATE recruitment SET				 
		nama = '$nama',
		posisi = '$posisi',
		user_input = '$user_input',
		tgl_lamaran = '$tgl_lamaran',
		sumber = '$sumber',
		progres_recruitment = '$progres_recruitment',
		resume = '$_POST[resume]',
		status_recruitment = '$status_recruitment'
		WHERE id_hiring = '$_POST[id_hiring]'";
		$a=mysql_query($query1);
		print_r($_POST);
		$query2 ="INSERT INTO pegawai (nip, nm_pegawai) VALUES ('$nextID1', '$nama')";
		$b=mysql_query($query2);
		header('location:../../index.php?module='.$module);

	}if ($_POST['progres_recruitment']<>'Hired'){
	$query ="UPDATE recruitment SET				 
		nama = '$nama',
		posisi = '$posisi',
		user_input = '$user_input',
		tgl_lamaran = '$tgl_lamaran',
		sumber = '$sumber',
		progres_recruitment = '$progres_recruitment',
		resume = '$_POST[resume]',
		status_recruitment = '$status_recruitment'
		WHERE id_hiring = '$_POST[id_hiring]'";
		$a=mysql_query($query);
		header('location:../../index.php?module='.$module);
}
}


//Tambah
else if($module=='recruitment' AND $aksi=='tambah' ){ 
	// header('location:../../index.php?module='.$module);
	$ekstensi_diperbolehkan	= array('pdf');
	$namafile = $_FILES['resume']['name'];
	$x = explode('.', $namafile);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['resume']['size'];
	$file_tmp = $_FILES['resume']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 50044070){			
			move_uploaded_file($file_tmp, '../../module/recruitment/file/'.$namafile);
			$sql = "INSERT INTO recruitment  (nama, posisi, user_input, tgl_lamaran,sumber , progres_recruitment, resume, status_recruitment) VALUES ('$nama', '$posisi', '$user_input', '$tgl_lamaran','$sumber' ,'$progres_recruitment',  '$namafile', '$status_recruitment')";
	$simpan = mysql_query($sql);
	if($simpan)
	{ 
		echo " <script>alert('Input Data Recruitment Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=recruitment'; </script>";
	}
	else{
		echo " <script>alert('Input Data Recruitment Berhasil');</script> ";
		echo " <script>window.location='../../index.php?module=recruitment'; </script>";

	}
}
}
}
?>