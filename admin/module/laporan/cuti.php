<?php 
include "head.php";
?>
          <section class="content-header">
            <h1>
             Laporan
              <small>Sisa Cuti Pegawai</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>
              <li class="active">Sisa Cuti Kerja</li>
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
                <h3 class="box-title center">Daftar Sisa Cuti  Pegawai</h3>
				<span class="pull-right">				
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
                <table  class="table table-bordered table-striped">
<thead>
	<tr >
	      <th class="col-xs-1">No</th>
        <th class="col-sm-2">NIP</th>
        <th class="col-sm-2">Nama Pegawai</th>
        <th class="col-sm-3">Sisa Cuti</th> 
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM cuti a, pegawai b where a.nip=b.nip";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$msk=IndonesiaTgl($k['tgl_msk']);
?>

	<tr>	
    <td><?php echo $no++; ?></a></td>   
    <td><?php echo $k['nip']; ?></a></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo $k['sisa_cuti']; ?></td>
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