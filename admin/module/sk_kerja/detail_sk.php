<?php
$aksi="module/sk_kerja/detail_sk_aksi.php";

switch($_GET[aksi]){
default:

?>
<?php 
break;
case "tampil": 
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER prestasi ------------------------- --- -->			
<h3 class="box-title margin text-center">Data SK Pegawai<br></h3>
<center> <div class="batas"> </div></center>
<hr/>
	<div class="box box-solid box-success">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="glyphicon glyphicon-thumbs-up"></i>
		Data Prestasi Pegawai </h3>
		<a class="btn btn-default pull-right" href="?module=tambah_sk&aksi=tambah">
		<i class="fa  fa-plus"></i> Tambah SK Baru</a>	
		</div>		
	<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
<thead>
	<tr class="text-green">
		<th class="col-sm-1">NIP</th>
		<th class="col-sm-2">Nama</th>
		<th class="col-sm-3">Jabatan</th> 
		<th>Unit Kerja</th> 
		<th>Status</th> 
		<th>Status SK</th> 
		<th>NomorSK</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 

// Tampilkan data dari Database
$nip=$_POST['nip'];
$sql = "select * from sk_krj sk join pegawai p on sk.nip=p.nip join jabatan j on sk.id_jabatan=j.id_jabatan join unit_krj unit on unit.id_unit_krj=sk.id_unit_krj join status_pegawai status on status.id_status_pegawai=sk.id_status_pegawai where sk.nip='$_GET[nip]'";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$no_sk = $k['no_sk'];
$status_sk=$k['status_sk'];?>

	<tr>	
	<td><?php echo $k['nip']; ?></a></td>
	<td><?php echo $k['nm_pegawai']; ?></a></td>
	<td><?php echo $k['nm_jabatan']; ?></a></td>
	<td><?php echo $k['nm_unit_krj']; ?></a></td>
	<td><?php echo $k['status_pegawai']; ?></a></td>
	<td><?php echo $k['status_sk']; ?></a></td>
	<td><?php echo $k['no_sk']; ?></a></td>
	<td>
		<?php

		if($status_sk=='aktif')
		{
		?>
	<a  class="btn btn-xs btn-info" href="?module=detail_sk&aksi=edit&no_sk=<?php echo $k['no_sk'];?>" alt="Edit Data">Detail</a>
 <a href='' class='btn btn-xs btn-danger'>Cetak</a>;
	<?php 	
}
else{	
	echo "<a href='' class='btn btn-xs btn-danger'>Cetak</a>";

}
?>
	</td>
	<?php
	}
	?>
	</tr>
			</tbody>
		</table>
	</div><!-- /.box-body -->
</div><!-- /.box -->
<?php 
break;
case "tambah": 
?>
<!----- ------------------------- TAMBAH DATA MASTER prestasi ------------------------- --- -->
<?php
  $hasil = mysql_query("SELECT max(id_prestasi) as terakhir from prestasi"); $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir']; $lastNoUrut = substr($lastID,13, 20); $nextNoUrut = $lastNoUrut + 1;
  $nextID = "PRE/ZT/".date('m/y')."/".sprintf("%04s",$nextNoUrut);
?>
<h3 class="box-title margin text-center">Tambah Data prestasi Baru</h3>
<hr/>

	<div class="box-body">
<form class="form-horizontal" action="<?php echo $aksi?>?module=prestasi&aksi=tambah" role="form" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">No. Prestasi / Tanggal</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" required="required" name="id_prestasi" value="<?php echo $nextID;?>">	  
    </div>
	<div class="col-sm-2">
	  <div class="input-group">
	<div class="input-group-addon">
       <i class="fa fa-calendar"> </i>
    </div>
      <input type="date" class="form-control" required="required" value="<?php echo date("Y-m-d"); ?>" name="tgl_prestasi">
	</div><!-- /.input group -->
	</div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="hidden" class="form-control" name="nip" value="<?php echo $_GET['nip'];?>" >
	  <input type="text" class="form-control" required="required" disabled value="<?php echo $_GET['nip'];?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama Pegawai</label>
    <div class="col-sm-5">
	<?php 
	$s=mysql_fetch_array(mysql_query("select nm_pegawai from pegawai where nip='$_GET[nip]'"));
	?>
      <input type="text" class="form-control" disabled value="<?php echo $s['nm_pegawai'];?>">
    </div>
  </div> 
  <div class="form-group">
    <label class="col-sm-4 control-label">Prestasi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nm_prestasi" placeholder="Nama prestasi">
    </div>
  </div>     

  <div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
	<hr/>
      <button type="submit"name="submit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
<a href="javascript:history.back()" class="btn btn-info pull-right"><i class="fa fa-backward"></i> Kembali</a>			 
    </div>
  </div> 
</form>
</div> 
<?php	  
break;
case "edit" :
$data=mysql_query("select * from sk_krj sk join pegawai p on sk.nip=p.nip join jabatan j on sk.id_jabatan=j.id_jabatan join unit_krj unit on unit.id_unit_krj=sk.id_unit_krj join status_pegawai status on status.id_status_pegawai=sk.id_status_pegawai where sk.no_sk='$_GET[no_sk]'");
$edit=mysql_fetch_array($data);
$flag_aktif=$edit['flag_aktif'];
$tgl_sk=$edit['tgl_sk'];
$tgl_selesai=$tgl_sk + 365;
?>

<!-- --- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Detail SK NO.  "<?php echo $_GET['no_sk']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=detail_sk&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">No SK </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="no_sk" value="<?php echo $edit['no_sk']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nip" value="<?php echo $edit['nip']; ?>">
    </div>
  </div>
    <div class="form-group">
    <label class="col-sm-4 control-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nm_pegawai" value="<?php echo $edit['nm_pegawai']; ?>">
    </div>
  </div>
      <div class="form-group">
    <label class="col-sm-4 control-label">Jabatan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="jabatan" value="<?php echo $edit['nm_jabatan']; ?>">
    </div>
  </div>
        <div class="form-group">
    <label class="col-sm-4 control-label">Unit Kerja</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="unit_krj" value="<?php echo $edit['nm_unit_krj']; ?>">
    </div>
  </div>
         <div class="form-group">
    <label class="col-sm-4 control-label">Status</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="status_pegawai" value="<?php echo $edit['status_pegawai']; ?>">
    </div>
  </div>
           <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal SK</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="tgl_sk" value="<?php echo $edit['tgl_sk']; ?>">
    </div>
  </div>

           <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Selesai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="tgl_selesai" value="<?php echo $edit['tgl_selesai']; ?>">
    </div>
  </div>
 

<div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
	<hr/>
<button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk" onclick="return confirm('ANDA YAKIN AKAN NONAKTIF SK <?php echo $no_sk; ?>  ?')"></i> NONAKTIF</button>
<a href="?module=jabatan">
<button class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal</button></a>
    </div>
</div>

</form>
</div>
</div>
<?php
break;
}
?>