<?php
$aksi="module/sk_kerja/tambah_sk_aksi.php";
switch($_GET[aksi]){

default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER jabatan ------------------------- --- -->		
<?php
// $jam= Date("H:i:s");
?>	
<script type="text/javascript">
    
    function pilih(b){
      console.log(b);
      $('#nip').val(b);
      $('#myModal').modal('hide');

    }
    function cari(){
      $('#myModal').modal('show');
    }
  </script>
<h3 class="box-title margin text-center">Tambah Data SK Pegawai </h3>
<!-- <?php echo "$jam";?> -->
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Tambah Data SK Pegawai</h3>		 	
		</div>		
    <?php
  $hasil = mysql_query("SELECT max(no_sk) as terakhir from sk_krj"); $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir']; $lastNoUrut = substr($lastID,13, 20); $nextNoUrut = $lastNoUrut + 1;
  $nextID = "RS/LR/".date('m/y')."/".sprintf("%05s",$nextNoUrut);
?>
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=tambah_sk&aksi=tambah" role="form" method="post">             
     <div class="form-group">
    <label class="col-sm-4 control-label">Nomor SK</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="no_sk" placeholder="NomorSK" value="<?php echo $nextID; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-7">
      <input type="text" required="required" id="nip" name="nip" placeholder="NIP">
      <a type="button" class="btn btn-primary" onclick="cari()">Cari</a>
    </div>
  </div>
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data Karyawan</h4>
        </div>
        <div class="modal-body">
          <p>
            <table id="example2" class="table table-bordered table-striped">
<thead>
  <tr class="text-red">
    <th class="col-sm-1">No</th> 
    <th>NIP</th> 
    <th>Nama</th> 
    <th>Alamat</th>
    <th>Nomor Hp</th>
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * from sk_krj sk JOIN pegawai p ON sk.nip=p.nip WHERE sk.status_sk='nonaktif'";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 

?>

  <tr>
  <td><?php echo $no++; ?></td> 
  <td><?php echo $tampilkan['nip']; ?></td> 
  <td><?php echo $tampilkan['nm_pegawai']; ?></td>
  <td><?php echo $tampilkan['alamat']; ?></td>
  <td><?php echo $tampilkan['no_hp']; ?></td>
  <td align="center">
 <a type="button"  onclick="pilih(<?php echo $tampilkan['nip']; ?>)" class="btn btn-primary"> Pilih</a>
  </td>
  <?php
  }
  ?>
  </tr>
      </tbody>
    </table>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div></div></div>

   
  <div class="form-group">
    <label class="col-sm-4 control-label">Jabatan</label>
    <div class="col-sm-7">
      <select name="jabatan" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php $q = mysql_query ("select * from jabatan");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_jabatan']; ?>" 
<?php (@$h['nm_jabatan']==$k['nm_jabatan'])?print(" "):print(""); ?>  > <?php echo $k['id_jabatan']; echo " / ".$k['nm_jabatan']; ?>
</option> <?php } ?>
</select>
  </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Unit Kerja</label>
    <div class="col-sm-7">
      <select name="unit_kerja" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php $q = mysql_query ("select * from unit_krj");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_unit_krj']; ?>" 
<?php (@$h['nm_unit_krj']==$k['nm_unit_krj'])?print(" "):print(""); ?>  > <?php echo $k['id_unit_krj']; echo " / ".$k['nm_unit_krj']; ?>
</option> <?php } ?>
</select>
  </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Status Pegawai</label>
    <div class="col-sm-7">
      <select name="status_pegawai" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php $q = mysql_query ("select * from status_pegawai");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_status_pegawai']; ?>" 
<?php (@$h['status_pegawai']==$k['status_pegawai'])?print(" "):print(""); ?>  > <?php echo $k['id_status_pegawai']; echo " / ".$k['status_pegawai']; ?>
</option> <?php } ?>
</select>
  </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal SK</label>
        <div class="col-sm-7">
  <div class="col-sm-7">
    </div>
      <input type="date" class="form-control" required="required" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_sk">
  </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Selesai</label>
        <div class="col-sm-7">
  <div class="col-sm-7">
    </div>
      <input type="date" class="form-control" required="required" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_selesai">
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
		Data SK Pegawai</h3>	
		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
    <th class="col-sm-1">NIP</th> 
		<th class="col-sm-1">Nama Pegawai</th> 
		<th class="col-sm-1">Tanggal SK</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * from sk_krj sk JOIN jabatan j ON sk.id_jabatan=j.id_jabatan JOIN unit_krj u ON sk.id_unit_krj=u.id_unit_krj JOIN status_pegawai st ON sk.id_status_pegawai=st.id_status_pegawai JOIN pegawai  p ON p.nip=sk.nip WHERE sk.status_sk='aktif' and sk.jenis_sk='SK' order by sk.tgl_sk DESC";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_jadwal = $tampilkan['id_jadwal'];

