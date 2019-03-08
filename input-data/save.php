<?php
<<<<<<< HEAD
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

/*echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
exit();
=======
$db = new PDO("mysql:host=localhost;dbname=sistempegawai","root","");
if(isset($_POST['save'])){
    $id = uniqid();
>>>>>>> 8d1a8df5d184001b177fe1084d987fd37e3d126b

    $nm_lengkap = $_POST['nm_lengkap'];
    $jk = $_POST['jk'];
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
    $nm_saudara1 = $_POST['nm_saudara1'];
    $usia_saudara1 = $_POST['usia_saudara1'];
    $pend_terakhir_saudara1 = $_POST['pend_terakhir_saudara1'];
    $pekerjaan_saudara1 = $_POST['pekerjaan_saudara1'];
    $nm_saudara2 = $_POST['nm_saudara2'];
    $usia_saudara2 = $_POST['usia_saudara2'];
    $pend_terakhir_saudara2 = $_POST['pend_terakhir_saudara2'];
    $pekerjaan_saudara2 = $_POST['pekerjaan_saudara2'];
    $nm_saudara3 = $_POST['nm_saudara3'];
    $usia_saudara3 = $_POST['usia_saudara3'];
    $pend_terakhir_saudara3 = $_POST['pend_terakhir_saudara3'];
    $pekerjaan_saudara3 = $_POST['pekerjaan_saudara3'];
    $nm_saudara4 = $_POST['nm_saudara4'];
    $usia_saudara4 = $_POST['usia_saudara4'];
    $pend_terakhir_saudara4 = $_POST['pend_terakhir_saudara4'];
    $pekerjaan_saudara4 = $_POST['pekerjaan_saudara4'];
    $nm_saudara5 = $_POST['nm_saudara5'];
    $usia_saudara5 = $_POST['usia_saudara5'];
    $pend_terakhir_saudara5 = $_POST['pend_terakhir_saudara5'];
    $pekerjaan_saudara5 = $_POST['pekerjaan_saudara5'];
    $nm_saudara6 = $_POST['nm_saudara6'];
    $usia_saudara6 = $_POST['usia_saudara6'];
    $pend_terakhir_saudara6 = $_POST['pend_terakhir_saudara6'];
    $pekerjaan_saudara6 = $_POST['pekerjaan_saudara6'];
    $nm_saudara7 = $_POST['nm_saudara7'];
    $usia_saudara7 = $_POST['usia_saudara7'];
    $pend_terakhir_saudara7 = $_POST['pend_terakhir_saudara7'];
    $pekerjaan_saudara7 = $_POST['pekerjaan_saudara7'];
    $nm_si = $_POST['nm_si'];
    $usia_si = $_POST['usia_si'];
    $pend_si = $_POST['pend_si'];
    $kerja_si = $_POST['kerja_si'];
    $nm_anak1 = $_POST['nm_anak1'];
    $jk_anak1 = $_POST['jk_anak1'];
    $nm_anak2 = $_POST['nm_anak2'];
    $jk_anak2 = $_POST['jk_anak2'];
    $umur_anak1 = $_POST['umur_anak1'];
    $umur_anak2 = $_POST['umur_anak2'];
    $pend_akhir_anak1 = $_POST['pend_akhir_anak1'];
    $pend_akhir_anak2 = $_POST['pend_akhir_anak2'];

    $jenjang_pend_sd = $_POST['jenjang_pend_sd'];
    $thn_pend_sd = $_POST['thn_pend_sd'];
    $nm_sklh_sd = $_POST['nm_sklh_sd'];
    $lulus_thn_sd = $_POST['lulus_thn_sd'];
    $jenjang_pend_smp = $_POST['jenjang_pend_smp'];
    $thn_pend_smp = $_POST['thn_pend_smp'];
    $nm_sklh_smp = $_POST['nm_sklh_smp'];
    $lulus_thn_smp = $_POST['lulus_thn_smp'];
    $jenjang_pend_smasmk = $_POST['jenjang_pend_smasmk'];
    $thn_pend_smasmk = $_POST['thn_pend_smasmk'];
    $nm_sklh_smasmk = $_POST['nm_sklh_smasmk'];
    $lulus_thn_smasmk = $_POST['lulus_thn_smasmk'];
    $jenjang_pend_d3 = $_POST['jenjang_pend_d3'];
    $thn_pend_d3 = $_POST['thn_pend_d3'];
    $nm_univ_d3 = $_POST['nm_univ_d3'];
    $lulus_thn_d3 = $_POST['lulus_thn_d3'];
    $jenjang_pend_s1 = $_POST['jenjang_pend_s1'];
    $thn_pend_s1 = $_POST['thn_pend_s1'];
    $nm_univ_s1 = $_POST['nm_univ_s1'];
    $lulus_thn_s1 = $_POST['lulus_thn_s1'];
    $jenjang_pend_s2 = $_POST['jenjang_pend_s2'];
    $thn_pend_s2 = $_POST['thn_pend_s2'];
    $nm_univ_s2 = $_POST['nm_univ_s2'];
    $lulus_thn_s2 = $_POST['lulus_thn_s2'];
    $jns_bhs1 = $_POST['jns_bhs1'];
    $kem_dengar1 = $_POST['kem_dengar1'];
    $kem_baca1 = $_POST['kem_baca1'];
    $kem_bicara1 = $_POST['kem_bicara1'];
    $kem_tulis1 = $_POST['kem_tulis1'];
    $jns_bhs2 = $_POST['jns_bhs2'];
    $kem_dengar2 = $_POST['kem_dengar2'];
    $kem_baca2 = $_POST['kem_baca2'];
    $kem_bicara2 = $_POST['kem_bicara2'];
    $kem_tulis2 = $_POST['kem_tulis2'];
    $jns_bhs3 = $_POST['jns_bhs3'];
    $kem_dengar3 = $_POST['kem_dengar3'];
    $kem_baca3 = $_POST['kem_baca3'];
    $kem_bicara3 = $_POST['kem_bicara3'];
    $kem_tulis3 = $_POST['kem_tulis3'];
    $nm_organisasi1 = $_POST['nm_organisasi1'];
    $waktu1 = $_POST['waktu1'];
    $jabatan1 = $_POST['jabatan1'];
    $nm_organisasi2 = $_POST['nm_organisasi2'];
    $waktu2 = $_POST['waktu2'];
    $jabatan2 = $_POST['jabatan2'];
    $nm_organisasi3 = $_POST['nm_organisasi3'];
    $waktu3 = $_POST['waktu3'];
    $jabatan3 = $_POST['jabatan3'];
    $nm_organisasi4 = $_POST['nm_organisasi4'];
    $waktu4 = $_POST['waktu4'];
    $jabatan4 = $_POST['jabatan4'];
    $nm_pelatihan1 = $_POST['nm_pelatihan1'];
    $waktu_1 = $_POST['waktu_1'];
    $penyelenggara1 = $_POST['penyelenggara1'];
    $nm_pelatihan2 = $_POST['nm_pelatihan2'];
    $waktu_2 = $_POST['waktu_2'];
    $penyelenggara2 = $_POST['penyelenggara2'];
    $nm_pelatihan3 = $_POST['nm_pelatihan3'];
    $waktu_3 = $_POST['waktu_3'];
    $penyelenggara3 = $_POST['penyelenggara3'];
    $nm_pelatihan4 = $_POST['nm_pelatihan4'];
    $waktu_4 = $_POST['waktu_4'];
    $penyelenggara4 = $_POST['penyelenggara4'];
    

    $nm1 = $_POST['nm1'];
    $hub1 = $_POST['hub1'];
    $no_telp1 = $_POST['no_telp1'];
    $alamat1 = $_POST['alamat1'];
    $nm2 = $_POST['nm2'];
    $hub2 = $_POST['hub2'];
    $no_telp2 = $_POST['no_telp2'];
    $alamat2 = $_POST['alamat2'];
    $jns_penyakit1 = $_POST['jns_penyakit1'];
    $wkt1 = $_POST['wkt1'];
    $rs_kota1 = $_POST['rs_kota1'];
    $jns_penyakit2= $_POST['jns_penyakit2'];
    $wkt2 = $_POST['wkt2'];
    $rs_kota2 = $_POST['rs_kota2'];
    $jns_penyakit3= $_POST['jns_penyakit3'];
    $wkt3 = $_POST['wkt3'];
    $rs_kota3 = $_POST['rs_kota3'];
    $jns_penyakit4= $_POST['jns_penyakit4'];
    $wkt4 = $_POST['wkt4'];
    $rs_kota4 = $_POST['rs_kota4'];
    $nm_perusahaan1 = $_POST['nm_perusahaan1'];
    $periode_krj1 = $_POST['periode_krj1'];
    $posisi1 = $_POST['posisi1'];
    $gaji_akhir1 = $_POST['gaji_akhir1'];
    $nm_perusahaan2 = $_POST['nm_perusahaan2'];
    $periode_krj2 = $_POST['periode_krj2'];
    $posisi2 = $_POST['posisi2'];
    $gaji_akhir2 = $_POST['gaji_akhir2'];
    $nm_perusahaan3 = $_POST['nm_perusahaan3'];
    $periode_krj3 = $_POST['periode_krj3'];
    $posisi3 = $_POST['posisi3'];
    $gaji_akhir3 = $_POST['gaji_akhir3'];
    $nm_perusahaan4 = $_POST['nm_perusahaan4'];
    $periode_krj4 = $_POST['periode_krj4'];
    $posisi4 = $_POST['posisi4'];
    $gaji_akhir4 = $_POST['gaji_akhir4'];
    $nm_perusahaan5 = $_POST['nm_perusahaan5'];
    $periode_krj5 = $_POST['periode_krj5'];
    $posisi5 = $_POST['posisi5'];
    $gaji_akhir5 = $_POST['gaji_akhir5'];


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