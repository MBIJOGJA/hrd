<?php 
include "head.php";
?>
          <section class="content-header">
            <h1>
             Laporan
              <small>SK Kerja Pegawai</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>
              <li class="active">SK Kerja</li>
            </ol>
          </section>

           
          <section class="content">
            <div class="text-center">
			<h3><img src="logo.png"/></h3>
<!-- 			<b>Rumah Sakit Lestari raharja <br/>
			Kota Magelang</b> -->
			</div><br/>
             
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar SK Kerja Pegawai</h3>
				<span class="pull-right">				
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
                <table  class="table table-bordered table-striped">
<thead>
	<tr >
		<th>No. SK</th>
		<th>NIP</th>
		<th>Nama Pegawai</th> 
		<th>Tgl. SK</th> 
		<th>Unit Kerja</th> 
		<th>Jabatan</th>
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM sk_krj sk JOIN pegawai p ON sk.nip=p.nip JOIN jabatan j ON j.id_jabatan=sk.id_jabatan JOIN unit_krj u ON u.id_unit_krj=sk.id_unit_krj WHERE sk.status_sk='aktif' and sk.jenis_sk='SIP' order by p.nm_pegawai asc";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['no_sk'];
$msk=IndonesiaTgl($k['tgl_msk']);
?>

	<tr>	
	<td><?php echo $k['no_sk']; ?></a></td>
	<td><?php echo $k['nip']; ?></td>
	<td><?php echo $k['nm_pegawai']; ?></td>
	<td><?php echo IndonesiaTgl($k['tgl_sk']); ?></td>
	<td><?php echo $k['nm_unit_krj']; ?></td>
	<td><?php echo $k['nm_jabatan']; ?></td>
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
include "tail.php";?>