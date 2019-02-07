<?php
include 'head.php';

$tgl_bet = $_POST['tanggal'];
$a=substr ($tgl_bet, 0,2);
$b=substr ($tgl_bet, 3,2);
$c=substr ($tgl_bet, 6,4);
$d= $c."-".$a."-".$b;
$e=substr ($tgl_bet, 13,2);
$f=substr ($tgl_bet, 16,2);
$g=substr ($tgl_bet, 19,4);
$h= $g."-".$e."-".$f;
#echo $h."     ".$d;
?>

          <section class="content-header">
            <h1>
             Laporan
              <small>Pegawai Habis Kontrak</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>
              <li class="active">Pegawai Habis Kontrak</li>
            </ol>
          </section>

           
          <section class="content">
            <div class="text-center">
			<h3><img src="logo.png"/></h3>
		<!-- 	<b>Rumah Sakit Lestari Raharja<br/>
			Kotamagelang</b> -->
			</div><br/>
             
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Pegawai Habis Kontrak</h3>
				<span class="pull-right">
				Tanggal: <?php echo IndonesiaTgl($h)." - ".IndonesiaTgl($d); ?>
				</span>
				
				
				
				</span>
              </div>
              <div class="box-body">
                <table  class="table table-bordered table-striped">
<thead>
	<tr>
		<th><?php echo $d;?></th>
		<th>Nomor SK</th>
		<th>NIP</th>
		<th>Nama Pegawai</th> 
		<th>Jabatan</th>
		<th>Unit Kerja</th>
		<th>Status</th>
		<th>Tanggal Selesai</th> 		 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * from pegawai p join sk_krj sk on p.nip=sk.nip join jabatan j on j.id_jabatan=sk.id_jabatan join unit_krj u on u.id_unit_krj=sk.id_unit_krj join status_pegawai s on s.id_status_pegawai=sk.id_status_pegawai where sk.status_sk='aktif' and sk.tgl_selesai between '".$d."' and '".$h."' ";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$no_sk = $k['no_sk'];?>

	<tr>
	<td><?php echo $no++; ?></td>	
	<td><?php echo $k['no_sk']; ?></a></td>
	<td><?php echo $k['nip']; ?></a></td>
	<td><?php echo $k['nm_pegawai']; ?></td>
	<td><?php echo $k['nm_jabatan']; ?></td>
	<td><?php echo $k['nm_unit_krj']; ?></td>
	<td><?php echo $k['status_pegawai']; ?></td>
	<td><?php echo Indonesia2Tgl($k['tgl_selesai']); ?></td>
	<?php
	}
	?>
	</tr>
			</tbody>
		</table>
              </div><!-- /.box-body -->
            </div>
          </section><!-- /.content -->

<?php
include "tail.php";
?>