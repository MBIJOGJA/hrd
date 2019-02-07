<?php
include "excel_reader2.php";
include "koneksi.php";
 
// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;
 
for ($i=3; $i<=$hasildata; $i++)
{
  $nip = $data->val($i,1); 
  $id_shift = $data->val($i,2);
  $tanggal = $data->val($i,3);
  $jam_masuk = $data->val($i,4);
  $jam_pulang = $data->val($i,5);
  $keterangan_masuk = $data->val($i,6);
  $keterangan_pulang = $data->val($i,7);
  // $created_by = 'Admin'; 
  // $date = date('Y-m-d H:i:s');
  $rand = rand();
 
$query = "INSERT INTO absen  VALUES (null,'$nip','$id_shift','$tanggal', '$jam_masuk', '$jam_pulang','$keterangan_masuk','$keterangan_pulang')";
$hasil = mysql_query($query);
 
if ($hasildata) $sukses++;
else $gagal++;
 
echo "< pre>";
print_r($query);
echo "< /pre>";
 
}
echo "<b>import data selesai.</b>";
echo "Data yang berhasil di import : ";
echo "Data yang gagal diimport : ";
echo "back import";
?>