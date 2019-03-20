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

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

//exit();

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
    $biodata=mysql_query("INSERT INTO biodata (nm_lengkap,jeniskelamin,kewarganegaraan,alamat_sesuai_ktp,alamat_domisil,phone,tempat_lahir,tgl_lahir,agama,gol_darah,status_pernikahan,tinggi_bdn,berat_bdn,no_ktp,no_rek,nm_bank,nm_pemilik_rek) VALUES ('$nm_lengkap','$jk','$kewarganegaraan','$alamat_sesuai_ktp','$alamat_domisil','$phone','$tempat_lahir','$tgl_lahir','$agama','$gol_darah','$status_pernikahan','$tinggi_bdn','$berat_bdn','$no_ktp','$no_rek','$nm_bank','$nm_pemilik_rek')");
    //echo "INSERT INTO biodata (nm_lengkap,jk,kewarganegaraan,alamat_sesuai_ktp,alamat_domisil,phone,tempat_lahir,tgl_lahir,agama,gol_darah,status_pernikahan,tinggi_bdn,berat_bdn,no_ktp,no_rek,nm_bank,nm_pemilik_rek) VALUES ('$nm_lengkap','$jk','$kewarganegaraan','$alamat_sesuai_ktp','$alamat_domisil','$phone','$tempat_lahir','$tgl_lahir','$agama','$gol_darah','$status_pernikahan','$tinggi_bdn','$berat_bdn','$no_ktp','$no_rek','$nm_bank','$nm_pemilik_rek')";
    //exit();
    //jenis kelamin

    //if ($biodata) {
        # code...
        //echo "<script>alert('simpan biodata berhasil')</script>";
    //else {
         //echo "<script>alert('Gagal biodata')</script>";
    //}

//keluarga
    $datakeluarga=mysql_query("INSERT INTO datakeluarga (nm_ayah,usia_ayah,pend_terakhir_ayah,pekerjaan_ayah,nm_ibu,usia_ibu,pend_terakhir_ibu,pekerjaan_ibu,nm_si,usia_si,pend_si,kerja_si) VALUES ('$nm_ayah','$usia_ayah','$pend_terakhir_ayah','$pekerjaan_ayah','$nm_ibu','$usia_ibu','$pend_terakhir_ibu','$pekerjaan_ibu','$nm_si','$usia_si','$pend_si','$kerja_si')");
    //echo "INSERT INTO datakeluarga (nm_ayah,usia_ayah,pend_terakhir_ayah,pekerjaan_ayah,nm_ibu,usia_ibu,pend_terakhir_ibu,pekerjaan_ibu,nm_si,usia_si,pend_si,kerja_si) VALUES ('$nm_ayah','$usia_ayah','$pend_terakhir_ayah','$pekerjaan_ayah','$nm_ibu','$usia_ibu','$pend_terakhir_ibu','$pekerjaan_ibu'$nm_si',$usia_si','$pend_si','$kerja_si')";
    //exit();
    // kurang petik
 
    //if ($datakeluarga) {
        //echo "<script>alert('simpan datakeluarga berhasil')</script>";
    //}else{
        //echo "<script>alert('Gagal datakeluarga')</script>";
    //}
