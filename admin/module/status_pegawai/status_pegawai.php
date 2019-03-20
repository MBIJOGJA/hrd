<?php
$aksi="module/status_pegawai/status_pegawai_aksi.php";


switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER pangkat ------------------------- --- -->			
<h3 class="box-title margin text-center">Data Master Data Status Pegawai</h3>
<center> <div class="batas"> </div></center>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Tambah Data Status Pegawai</h3>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=status_pegawai&aksi=tambah" role="form" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama Status Pegawai</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="status_pegawai" placeholder="Status Pegawai">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-7">
	<hr/>
      <button type="submit"name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i><i>Reset</i></button> 
    </div>
  </div>
</form>
	</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
<div class="col-md-6">
	<div class="box box-solid box-danger">
		<div class="box-header">
		<h3 class="btn disabled box-title">
		<i class="fa  fa-street-view"></i>
		Data Master Status Pegawai</h3>	
		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
		<th>Status Pegawai</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM status_pegawai";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_status_pegawai = $tampilkan['id_status_pegawai'];

?>

	<tr>
	<td><?php echo $no++; ?></td> 
	<td><?php echo $tampilkan['status_pegawai']; ?></td> 
	<td align="center">
	<a class="btn btn-xs btn-info" href="?module=status_pegawai&aksi=edit&id_status_pegawai=<?php echo $tampilkan['id_status_pegawai'];?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i></a>
	<a class="btn btn-xs btn-danger"href="<?php echo $aksi ?>?module=status_pegawai&aksi=hapus&id_status_pegawai=<?php echo $tampilkan['id_status_pegawai'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_status_pegawai; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
</div>
<!-- --- ------------------------- END TAMBAH DATA MASTER pangkat ------------------------- --- -->
<?php	
break;
case "edit" :
$data=mysql_query("select * from status_pegawai where id_status_pegawai='$_GET[id_status_pegawai]'");
$edit=mysql_fetch_array($data);
?>

<!-- --- ------------------------- EDIT DATA MASTER pangkat ------------------------- --- -->

<h3 class="box-title margin text-center">Edit Data Status Pegawai "<?php echo $_GET['id_status_pegawai']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=status_pegawai&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Pangkat </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_status_pegawai" value="<?php echo $edit['id_status_pegawai']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Status Pegawai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="status_pegawai"value="<?php echo $edit['status_pegawai']; ?>">
    </div>
  </div>
  
<div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
	<hr/>
<button type="submit"name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<a href="?module=pangkat">
<button class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal</button></a>
    </div>
</div>

</form>
</div>
</div>
<!-- --- ------------------------- END EDIT DATA MASTER pangkat ------------------------- --- -->
<?php
break;
}
?>
