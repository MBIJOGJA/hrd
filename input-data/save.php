<?php
$db = new PDO("mysql:host=localhost;dbname=sistempegawai","root","");
if(isset($_POST['save'])){
    $id = uniqid();

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
    $nm_saudara1 = $_POST['nm_saudara'];
    $usia_saudara1 = $_POST['usia_saudara'];
    $pend_terakhir_saudara1 = $_POST['pend_terkahir_saudara'];
    $pekerjaan_saudara1 = $_POST['pekerjaan_saudara'];
    
    $nm_si = $_POST['nm_si'];
    $usia_si = $_POST['usia_si'];
    $pend_si = $_POST['pend_si'];
    $kerja_si = $_POST['kerja_si'];
    $nm_anak1 = $_POST['nm_anak'];
    $jk_anak1 = $_POST['jk_anak'];
    $umur_anak1 = $_POST['umur_anak'];
    $pend_akhir_anak1 = $_POST['pend_akhir_anak'];

    $jenjang_pend_sd = $_POST['jenjang_pend_'];
    $thn_pend_sd = $_POST['thn_pend_'];
    $nm_sklh_sd = $_POST['nm_sklh'];
    $lulus_thn_sd = $_POST['lulus_thn'];
    $jns_bhs1 = $_POST['jns_bhs'];
    $kem_dengar1 = $_POST['kem_dengar'];
    $kem_baca1 = $_POST['kem_baca'];
    $kem_bicara1 = $_POST['kem_bicara'];
    $kem_tulis1 = $_POST['kem_tulis'];
    $nm_organisasi1 = $_POST['nm_organisasi'];
    $waktu1 = $_POST['waktu'];
    $jabatan1 = $_POST['jabatan'];
    $nm_pelatihan1 = $_POST['nm_pelatihan'];
    $waktu_1 = $_POST['waktu'];
    $penyelenggara1 = $_POST['penyelenggara'];;
    
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

    $stat1 = $db->prepare("insert into datakeluarga values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stat1->bindParam(1, $id);
    $stat1->bindParam(2, $nm_ayah);
    $stat1->bindParam(3, $usia_ayah);
    $stat1->bindParam(4, $pend_terakhir_ayah);
    $stat1->bindParam(5, $pekerjaan_ayah);
    $stat1->bindParam(6, $nm_ibu);
    $stat1->bindParam(7, $usia_ibu);
    $stat1->bindParam(8, $pend_terakhir_ibu);
    $stat1->bindParam(9, $pekerjaan_ibu);
    $stat1->bindParam(10, $nm_saudara1);
    $stat1->bindParam(11, $usia_saudara1);
    $stat1->bindParam(12, $pend_terakhir_saudara1);
    $stat1->bindParam(13, $pekerjaan_saudara1);
    $stat1->bindParam(14, $nm_saudara2);
    $stat1->bindParam(15, $usia_saudara2);
    $stat1->bindParam(16, $pend_terakhir_saudara2);
    $stat1->bindParam(17, $pekerjaan_saudara2);
    $stat1->bindParam(18, $nm_saudara3);
    $stat1->bindParam(19, $usia_saudara3);
    $stat1->bindParam(20, $pend_terakhir_saudara3);
    $stat1->bindParam(21, $pekerjaan_saudara3);
    $stat1->bindParam(22, $nm_saudara4);
    $stat1->bindParam(23, $usia_saudara4);
    $stat1->bindParam(24, $pend_terakhir_saudara4);
    $stat1->bindParam(25, $pekerjaan_saudara4);
    $stat1->bindParam(26, $nm_saudara5);
    $stat1->bindParam(27, $usia_saudara5);
    $stat1->bindParam(28, $pend_terakhir_saudara5);
    $stat1->bindParam(29, $pekerjaan_saudara5);
    $stat1->bindParam(30, $nm_saudara6);
    $stat1->bindParam(31, $usia_saudara6);
    $stat1->bindParam(32, $pend_terakhir_saudara6);
    $stat1->bindParam(33, $pekerjaan_saudara6);
    $stat1->bindParam(34, $nm_saudara7);
    $stat1->bindParam(35, $usia_saudara7);
    $stat1->bindParam(36, $pend_terakhir_saudara7);
    $stat1->bindParam(37, $pekerjaan_saudara7);
    $stat1->bindParam(38, $nm_si);
    $stat1->bindParam(39, $usia_si);
    $stat1->bindParam(40, $pend_si);
    $stat1->bindParam(41, $kerja_si);
    $stat1->bindParam(42, $nm_anak1);
    $stat1->bindParam(43, $jk_anak1);
    $stat1->bindParam(44, $nm_anak2);
    $stat1->bindParam(45, $jk_anak2);
    $stat1->bindParam(46, $umur_anak1);
    $stat1->bindParam(47, $umur_anak2);
    $stat1->bindParam(48, $pend_akhir_anak1);
    $stat1->bindParam(49, $pend_akhir_anak2);
    $stat1->execute();
    $stat2 = $db->prepare("INSERT INTO pendidikankegiatan VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stat2->bindParam(1, $id);
    $stat2->bindParam(2, $jenjang_pend_sd);
    $stat2->bindParam(3, $thn_pend_sd);
    $stat2->bindParam(4, $nm_sklh_sd);
    $stat2->bindParam(5, $lulus_thn_sd);
    $stat2->bindParam(6, $jenjang_pend_smp);
    $stat2->bindParam(7, $thn_pend_smp);
    $stat2->bindParam(8, $nm_sklh_smp);
    $stat2->bindParam(9, $lulus_thn_smp);
    $stat2->bindParam(10, $jenjang_pend_smasmk);
    $stat2->bindParam(11, $thn_pend_smasmk);
    $stat2->bindParam(12, $nm_sklh_smasmk);
    $stat2->bindParam(13, $lulus_thn_smasmk);
    $stat2->bindParam(14, $jenjang_pend_d3);
    $stat2->bindParam(15, $thn_pend_d3);
    $stat2->bindParam(16, $nm_univ_d3);
    $stat2->bindParam(17, $lulus_thn_d3);
    $stat2->bindParam(18, $jenjang_pend_s1);
    $stat2->bindParam(19, $thn_pend_s1);
    $stat2->bindParam(20, $nm_univ_s1);
    $stat2->bindParam(21, $lulus_thn_s1);
    $stat2->bindParam(22, $jenjang_pend_s2);
    $stat2->bindParam(23, $thn_pend_s2);
    $stat2->bindParam(24, $nm_univ_s2);
    $stat2->bindParam(25, $lulus_thn_s2);
    $stat2->bindParam(26, $jns_bhs1);
    $stat2->bindParam(27, $kem_dengar1);
    $stat2->bindParam(28, $kem_baca1);
    $stat2->bindParam(29, $kem_bicara1);
    $stat2->bindParam(30, $kem_tulis1);
    $stat2->bindParam(31, $jns_bhs2);
    $stat2->bindParam(32, $kem_dengar2);
    $stat2->bindParam(33, $kem_baca2);
    $stat2->bindParam(34, $kem_bicara2);
    $stat2->bindParam(35, $kem_tulis2);
    $stat2->bindParam(36, $jns_bhs3);
    $stat2->bindParam(37, $kem_dengar3);
    $stat2->bindParam(38, $kem_baca3);
    $stat2->bindParam(39, $kem_bicara3);
    $stat2->bindParam(40, $kem_tulis3);
    $stat2->bindParam(41, $nm_organisasi1);
    $stat2->bindParam(42, $waktu1);
    $stat2->bindParam(43, $jabatan1);
    $stat2->bindParam(44, $nm_organisasi2);
    $stat2->bindParam(45, $waktu2);
    $stat2->bindParam(46, $jabatan2);
    $stat2->bindParam(47, $nm_organisasi3);
    $stat2->bindParam(48, $waktu3);
    $stat2->bindParam(49, $jabatan3);
    $stat2->bindParam(50, $nm_organisasi4);
    $stat2->bindParam(51, $waktu4);
    $stat2->bindParam(52, $jabatan4);
    $stat2->bindParam(53, $nm_pelatihan1);
    $stat2->bindParam(54, $waktu_1);
    $stat2->bindParam(55, $penyelenggara1);
    $stat2->bindParam(56, $nm_pelatihan2);
    $stat2->bindParam(57, $waktu_2);
    $stat2->bindParam(58, $penyelenggara2);
    $stat2->bindParam(59, $nm_pelatihan3);
    $stat2->bindParam(60, $waktu_3);
    $stat2->bindParam(61, $penyelenggara3);
    $stat2->bindParam(62, $nm_pelatihan4);
    $stat2->bindParam(63, $waktu_4);
    $stat2->bindParam(64, $penyelenggara4);
    $stat2->execute();
    $stat3 = $db->prepare("INSERT INTO informasilainnya VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stat3->bindParam(1, $id);
    $stat3->bindParam(2, $nm1);
    $stat3->bindParam(3, $hub1);
    $stat3->bindParam(4, $no_telp1);
    $stat3->bindParam(5, $alamat1);
    $stat3->bindParam(6, $nm2);
    $stat3->bindParam(7, $hub2);
    $stat3->bindParam(8, $no_telp2);
    $stat3->bindParam(9, $alamat2);
    $stat3->bindParam(10, $jns_penyakit1);
    $stat3->bindParam(11, $wkt1);
    $stat3->bindParam(12, $rs_kota1);
    $stat3->bindParam(13, $jns_penyakit2);
    $stat3->bindParam(14, $wkt2);
    $stat3->bindParam(15, $rs_kota2);
    $stat3->bindParam(16, $jns_penyakit3);
    $stat3->bindParam(17, $wkt3);
    $stat3->bindParam(18, $rs_kota3);
    $stat3->bindParam(19, $jns_penyakit4);
    $stat3->bindParam(20, $wkt4);
    $stat3->bindParam(21, $rs_kota4);
    $stat3->bindParam(22, $nm_perusahaan1);
    $stat3->bindParam(23, $periode_krj1);
    $stat3->bindParam(24, $posisi1);
    $stat3->bindParam(25, $gaji_akhir1);
    $stat3->bindParam(26, $nm_perusahaan2);
    $stat3->bindParam(27, $periode_krj2);
    $stat3->bindParam(28, $posisi2);
    $stat3->bindParam(29, $gaji_akhir2);
    $stat3->bindParam(30, $nm_perusahaan3);
    $stat3->bindParam(31, $periode_krj3);
    $stat3->bindParam(32, $posisi3);
    $stat3->bindParam(33, $gaji_akhir3);
    $stat3->bindParam(34, $nm_perusahaan4);
    $stat3->bindParam(35, $periode_krj4);
    $stat3->bindParam(36, $posisi4);
    $stat3->bindParam(37, $gaji_akhir4);
    $stat3->bindParam(38, $nm_perusahaan5);
    $stat3->bindParam(39, $periode_krj5);
    $stat3->bindParam(40, $posisi5);
    $stat3->bindParam(41, $gaji_akhir5);
    $stat3->execute();
    $stat4 = $db->prepare("INSERT INTO biodata VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stat4->bindParam(1, $id);
    $stat4->bindParam(2, $nm_lengkap);
    $stat4->bindParam(3, $jk);
    $stat4->bindParam(4, $kewarganegaraan);
    $stat4->bindParam(5, $alamat_sesuai_ktp);
    $stat4->bindParam(6, $alamat_domisil);
    $stat4->bindParam(7, $phone);
    $stat4->bindParam(8, $tempat_lahir);
    $stat4->bindParam(9, $tgl_lahir);
    $stat4->bindParam(10, $agama);
    $stat4->bindParam(11, $gol_darah);
    $stat4->bindParam(12, $status_pernikahan);
    $stat4->bindParam(13, $tinggi_bdn);
    $stat4->bindParam(14, $berat_bdn);
    $stat4->bindParam(15, $no_ktp);
    $stat4->bindParam(16, $no_rek);
    $stat4->bindParam(17, $nm_bank);
    $stat4->bindParam(18, $nm_pemilik_rek);
    $stat4->execute();
    if (!$stat1 and !$stat2 and !$stat3 and !$stat4) {
        echo "Input Data Gagal";   
    }else{
        header('Location: save.php');    
    }
    
}
?>
<!DOCTYPE html>
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
            <h3>Berhasil Tambah Data</h3>
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