?>

	<tr>
	<td><?php echo $no++; ?></td> 
  <td><?php echo $tampilkan['nip'];?></td> 
	<td><?php echo $tampilkan['nm_pegawai']; ?></td> 
	<td><?php echo $tampilkan['tgl_sk']; ?></td> 
	<td align="center">
	<a class="btn btn-xs btn-info" href="?module=tambah_sk&aksi=edit&no_sk=<?php echo $tampilkan['no_sk'];?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i></a>
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=tambah_sk&aksi=hapus&no_sk=<?php echo $tampilkan['no_sk'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_jadwal; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
$data=mysql_query("select * from sk_krj where no_sk='$_GET[no_sk]'");
$edit=mysql_fetch_array($data);
$flag_aktif=$edit['flag_aktif'];
?>

<!-- --- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Edit Data SK NO. <font color="red"> "<?php echo $_GET['no_sk']; ?>"</font></h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=tambah_sk&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">Nomor SK </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="no_sk" value="<?php echo $edit['no_sk']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly required="required" name="nip" value="<?php echo $edit['nip']; ?>">
    </div>
  </div>
<div class="form-group">
    <label class="col-sm-4 control-label">Tanggal SK</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" value="<?php echo $edit['tgl_sk']; ?>" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_sk">
    </div></div> 

    <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Selesai</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" value="<?php echo $edit['tgl_selesai']; ?>" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_selesai">
    </div></div> 

   <div class="form-group">
    <label class="col-sm-4 control-label">Jabatan</label>
    <div class="col-sm-5">
     <select name="jabatan" class="form-control">
<option value=" "> -- Pilih Jabatan -- </option>
<?php 
$q = mysql_query ("select * from jabatan");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_jabatan']; ?>" <?php if(($k['id_jabatan'])== ($edit['id_jabatan']))
        {echo "selected=\"selected\"";};?>
<?php (@$h['nm_jabatan']==$k['nm_jabatan'])?print(" "):print(""); ?>  > <?php echo $k['id_jabatan']; echo " / ".$k['nm_jabatan']; ?>
</option> <?php } ?>
</select>
    </div>
  </div>

     <div class="form-group">
    <label class="col-sm-4 control-label">Unit Kerja</label>
    <div class="col-sm-5">
     <select name="unit_kerja" class="form-control">
<option value=" "> -- Pilih Unit Kerja -- </option>
<?php 
$q = mysql_query ("select * from unit_krj");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_unit_krj']; ?>" <?php if(($k['id_unit_krj'])== ($edit['id_unit_krj']))
        {echo "selected=\"selected\"";};?>
<?php (@$h['nm_unit_krj']==$k['nm_unit_krj'])?print(" "):print(""); ?>  > <?php echo $k['id_unit_krj']; echo " / ".$k['nm_unit_krj']; ?>
</option> <?php } ?>
</select>
    </div>
  </div>

       <div class="form-group">
    <label class="col-sm-4 control-label">Status Pegawai</label>
    <div class="col-sm-5">
     <select name="status_pegawai" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php 
$q = mysql_query ("select * from status_pegawai");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_status_pegawai']; ?>" <?php if(($k['id_status_pegawai'])== ($edit['id_status_pegawai']))
        {echo "selected=\"selected\"";};?>
<?php (@$h['status_pegawai']==$k['status_pegawai'])?print(" "):print(""); ?>  > <?php echo $k['id_status_pegawai']; echo " / ".$k['status_pegawai']; ?>
</option> <?php } ?>
</select>
    </div>
  </div>


   <div class="form-group">
    <label class="col-sm-4 control-label">Status SK</label>
    <div class="col-sm-5">
    <input  class="minimal" name="status_sk" type="radio" value="aktif" <?php if(($edit['status_sk'])== "aktif")
        {echo "checked=\"checked\"";};?>/> Aktif &nbsp;&nbsp;
    <input class="minimal" name="status_sk" type="radio" value="nonaktif" <?php if(($edit['status_sk'])== "nonaktif")
        {echo "checked=\"checked\"";};?>/> Non Aktif
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