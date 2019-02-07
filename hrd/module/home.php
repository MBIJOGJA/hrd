<?php
$namaBln = array("1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April", "5" => "Mei", "6" => "Juni", 
           "7" => "Juli", "8" => "Agustus", "9" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
include ("../koneksi.php"); 
include ("../inc/fungsi_hdt"); ?>
<br/>
<div class="box box-solid box-primary">
<div class="box-header">
<i class="fa fa-info"></i>Dashboard
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
            		$sq = mysql_query("SELECT COUNT(nip) as pegawai from pegawai ");
					while ($q = mysql_fetch_array($sq)) { 
						echo "<h3>";
				echo $q['pegawai'];echo "</h3>";
				}?>

              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
#include ("../inc/fungsi_hdt"); 
 $sql = "SELECT keterangan_masuk, COUNT( nip ) AS qty FROM  `absen` where tanggal=CURRENT_DATE() GROUP BY keterangan_masuk";  
 $hasil = mysql_query($sql);
?>
 
      <!--script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="http://code.highcharts.com/highcharts.js"></script>
      <script src="http://code.highcharts.com/modules/exporting.js"></script-->
    
    <script src="module/js/highcharts.js"></script>
    <script src="module/js/exporting.js"></script>
<div class="row">
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
  <h3 class="box-title">Data Pegawai</h3>
  <div class="box-tools pull-right">
  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
  <script type="text/javascript">
       $(function () {
       
    $('#bola').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: false,
        },
        title: {
            text: 'Data Kehadiran Pegawai hari ini'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Rumah Sakit Lestari Raharja',
            data: [
      <?php     
      while($data=mysql_fetch_array($hasil))
      { ?>
                ['<?php echo $data['keterangan_masuk']?>',   <?php echo $data['qty']?>],               
       <?php
       }//end while
       ?>
            ]
        }]
    });
});   
    </script>
   <div id="bola" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>                  

</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
  <h3 class="box-title">Data Pegawai</h3>
  <div class="box-tools pull-right">
  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Data Pegawai baru '
         },
         xAxis: {
            categories: ['Cluster']
         },
         yAxis: {
            title: {
               text: 'Jumlah Pegawai'
            }
         },
              series:             
            [
            <?php 
          include('config.php');
           $sql   = "select MONTH(tgl_msk) as bln , COUNT(nip) as qty from pegawai  group by bln";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
              $status=$ret['bln'];  
              if($status==1){
                $bulan_sekarang="Januari";
              }  
              else if($status==2){
                $bulan_sekarang="Februari";
              }  
              else if($status==3){
                $bulan_sekarang="Maret";
              } 
              else if($status==4){
                $bulan_sekarang="April";
              }    
               else if($status==5){
                $bulan_sekarang="Mei";
              }      
               else if($status==6){
                $bulan_sekarang="Juni";
              }   
               else if($status==7){
                $bulan_sekarang="juli";
              }      
               else if($status==8){
                $bulan_sekarang="Agustus";
              }  
               else if($status==9){
                $bulan_sekarang="September";
              }  
               else if($status==10){
                $bulan_sekarang="Oktober";
              }  
               else if($status==11){
                $bulan_sekarang="November";
              }  
               else if($status==12){
                $bulan_sekarang="Desember";
              }  
                 $sql_jumlah   = "select MONTH(tgl_msk) as bln , COUNT(nip) as qty from pegawai  group by bln ";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['qty'];    
                    $bulan=$data['bln'];             
                  }             
                  ?>
                  {
                      name: '<?php echo $bulan_sekarang; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });  
</script>
<div id='container'></div>    
</div></div>
</div> 
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
  <h3 class="box-title">Data Prestasi</h3>
  <div class="box-tools pull-right">
  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
<script type="text/javascript">
    //2)script untuk membuat grafik
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'xxx', //letakan grafik di div id container
        //Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Prestasi Pegawai',
                x: -20 //center
            },
            subtitle: {
                text: 'Lestari Raharja',
                x: -20
            },
            xAxis: { //X axis menampilkan data tahun 
                categories: [<?php 
        include"koneksi.php";
        $sql = mysql_query("select MONTH(tgl_prestasi) as bln from prestasi group by bln ");
while ($k = mysql_fetch_array($sql)) { 
        echo "'";echo $namaBln[$k['bln']];echo "', ";
        }?> ]
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Jumlah (per orang)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
      //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
      //akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
      //series adalah data yang akan dibuatkan grafiknya,
      //saat ini mungkin anda heran, buat apa label indonesia dikanan 
      //grafik, namun fungsi label ini sangat bermanfaat jika
      //kita menggambarkan dua atau lebih grafik dalam satu chart,
      //hah, emang bisa? ya jelas bisa dong, lihat tutorial selanjutnya 
            series: [{  
                name: 'Prestasi',  
        //data yang akan ditampilkan 
                data: [<?php        
        $sq = mysql_query("select COUNT(nip) as nip, MONTH(tgl_prestasi)as bln from prestasi group by bln ");
while ($q = mysql_fetch_array($sq)) { 
        echo $q['nip'];echo ", ";
        }?>]
            }]
        });
    });
    
});
    </script>
<div id="xxx" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
</div></div>
</div>
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
  <h3 class="box-title">Data Hukuman</h3>
  <div class="box-tools pull-right">
  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
<script type="text/javascript">
    //2)script untuk membuat grafik, perhatikan setiap komentar agar paham
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'yyy', //letakan grafik di div id container
        //Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                type: 'line',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Pelanggaran Pegawai',
                x: -20 //center
            },
            subtitle: {
                text: 'RS Lestari Raharja',
                x: -20
            },
            xAxis: { //X axis menampilkan data tahun 
                categories: [<?php        
        $sql = mysql_query("select month(tgl_hukuman) as bln from hukuman group by bln ");
while ($k = mysql_fetch_array($sql)) { 
        echo "'";echo $namaBln[$k['bln']];echo "', ";
        }?> ]
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Jumlah (orang)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
      //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
      //akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
      //series adalah data yang akan dibuatkan grafiknya,
      //saat ini mungkin anda heran, buat apa label indonesia dikanan 
      //grafik, namun fungsi label ini sangat bermanfaat jika
      //kita menggambarkan dua atau lebih grafik dalam satu chart,
      //hah, emang bisa? ya jelas bisa dong, lihat tutorial selanjutnya 
            series: [{  
                name: 'Hukuman',  
                name: 'Hukuman',  
        //data yang akan ditampilkan 
                data: [<?php        
        $sq = mysql_query("select COUNT(nip) as nip, month(tgl_hukuman)as bln from hukuman group by bln ");
while ($q = mysql_fetch_array($sq)) { 
        echo $q['nip'];echo ", ";
        }?>]
            }]
        });
    });
    
});
    </script>
<div id="yyy" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
</div></div>
</div></div>
     
</div>
</div><!-- /.row --
