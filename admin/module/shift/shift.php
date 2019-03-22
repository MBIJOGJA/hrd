<?php
$aksi="module/shift/shift_aksi.php";
switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER jabatan ------------------------- --- -->			
<h3 class="box-title margin text-center">Data Master Shift</h3>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Tambah Data Shift</h3>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=shift&aksi=tambah" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">Nama Shift</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="nama_shift" placeholder="Nama Shift" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Jam Mulai</label>
    <div class="col-sm-7">
      <input type="time" class="form-control" required="required" name="jam_mulai" required>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-4 control-label">Jam Akhir</label>
    <div class="col-sm-7">
      <input type="time" class="form-control" required="required" name="jam_selesai" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Flag Aktif</label>
    <div class="col-sm-5">
    <input name="flag_aktif" class="minimal" type="radio" value="Y" checked> Aktif &nbsp;&nbsp;
    <input name="flag_aktif" class="minimal" type="radio" value="N"> Tidak Aktif
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-7">
	<hr/>
      <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i><i> Reset</i></button> 
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
		<i class="fa fa-male"></i>
		Data Master Shift</h3>	
		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
		<th class="col-sm-1">Nama Shift</th> 
		<th class="col-sm-1">Jam Mulai</th> 
		<th class="col-sm-1">Jam Selesai</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM shift";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_shift = $tampilkan['id_shift'];

?>

	<tr>
	<td><?php echo $no++; ?></td> 
	<td><?php echo $tampilkan['nama_shift']; ?></td> 
	<td><?php echo $tampilkan['jam_mulai']; ?></td> 
	<td><?php echo $tampilkan['jam_selesai']; ?></td> 
	<td align="center">
	<a class="btn btn-xs btn-info" href="?module=shift&aksi=edit&id_shift=<?php echo $tampilkan['id_shift'];?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i></a>
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=shift&aksi=hapus&id_shift=<?php echo $tampilkan['id_shift'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_shift; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
<!-- --- ------------------------- END TAMBAH DATA MASTER jabatan ------------------------- --- -->
<?php	
break;
case "edit" :
$data=mysql_query("select * from shift where id_shift='$_GET[id_shift]'");
$edit=mysql_fetch_array($data);
$flag_aktif=$edit['flag_aktif'];
?>

<!-- --- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Edit Data Shift "<?php echo $_GET['id_shift']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=shift&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Shift </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_shift" value="<?php echo $edit['id_shift']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama Shift</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nama_shift" value="<?php echo $edit['nama_shift']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Jam Mulai</label>
    <div class="col-sm-5">
      <input type="time" class="form-control" required="required" name="jam_mulai" value="<?php echo $edit['jam_mulai']; ?>">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Jam Akhir</label>
    <div class="col-sm-5">
      <input type="time" class="form-control" required="required" name="jam_selesai" value="<?php echo $edit['jam_selesai']; ?>">
    </div>
  </div>
  

     <div class="form-group">
    <label class="col-sm-4 control-label">Flag Aktif</label>
    <div class="col-sm-5">
    	<?php
    	if ($edit['flag_aktif'] == "Y") echo " <input name='flag_aktif' class='minimal' type='radio' value='Y' checked>Aktif <input name='flag_aktif' class='minimal' type='radio' value='N'>Tidak Aktif";?> &nbsp;&nbsp;
    	<?php

    if ($edit['flag_aktif'] == 'N') echo " <input name='flag_aktif' class='minimal' type='radio' value='Y'>Aktif <input name='flag_aktif' class='minimal' type='radio' value='N' checked>Tidak Aktif";?>
    </div>
  </div>

<div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
	<hr/>
<button type="submit"name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<a href="?module=jabatan">
<button class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal</button></a>
    </div>
</div>

</form>
</div>
</div>
<!----- ------------------------- END EDIT DATA MASTER jabatan ------------------------- ----->
<?php
break;
}
?>