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
    
   
    $nm1 = $_POST['nm'];
    $hub1 = $_POST['hub'];
    $no_telp1 = $_POST['no_telp'];
    $alamat1 = $_POST['alamat'];
    $jns_penyakit1 = $_POST['jns_penyakit'];
    $wkt1 = $_POST['wkt'];
    $rs_kota1 = $_POST['rs_kota'];
    $nm_perusahaan1 = $_POST['nm_perusahaan'];
    $periode_krj1 = $_POST['periode_krj'];
    $posisi1 = $_POST['posisi'];
    $gaji_akhir1 = $_POST['gaji_akhir'];

    $biodata=mysql_query("INSERT INTO biodata (nm_lengkap,jeniskelamin,kewarganegaraan,alamat_sesuai_ktp,alamat_domisil,phone,tempat_lahir,tgl_lahir,agama,gol_darah,status_pernikahan,tinggi_bdn,berat_bdn,no_ktp,no_rek,nm_bank,nm_pemilik_rek) VALUES ('$nm_lengkap','$jk','$kewarganegaraan','$alamat_sesuai_ktp','$alamat_domisil','$phone','$tempat_lahir','$tgl_lahir','$agama','$gol_darah','$status_pernikahan','$tinggi_bdn','$berat_bdn','$no_ktp','$no_rek','$nm_bank','$nm_pemilik_rek')");
    $simpan1 = mysql_query($biodata);
    

    $datakeluarga1=mysql_query("INSERT INTO datakeluarga (nm_ayah,usia_ayah,pend_terakhir_ayah,pekerjaan_ayah,nm_ibu,usia_ibu,pend_terakhir_ibu,pekerjaan_ibu) VALUES ('$nm_ayah','$usia_ayah','$pend_terakhir_ayah','$pekerjaan_ayah','$nm_ibu','$usia_ibu','$pend_terakhir_ibu','$pekerjaan_ibu')");
    $simpan2 = mysql_query($datakeluarga1);

//datakeluarga2
$insert_saudara = $_POST['saudara_'];

for ($i = 0; $i < $insert_saudara; $i++) {
$nm_saudara1 = $insert_saudara['nm_saudara'][$i];
$usia_saudara1 = $insert_saudara['usia_saudara'][$i];
$pend_terakhir_saudara1 = $insert_saudara['pend_terkahir_saudara'][$i];
$pekerjaan_saudara1 = $_POST['pekerjaan_saudara'][$i];
        $datakeluarga2 = "INSERT INTO datakeluarga (nm_saudara1,usia_saudara1,pend_terakhir_saudara1,pekerjaan_saudara1) 
        values('$nm_saudara','$usia_saudara1','$pend_terakhir_saudara1','$pekerjaan_saudara1')";
$simpan3 = mysql_query($datakeluarga2);
}
$datakeluarga3=mysql_query("INSERT INTO datakeluarga (nm_si,usia_si,pend_si,kerja_si) VALUES ('$nm_si',$usia_si','$pend_si','$kerja_si')");
$simpan4 = mysql_query($datakeluarga3);
// 
$insert_anak = $_POST['anak_'];

