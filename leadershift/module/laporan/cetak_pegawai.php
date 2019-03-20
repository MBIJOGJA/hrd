<?php 
include "head.php";
$nip=$_POST['nip'];
?>
          <section class="content-header">
            <h1>
             Laporan
              <small>Data Pegawai</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Laporan</a></li>
              <li class="active">Data Pegawai</li>
            </ol>
          </section>

           
          <section class="content">
            <div class="text-center">
			<h3><img src="logo.png"/></h3>
<!-- 			<b>Rumah Sakit Lestari Raharja <br/>
			Kota Magelang</b -->>
			</div><br/>
             
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Pegawai</h3>
				<span class="pull-right">
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
<table class="table table-bordered table-striped">
<thead>
	<tr class="text-black">
		<th class="col-xs-1">No</th>
		<th class="col-sm-1">NIP</th>
		<th class="col-sm-3">Nama pegawai</th>
		<th class="col-sm-1">JK</th> 
		<th>Tempat/Tgl. Lahir</th> 
		<th class="col-sm-1">No. HP</th> 
		<th class="col-sm-1">Email</th>
		<th class="col-sm-1">Tgl. Masuk</th>		
	</tr>
</thead>

<tbody>
<?php 

// Tampilkan data dari Database
$sql = "SELECT * FROM pegawai where nip='$nip'";
$tampil = mysql_query($sql);
$no=1;
while ($data = mysql_fetch_array($tampil)) { ?>

	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $data['nip']; ?></td>
	<td><?php echo $data['nm_pegawai']; ?></td>
	<td><?php echo $data['jk']; ?></td>
	<td><?php echo $data['tpt_lhr'] .", ". IndonesiaTgl($data['tgl_lhr']); ?></td>
	<td><?php echo $data['no_hp']; ?></td>
	<td><?php echo $data['email']; ?></td>	
	<td><?php echo IndonesiaTgl($data['tgl_msk']); ?></td>
<?php
}
?>
	</tr>
			</tbody>
		</table>	
              </div><!-- /.box-body -->

<!-- Data Pendidikan -->
              <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Pendidikan</h3>
				<span class="pull-right">
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
<table class="table table-bordered table-striped">
<thead>
	<tr class="text-black">
		<th class="col-xs-1">No</th>
		<th class="col-sm-1">NIP</th>
		<th class="col-sm-3">Nama pegawai</th>
		<th class="col-sm-1">Tahun Pendidikan</th> 
		<th>Jenjang</th> 
		<th class="col-sm-1">Nama Pendidikan</th> 	
	</tr>
</thead>

<tbody>
<?php 

// Tampilkan data dari Database
$a = mysql_query("SELECT * FROM pegawai pe join pendidikan pn on pe.nip=pn.nip  where pe.nip='$nip'");
$no=1;
while ($c = mysql_fetch_array($a)) { ?>


	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $c['nip']; ?></td>
	<td><?php echo $c['nm_pegawai']; ?></td>
	<td><?php echo $c['thn_pend']; ?></td>
	<td><?php echo $c['jenjang']; ?></td>
	<td><?php echo $c['nm_pendidikan']; ?></td>
<?php
}
?>
	</tr>
			</tbody>
		</table>	
              </div>

<!-- Data Absensi -->
              <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Absensi</h3>
				<span class="pull-right">
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
<table class="table table-bordered table-striped">
<thead>
	<tr class="text-black">
		<th class="col-xs-1">No</th>
		<th class="col-sm-1">NIP</th> 
		<th class="col-sm-3">Nama</th>
		<th class="col-sm-1">Tanggak</th> 
		<th class="col-sm-1">Nama Hukuman</th> 
		
	</tr>
</thead>

<tbody>

	<!-- HUKUMAN -->

<?php 
// Tampilkan data dari Database
$a = mysql_query("select  tanggal,keterangan,COUNT(*) as jumlah
from jadwal
group by tanggal, keterangan");
$no=1;
while ($c = mysql_fetch_array($a)) { ?>


	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $c['tanggal']; ?></td>
	
	<td>
	<?php if ($c['keterangan']=='sakit') {?>
	<?php echo $c['jumlah']; ?>
	<?php }?>
	</td>

	<td>
	<?php if ($c['keterangan']=='Alfa') {?>
	<?php echo $c['jumlah']; ?>
	<?php } ?>
	</td>

	<td>
	
	<?php if ($c['keterangan']=='lain-lain') {?>
	<?php echo $c['jumlah']; ?>
	<?php } ?>
	</td>

<?php
}
?>
	</tr>
			</tbody>

		</table>	
              </div>

              <!-- HUKUMAN -->
             <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Hukuman</h3>
				<span class="pull-right">
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
<table class="table table-bordered table-striped">
<thead>
	<tr class="text-black">
		<th class="col-xs-1">No</th>
		<th class="col-sm-1">NIP</th>
		<th class="col-sm-3">Nama pegawai</th>
		<th class="col-sm-1">Tanggal Hukuman</th> 
		<th class="col-sm-1">Nama Hukuman</th> 	
	</tr>
</thead>

<tbody>
<?php 

// Tampilkan data dari Database
$a = mysql_query("SELECT * FROM pegawai pe join hukuman pn on pe.nip=pn.nip  where pe.nip='$nip'");
$no=1;
while ($c = mysql_fetch_array($a)) { ?>


	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $c['nip']; ?></td>
	<td><?php echo $c['nm_pegawai']; ?></td>
	<td><?php echo $c['tgl_hukuman']; ?></td>
	<td><?php echo $c['nm_hukuman']; ?></td>
<?php
}
?>
	</tr>
			</tbody>
		</table>	
              </div>

                           <!-- Prestasi -->
             <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title center">Daftar Prestasi</h3>
				<span class="pull-right">
				Magelang, <?php echo Indonesia2Tgl(date('Y-m-d'));?> 
				</span>					
              </div>
              <div class="box-body">
<table class="table table-bordered table-striped">
<thead>
	<tr class="text-black">
		<th class="col-xs-1">No</th>
		<th class="col-sm-1">NIP</th>
		<th class="col-sm-3">Nama pegawai</th>
		<th class="col-sm-1">Tanggal Prestasi</th> 
		<th class="col-sm-1">Nama Prestasi</th> 	
	</tr>
</thead>

<tbody>
<?php 

// Tampilkan data dari Database
$a = mysql_query("SELECT * FROM pegawai pe join prestasi pn on pe.nip=pn.nip  where pe.nip='$nip'");
$no=1;
while ($c = mysql_fetch_array($a)) { ?>


	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $c['nip']; ?></td>
	<td><?php echo $c['nm_pegawai']; ?></td>
	<td><?php echo $c['tgl_prestasi']; ?></td>
	<td><?php echo $c['nm_prestasi']; ?></td>
<?php
}
?>
	</tr>
			</tbody>
		</table>	
              </div>
            </div>
          </section><!-- /.content -->
<?php
include "tail.php";
?>