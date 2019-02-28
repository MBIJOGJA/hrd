<?php
$host="localhost";
$user="root";
$password="";
$database="sistempegawai";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
} else {
    echo"gagal koneksi";
}

    $nm_lengkap = $_POST['nm_lengkap'];
    $jk = $_POST['jeniskelamin'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $alamat_sesuai_ktp = $_POST['alamat_sesuai_ktp'];
    $alamat_domisil = $_POST['alamat_domisil'];
    $phone = $_POST['phone'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $gol_darah = $_POST['gol_darah'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $tinggi_bdn = $_POST['tinggi_bdn'];
    $berat_bdn = $_POST['berat_bdn'];
    $no_ktp = $_POST['no_ktp'];
    $no_rek = $_POST['no_rek'];
    $nm_bank = $_POST['nm_bank'];
    $nm_pemilik_rek = $_POST['nm_pemilik_rek'];

    $nm_ayah = $_POST['nm_ayah'];
    $usia_ayah = $_POST['usia_ayah'];
    $pend_terakhir_ayah = $_POST['pend_terakhir_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nm_ibu = $_POST['nm_ibu'];
    $usia_ibu = $_POST['usia_ibu'];
    $pend_terakhir_ibu = $_POST['pend_terakhir_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];

    $nm_si = $_POST['nm_si'];
    $usia_si = $_POST['usia_si'];
    $pend_si = $_POST['pend_si'];
    $kerja_si = $_POST['kerja_si'];
    
//biodata
    $biodata=mysql_query("INSERT INTO biodata (nm_lengkap,jk,kewarganegaraan,alamat_sesuai_ktp,alamat_domisil,phone,tempat_lahir,tgl_lahir,agama,gol_darah,status_pernikahan,tinggi_bdn,berat_bdn,no_ktp,no_rek,nm_bank,nm_pemilik_rek) VALUES ('$nm_lengkap','$jk','$kewarganegaraan','$alamat_sesuai_ktp','$alamat_domisil','$phone','$tempat_lahir','$tgl_lahir','$agama','$gol_darah','$status_pernikahan','$tinggi_bdn','$berat_bdn','$no_ktp','$no_rek','$nm_bank','$nm_pemilik_rek')");
//keluarga
    $datakeluarga=mysql_query("INSERT INTO datakeluarga (nm_ayah,usia_ayah,pend_terakhir_ayah,pekerjaan_ayah,nm_ibu,usia_ibu,pend_terakhir_ibu,pekerjaan_ibu,nm_si,usia_si,pend_si,kerja_si) VALUES ('$nm_ayah','$usia_ayah','$pend_terakhir_ayah','$pekerjaan_ayah','$nm_ibu','$usia_ibu','$pend_terakhir_ibu','$pekerjaan_ibu'$nm_si',$usia_si','$pend_si','$kerja_si')");

//detaill keluarga
$insert_keluarga = $_POST['keluarga'];
for ($i = 0; $i < $insert_keluarga; $i++) {
    $nm_saudara1 = $insert_keluarga['nm_saudara'][$i];
    $usia_saudara1 = $insert_keluarga['usia_saudara'][$i];
    $pend_terakhir_saudara1 = $insert_keluarga['pend_terkahir_saudara'][$i];
    $pekerjaan_saudara1 = $insert_keluarga['pekerjaan_saudara'][$i];
    $nm_anak = $insert_keluarga['nm_anak'][$i]; 
    $usia_anak = $insert_keluarga['usia_anak'][$i];
    $jeniskelamin = $insert_keluarga['jeniskelamin'][$i];
    $detailkeluarga = mysql_query("INSERT INTO detailkeluarga (nm_saudara1,usia_saudara1,pend_terakhir_saudara1,pekerjaan_saudara1)
        values('$nm_saudara','$usia_saudara1','$pend_terakhir_saudara1','$pekerjaan_saudara1','$nm_anak','$usia_anak','$jeniskelamin')");
}
// 
$insert_pend = $_POST['pend'];
for ($j = 0; $j < $count; $j++) {
    $jenjang_pend_sd = $insert_pend['jenjang_pend'][$j];
    $thn_pend_sd = $insert_pend['thn_pend'][$j];
    $nm_sklh_sd = $insert_pend['nm_sklh'][$j];
    $lulus_thn_sd = $insert_pend['lulus_thn'][$j];
    $jns_bhs1 = $insert_pend['jns_bhs'][$j];
    $kem_dengar1 = $insert_pend['kem_dengar'][$j];
    $kem_baca1 = $insert_pend['kem_baca'][$j];
    $kem_bicara1 = $insert_pend['kem_bicara'][$j];
    $kem_tulis1 = $insert_pend['kem_tulis'][$j];
    $nm_organisasi1 = $insert_pend['nm_organisasi'][$j];
    $waktu1 = $insert_pend['waktu_krs'][$j];
    $jabatan1 = $insert_pend['jabatan'][$j];
    $nm_pelatihan1 = $insert_pend['nm_pelatihan'][$j];
    $waktu_1 = $insert_pend['waktu'][$j];
    $penyelenggara1 = $insert_pend['penyelenggara'][$j];
        $pendidikan1 = "INSERT INTO pendidikankegiatan (jenjang_pend_sd,thn_pend_sd,nm_sklh_sd,lulus_thn_sd,jns_bhs1,kem_dengar1,kem_baca1,kem_bicara1,kem_tulis1,nm_organisasi1,waktu1,jabatan1,nm_pelatihan1,waktu_1,penyelenggara1) 
        values('$jenjang_pend_sd','$thn_pend_sd', '$nm_sklh_sd','$lulus_thn_sd','$jns_bhs1','$kem_dengar1', '$kem_baca1','$kem_bicara1','$kem_tulis1','$nm_organisasi1','$waktu1','$jabatan1','$nm_pelatihan1','$waktu_1','$penyelenggara1')";
}

$insert_lain = $_POST['lain'];
for ($o = 0; $o < $count; $o++) {
   $nm1 = $insert_lain['nm'][$o];
   $hub1 = $insert_lain['hub'][$o];
    $no_telp1 =$insert_lain['no_telp'][$o];
    $alamat1 = $insert_lain['alamat'][$o];
    $jns_penyakit1 = $insert_penyakit['jns_penyakit'][$p];
    $wkt1 = $insert_penyakit['wkt'][$p];
    $rs_kota1 = $insert_penyakit['rs_kota'][$p];
     $nm_perusahaan1 = $insert_per['nm_perusahaan'][$q];
    $periode_krj1 = $insert_per['periode_krj'][$q];
    $posisi1 = $insert_per['posisi'][$q];
    $gaji_akhir1 = $insert_per['gaji_akhir'][$q];

$informasilainnya1 = "INSERT INTO informasilainnya (nm_1,hub1,no_telp1,alamat1,jns_penyakit1,wkt1,rs_kota1,nm_perusahaan1,periode_krj1,posisi1,gaji_akhir1) 
        values('$nm1','$hub1','$no_telp1', '$alamat1','$jns_penyakit1','$wkt1','$rs_kota1','$nm_perusahaan1','$periode_krj1','$posisi1','$gaji_akhir1')";

}
    if (!$simpan1 || !$simpan2 || !$simpan3 || !$simpan4 || !$simpan5 || !$simpan6 || !$simpan7 || !$simpan8 || !$simpan9 || !$simpan10 || !$simpan11 || !$simpan12) {
        echo "Input Data Gagal";   
    }else{
        header('Location: index.html');    
    }


?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>CV Medika Buwana Informatika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container-fluid">
        <p><br/></p>
        <center>
            <h3>Terima Kasih telah mengisi Form kami</h3>
            <h5></h5>
        </center>
        <p class="text-center">
            <br/>
            <a href="index.php" class="btn btn-primary">Back to homepage</a>
        </p>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>