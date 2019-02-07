<?php
include ("../inc/koneksi.php"); 
include ("../inc/fungsi_hdt");  ?>
<br/>

<div class="box box-solid box-primary">
<div class="box-header">
<i class="fa fa-info"></i>Informasi
</div>
<div class="box-body">
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            	<?php
            		$sq = mysql_query("SELECT COUNT(id_pengambilan_cuti) as jumlah FROM pengambilan_cuti WHERE flag_hrd='N'");
					while ($q = mysql_fetch_array($sq)) { 
						echo "<h3>";
				echo $q['jumlah'];echo "</h3>";
				}?>
              

              <p>Pengajuan Cuti</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            	<?php
            		$sq = mysql_query("SELECT COUNT(p.nip) as pegawai from pegawai p join sk_krj sk on p.nip=sk.nip WHERE sk.tgl_selesai + INTERVAL '7' DAY and sk.status_sk='aktif'");
					while ($q = mysql_fetch_array($sq)) { 
						echo "<h3>";
				echo $q['pegawai'];echo "</h3>";
				}?>


              <p>Habis Kontrak</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
            		$sq = mysql_query("select count(nip) as pegawai from pegawai");
					while ($q = mysql_fetch_array($sq)) { 
						echo "<h3>";
				echo $q['pegawai'];echo "</h3>";
				}?>

              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?module=pegawai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
               <?php
            		$sq = mysql_query("SELECT COUNT(id_absen) as keterangan from absen where keterangan_masuk='telat' and tanggal=CURRENT_DATE() ");
					while ($q = mysql_fetch_array($sq)) { 
						echo "<h3>";
				echo $q['keterangan'];echo "</h3>";
				}?>

              <p>Pegawai Telat</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <?php
$namaBln = array("1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni", 
           "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
include ("../inc/koneksi.php"); 
include ("../inc/fungsi_hdt");  ?>


</div>
</div><!-- /.row -->

 