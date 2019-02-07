<?php
$aksi="module/absen/absen_masuk.php";
switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER pangkat ------------------------- --- -->	
<?php 
$jam= Date("H:i:s"); 
?>
		
<h3 class="box-title margin text-center">Data Presesnsi </h3>

<center> <div class="batas"> </div></center>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Data Presesnsis</h3>		 	
		</div>		
	<div class="box-body">
	 <table id="example1" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
    <th class="col-sm-1">Shift</th> 
		<th class="col-sm-1">Jam Mulai</th> 
		<th class="col-sm-1">Jam Selesai</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "Select * from shift where flag_aktif='Y' ";
$tampil = mysql_query($sql);
$no=1;
while ($data = mysql_fetch_array($tampil)) { 
$id_shift = $data['id_shift'];?>

	<tr>
	<td><?php echo $no++; ?></td> 
  	<td><?php echo $data['nama_shift'];?></td> 
	<td><?php echo $data['jam_mulai']; ?></td> 
	<td><?php echo $data['jam_selesai']; ?></td> 
	<td>
	<a class="btn btn-xs btn-danger" href="?module=absen_masuk&aksi=tambah&id_shift=<?php echo $data['id_shift'];?>" onclick="return confirm('Pilih Shift <?php echo $data['nama_shift']; ?>?')"> <i class="fa fa-book"></i> Pilih?</a>
	</td>
	<?php
	}
	?>
	</tr>
			</tbody>
		</table>
	</div><!-- /.box-body -->
</div><!-- /.box -->



</div>
<center> <div class="batas"> </div></center>

<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Import File Excel</h3>		 	
		</div>		
	<div class="box-body">
	 <h3>Script Import File Excel</h3>
	 <form method="post" enctype="multipart/form-data" action="module/absen/jalan.php">
	 	Pilih File Excel*:
	 	<input name="fileexcel" type="file" class="btn btn-xs btn-info"  data-toggle="tooltip"> <br>
	 	<input name="submit" type="submit" value="Import" class="btn btn-primary">
	 </form>
* file yang bisa di import adalah .xls (Excel 2003-2007).

	</div><!-- /.box-body -->
</div><!-- /.box -->
<!-- --- ------------------------- END TAMBAH DATA MASTER pangkat ------------------------- --- -->
<?php
break;
}
?>