for ($j = 0; $j < $num_input2; $j++) {
$nm_anak = $$insert_anak['nm_anak'][$j];
$usia_anak = $$insert_anak['usia_anak'][$j];
$jeniskelamin = $$insert_anak['jeniskelamin'][$j];
        $datakeluarga4 = "INSERT INTO datakeluarga (nm_anak1,usia_anak1,jk_anak1) 
        values('$nm_anak','$usia_anak','$jeniskelamin')";
$simpan5 = mysql_query($datakeluarga4);
}
$insert_pend = $_POST['pend_'];
for ($k = 0; $k < $count; $k++) {
    $jenjang_pend_sd = $insert_pend['jenjang_pend'][$k];
    $thn_pend_sd = $insert_pend['thn_pend'][$k];
    $nm_sklh_sd = $insert_pend['nm_sklh'][$k];
    $lulus_thn_sd = $insert_pend['lulus_thn'][$k];
    
        $pendidikan1 = "INSERT INTO pendidikankegiatan (jenjang_pend_sd,thn_pend_sd,nm_sklh_sd,lulus_thn_sd) 
        values('$jenjang_pend_sd','$thn_pend_sd', '$nm_sklh_sd','$lulus_thn_sd')";

$simpan6 = mysql_query($pendidikan1);
}
$insert_bhs = $_POST['bhs_'];
for ($l = 0; $l < $count; $l++) {
    $jns_bhs1 = $insert_bhs['jns_bhs'][$l];
    $kem_dengar1 = $insert_bhs['kem_dengar'][$l];
    $kem_baca1 = $insert_bhs['kem_baca'][$l];
    $kem_bicara1 = $insert_bhs['kem_bicara'][$l];
    $kem_tulis1 = $insert_bhs['kem_tulis'][$l];

$pendidikan2 = "INSERT INTO pendidikankegiatan (jns_bhs1,kem_dengar1,kem_baca1,kem_bicara1,kem_tulis1) 
        values('$jns_bhs1','$kem_dengar1', '$kem_baca1','$kem_bicara1','$kem_tulis1')";

$simpan7 = mysql_query($pendidikan2);
}
$insert_org = $_POST['org_'];
for ($m = 0; $m < $count; $m++) {
    $nm_organisasi1 = $insert_org['nm_organisasi'][$m];
    $waktu1 = $insert_org['waktu'][$m];
    $jabatan1 = $insert_org['jabatan'][$m];

$pendidikan3 = "INSERT INTO pendidikankegiatan (nm_organisasi1,waktu1,jabatan1) 
        values('$nm_organisasi1','$waktu1', '$jabatan1')";

$simpan8 = mysql_query($pendidikan3);
}
$insert_org = $_POST['kurs_'];
for ($n = 0; $n < $count; $n++) {
   $nm_pelatihan1 = $insert_org['nm_pelatihan'][$n];
    $waktu_1 = $insert_org['waktu'][$n];
    $penyelenggara1 = $insert_org['penyelenggara'][$n];

$pendidikan4 = "INSERT INTO pendidikankegiatan (nm_pelatihan1,waktu_1,penyelenggara1) 
        values('$nm_pelatihan1','$waktu_1','$penyelenggara1')";

$simpan9 = mysql_query($pendidikan4);
}
$insert_sau = $_POST['sau_'];
for ($o = 0; $o < $count; $o++) {
   $nm1 = $insert_sau['nm'][$o];
   $hub1 = $insert_sau['hub'][$o];
    $no_telp1 =$insert_sau['no_telp'][$o];
    $alamat1 = $insert_sau['alamat'][$o];

$informasilainnya1 = "INSERT INTO informasilainnya (nm_1,hub1,no_telp1,alamat1) 
        values('$nm1','$hub1','$no_telp1', '$alamat1')";

$simpan10 = mysql_query($informasilainnya1);
}
$insert_penyakit = $_POST['penyakit_'];
for ($p = 0; $p < $count; $p++) {
   $jns_penyakit1 = $insert_penyakit['jns_penyakit'][$p];
    $wkt1 = $insert_penyakit['wkt'][$p];
    $rs_kota1 = $insert_penyakit['rs_kota'][$p];

$informasilainnya2 = "INSERT INTO informasilainnya (jns_penyakit1,wkt1,rs_kota1) 
        values('$jns_penyakit1','$wkt1','$rs_kota1')";

$simpan11 = mysql_query($informasilainnya2);
}
$insert_per = $_POST['per_'];
for ($q = 0; $q < $count; $q++) {
   $nm_perusahaan1 = $insert_per['nm_perusahaan'][$q];
    $periode_krj1 = $insert_per['periode_krj'][$q];
    $posisi1 = $insert_per['posisi'][$q];
    $gaji_akhir1 = $insert_per['gaji_akhir'][$q];

$informasilainnya3 = "INSERT INTO informasilainnya (nm_perusahaan1,periode_krj1,posisi1,gaji_akhir1) 
        values('$nm_perusahaan1','$periode_krj1','$posisi1','$gaji_akhir1')";

$simpan12 = mysql_query($informasilainnya3);
}
    if (!$simpan1 || !$simpan2 || !$simpan3 || !$simpan4 || !$simpan5 || !$simpan6 || !$simpan7 || !$simpan8 || !$simpan9 || !$simpan10 || !$simpan11 || !$simpan12) {
        echo "Input Data Gagal";   
    }else{
        header('Location: save.php');    
    }

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