//detaill keluarga
$insert_keluarga = $_POST['keluarga'];
foreach ($insert_keluarga as $value) {   
    $nm_saudara1 = $value['nm_saudara'];
    $usia_saudara1 = $value['usia_saudara'];
    $pend_terakhir_saudara1 = $value['pend_terakhir_saudara'];
    $pekerjaan_saudara1 = $value['pekerjaan_saudara'];
    
    $detailkeluarga = mysql_query("INSERT INTO detailkeluarga (nm_saudara,usia_saudara1,pend_terakhir_saudara1,pekerjaan_saudara1)
        values('$nm_saudara1','$usia_saudara1','$pend_terakhir_saudara1','$pekerjaan_saudara1')");
}
//echo "INSERT INTO detailkeluarga (nm_saudara,usia_saudara1,pend_terakhir_saudara1,pekerjaan_saudara1,nm_anak,usia_anak,jk_anak)values('$nm_saudara1','$usia_saudara1','$pend_terakhir_saudara1','$pekerjaan_saudara1','$nm_anak','$usia_anak','$jeniskelamin')";
//exit();
     //if ($detailkeluarga) {
        //echo "<script>alert('simpan detailkeluarga berhasil')</script>";   
    //}else{
        //echo "<script>alert('Gagal detailkeluarga')</script>";
    //}
$insert_klrg = $_POST['klrg'];
foreach ($insert_klrg as $value) {
    $nm_anak = $value['nm_anak'];
    $usia_anak = $value['usia_anak'];
    $jeniskelamin = $value['jeniskelamin'];

    $detailkeluarga=mysql_query("INSERT INTO detailkeluarga1(nm_anak,usia_anak,jk_anak) VALUES ('$nm_anak','$usia_anak','$jeniskelamin')");
}


//sekolah yang pernah diikuti
$insert_pend = $_POST['pend'];
foreach ($insert_pend as $value) {
    $jenjang_pend_sd = $value['jenjang_pend'];
    $thn_pend_sd = $value['thn_pend'];
    $nm_sklh_sd = $value['nm_sklh'];
    $lulus_thn_sd = $value['lulus_thn'];
   
        $pendidikan = mysql_query("INSERT INTO pendidikankegiatan (jenjang_pend_sd,thn_pend_sd,nm_sklh_sd,lulus_thn_sd) 
        values('$jenjang_pend_sd','$thn_pend_sd','$nm_sklh_sd','$lulus_thn_sd')");
    }
//echo "INSERT INTO pendidikankegiatan (jenjang_pend_sd,thn_pend_sd,nm_sklh_sd,lulus_thn_sd,jns_bhs1,kem_dengar1,kem_baca1,kem_bicara1,kem_tulis1,nm_organisasi1,waktu1,jabatan1,nm_pelatihan1,waktu_1,penyelenggara1) 
        //values('$jenjang_pend_sd','$thn_pend_sd','$nm_sklh_sd','$lulus_thn_sd','$jns_bhs1','$kem_dengar1', '$kem_baca1','$kem_bicara1','$kem_tulis1','$nm_organisasi1','$waktu1','$jabatan1','$nm_pelatihan1','$waktu_1','$penyelenggara1')";
//kemampuan bahasa asing
        $insert_pend1 = $_POST['KBA'];
foreach ($insert_pend1 as $value) {
 $jns_bhs1 = $value['jns_bhs'];
    $kem_dengar1 = $value['kem_dengar'];
    $kem_baca1 = $value['kem_baca'];
    $kem_bicara1 = $value['kem_bicara'];
    $kem_tulis1 = $value['kem_tulis'];
    

    $pendidikankeluarga1=mysql_query("INSERT INTO pendidikankegiatan1(jns_bhs,kem_dengar,kem_baca,kem_bicara,kem_tulis) VALUES('$jns_bhs1','$kem_dengar1', '$kem_baca1','$kem_bicara1','$kem_tulis1')");
}
//organisasi yg pernah diikuti
$insert_pend2 = $_POST['ao'];
foreach ($insert_pend2 as $value) {
$nm_organisasi1 = $value['nm_organisasi'];
    $waktu1 = $value['waktu'];
    $jabatan1 = $value['jabatan'];
    $pendidikankegiatan2=mysql_query("INSERT INTO pendidikankegiatan2(nm_organisasi,waktu,jabatan) VALUES('$nm_organisasi1','$waktu1','$jabatan1')");

        }
    //pelatihan atau kursus yang pernah iikuti
        $insert_pend3 = $_POST['pk'];
foreach ($insert_pend3 as $value) {
    $nm_pelatihan1 = $value['nm_pelatihan'];
    $waktu_1 = $value['waktu_krs'];
    $penyelenggara1 = $value['penyelenggara'];
$pendidikankegiatan3=mysql_query("INSERT INTO pendidikankegiatan3(nm_pelatihan,waktu,penyelenggara) VALUES('$nm_pelatihan1','$waktu_1','$penyelenggara1')");
}
        
    //if ($pendidikan) {
    //echo "<script>alert('simpan pendidikan berhasil')</script>";
    //}else{
        //echo "<script>alert('Gagal pendidikan')</script>";
    //}


//info lain
$insert_lain = $_POST['lain'];
foreach ($insert_lain as $value) {
    $nm1 = $value['nm'];
    $hub1 = $value['hub'];
    $no_telp1 =$value['no_telp'];
    $alamat1 = $value['alamat'];
    
    $informasilainnya = mysql_query("INSERT INTO informasilainnya (nm1,hub1,no_telp1,alamat1) 
        values('$nm1','$hub1','$no_telp1', '$alamat1')");
}
    //echo "INSERT INTO informasilainnya (nm1,hub1,no_telp1,alamat1,jns_penyakit1,wkt1,rs_kota1,nm_perusahaan1,periode_krj1,posisi1,gaji_akhir1) 
        //values('$nm1','$hub1','$no_telp1', '$alamat1','$jns_penyakit1','$wkt1','$rs_kota1','$nm_perusahaan1','$periode_krj1','$posisi1','$gaji_akhir1')";
        //exit();
//penyakit yang pernah diderita
$insert_lain1 = $_POST['RS'];
foreach ($insert_lain1 as $value) {
    $jns_penyakit1 = $value['jns_penyakit'];
    $wkt1 = $value['wkt'];
    $rs_kota1 = $value['rs_kota'];
    
    $informasilainnya1 = mysql_query("INSERT INTO informasilainnya1 (jns_penyakit,waktu,rs_kota) VALUES('$jns_penyakit1','$wkt1','$rs_kota1')");

}
//pengalaman kerja
$insert_lain2 = $_POST['PK'];
foreach ($insert_lain2 as $value) {
$nm_perusahaan1 = $value['nm_perusahaan'];
    $periode_krj1 = $value['periode_krj'];
    $posisi1 = $value['posisi'];
    $gaji_akhir1 = $value['gaji_akhir'];

    $informasilainnya2 = mysql_query("INSERT INTO informasilainnya2 (nm_perusahaan,periode_krj,posisi,gaji_akhir) VALUES('$nm_perusahaan1','$periode_krj1','$posisi1','$gaji_akhir1')");
}
        /*
        //if ($informasilainnya) {
        //echo "<script>alert('simpan informasilainnya berhasil')</script>";
    //}else{
        //echo "<script>alert('Gagal informasilainnya')</script>";
    //}

    // if (!$biodata || !$datakeluarga || !$detailkeluarga || !$pendidikan || !$informasilainnya) {
    //     echo "Input Data Gagal";   
    // }else{
    //     header('Location: index.html');    
    // }
*/
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