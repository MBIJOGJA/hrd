<?php
include "include/koneksi.php";

if ($_GET['module'] == "home") {
	include "module/home.php";
}
else if ($_GET['module'] == "pangkat") {
	include "module/pangkat/pangkat.php";	
}
else if ($_GET['module'] == "unit_krj") {
	include "module/unit_krj/unit_krj.php";	
}
else if ($_GET['module'] == "user") {
	include "module/user/user.php";	
}
else if ($_GET['module'] == "jabatan") {
	include "module/jabatan/jabatan.php";	
}
else if ($_GET['module'] == "lokasi") {
	include "module/lokasi/lokasi.php";
}
else if ($_GET['module'] == "edit_user") {
	include "module/edit_user.php";
}
else if ($_GET['module'] == "pegawai") {
include "module/pegawai/pegawai.php";
}
else if ($_GET['module'] == "status_pegawai") {
include "module/status_pegawai/status_pegawai.php";
}
else if ($_GET['module'] == "shift") {
include "module/shift/shift.php";
}
else if ($_GET['module'] == "jadwal") {
include "module/jadwal/jadwal.php";
}
else if ($_GET['module'] == "absen_masuk") {
include "module/absen/absen_masuk.php";
}
else if ($_GET['module'] == "absen_pulang") {
include "module/absen/absen_pulang.php";
}
else if ($_GET['module'] == "ijin") {
include "module/absen/ijin.php";
}
else if ($_GET['module'] == "cuti") {
include "module/cuti/cuti.php";
}
else if ($_GET['module'] == "pengambilan_cuti") {
include "module/cuti/pengambilan_cuti.php";
}
else if ($_GET['module'] == "konfirm_cuti") {
include "module/cuti/konfirm_cuti.php";
}
else if ($_GET['module'] == "sk_kerja") {
include "module/sk_kerja/sk_kerja.php";
}
else if ($_GET['module'] == "detail_sk") {
include "module/sk_kerja/detail_sk.php";
}
else if ($_GET['module'] == "absen") {
include "module/absen/absen.php";
}
else if ($_GET['module'] == "tambah_sk") {
include "module/sk_kerja/tambah_sk.php";
}
else if ($_GET['module'] == "hukuman") {
include "module/hukuman/hukuman.php";
}
else if ($_GET['module'] == "prestasi") {
include "./module/prestasi/prestasi.php";
}
else if ($_GET['module'] == "laporan") {
	include "module/laporan/laporan.php";	
}
else if ($_GET['module'] == "edit_user") {
	include "../leadershift/module/edit_user.php";	
}	
else if ($_GET['module'] == "input_ijin") {
	include "module/input_ijin/input_ijin.php";	
}
else if ($_GET['module'] == "str") {
	include "module/str/str.php";	
}
else if ($_GET['module'] == "sip") {
	include "module/sip/sip.php";	
}
?>