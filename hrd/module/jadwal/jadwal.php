<?php
$aksi="module/jadwal/jadwal_aksi.php";
switch($_GET[aksi]){

default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER jabatan ------------------------- --- -->		
<?php
// $jam= Date("H:i:s");
?>	
<head>
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
</head>
<h3 class="box-title margin text-center">Data Jadwal Pegawai </h3>
<!-- <?php echo "$jam";?> -->
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Tambah Data Jadwal Pegawai</h3>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=jadwal&aksi=tambah" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" required="required" id="nip" name="nip" placeholder="NIP">
    </div>
    <div class="col-sm-4">
      
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
    <th>Jabatan</th>
    <th>Status Pegawai</th>
    <th>Unit Kerja</th>
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT p.nip , p.nm_pegawai, j.nm_jabatan, st.status_pegawai , u.nm_unit_krj from pegawai p join sk_krj s on p.nip=s.nip join jabatan j on s.id_jabatan=j.id_jabatan join status_pegawai st on s.id_status_pegawai=st.id_status_pegawai join unit_krj u on s.id_unit_krj=u.id_unit_krj where s.status_sk='aktif' group by p.nip";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$nip = $tampilkan['nip'];

?>

  <tr>
  <td><?php echo $no++; ?></td> 
  <td><?php echo $tampilkan['nip']; ?></td> 
  <td><?php echo $tampilkan['nm_pegawai']; ?></td>
  <td><?php echo $tampilkan['nm_jabatan']; ?></td>
  <td><?php echo $tampilkan['status_pegawai']; ?></td>
  <td><?php echo $tampilkan['nm_unit_krj']; ?></td>
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
    <label class="col-sm-4 control-label">Shift</label>
    <div class="col-sm-7">
      <select name="shift" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php $q = mysql_query ("select * from shift");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_shift']; ?>" 
<?php (@$h['nama_shift']==$k['nama_shift'])?print(" "):print(""); ?>  > <?php echo $k['id_shift']; echo " / ".$k['nama_shift']; ?>
</option> <?php } ?>
</select>
  </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>
        <div class="col-sm-7">
  <div class="col-sm-7">
    </div>
      <input type="date" class="form-control" required="required" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tanggal">
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
		Data Jadwal Pegawai</h3>	
		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
    <th class="col-sm-1">NIP</th> 
		<th class="col-sm-1">Nama Pegawai</th> 
		<th class="col-sm-1">Shift</th> 
		<th class="col-sm-1">Tanggal</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "select * from jadwal j join pegawai p on j.nip=p.nip join shift s on j.id_shift=s.id_shift group by p.nip";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_jadwal = $tampilkan['id_jadwal'];
$id_shift = $tampilkan['id_shift'];


?>

	<tr>
	<td><?php echo $no++; ?></td> 
  <td><?php echo $tampilkan['nip'];?></td> 
	<td><?php echo $tampilkan['nm_pegawai']; ?></td> 
	<td><?php echo $tampilkan['nama_shift']; ?></td> 
	<td><?php echo $tampilkan['tanggal']; ?></td> 
	<td align="center">
	<a class="btn btn-xs btn-info" href="?module=jadwal&aksi=edit&id_jadwal=<?php echo $tampilkan['id_jadwal'];?>" alt="Edit Data"><i class="glyphicon glyphicon-pencil"></i></a>
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=jadwal&aksi=hapus&id_jadwal=<?php echo $tampilkan['id_jadwal'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_jadwal; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
$data=mysql_query("select * from jadwal where id_jadwal='$_GET[id_jadwal]'");
$edit=mysql_fetch_array($data);
$flag_aktif=$edit['flag_aktif'];
$id_shift=$edit['id_shift'];
?>

<!-- --- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Edit Data Shift "<?php echo $edit['id_shift']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=jadwal&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Jadwal </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_jadwal" value="<?php echo $edit['id_jadwal']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nip" value="<?php echo $edit['nip']; ?>">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Shift</label>
    <div class="col-sm-5">
     <select name="shift" class="form-control">
<option value=" "> -- Pilih Shift -- </option>
<?php $q = mysql_query ("select * from shift");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['id_shift']; ?>" <?php if(($k['id_shift'])== ($edit['id_shift']))
        {echo "selected=\"selected\"";};?>
<?php (@$h['nama_shift']==$k['nama_shift'])?print(" "):print(""); ?>  > <?php echo $k['id_shift']; echo " / ".$k['nama_shift']; ?>
</option> <?php } ?>
</select>
    </div>
  </div>

  
<div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" value="<?php echo $edit['tanggal']; ?>" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tanggal">
    </div></div>  

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