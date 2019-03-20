<?php
$aksi="module/cuti/cuti_aksi.php";


switch($_GET[aksi]){
default:
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
<!----- ------------------------- MENAMPILKAN DATA MASTER pangkat ------------------------- --- -->		
		
<h3 class="box-title margin text-center">Data Cuti Karyawan</h3>

<center> <div class="batas"> </div></center>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Data Cuti Karyawan</h3>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=cuti&aksi=tambah" role="form" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" id="nip" name="nip" placeholder="NIP">
       <a type="button" class="btn btn-primary" onclick="cari()">Cari</a>
    </div>
  </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data  Karyawan</h4>
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
$sql = "SELECT p.nip , p.nm_pegawai, j.nm_jabatan, st.status_pegawai , u.nm_unit_krj from pegawai p join sk_krj s on p.nip=s.nip join jabatan j on s.id_jabatan=j.id_jabatan join status_pegawai st on s.id_status_pegawai=st.id_status_pegawai join unit_krj u on s.id_unit_krj=u.id_unit_krj  where s.status_sk='aktif' ";
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
    <label class="col-sm-4 control-label">Periode</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="periode" placeholder="Periode">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Jumlah Cuti</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="jml_cuti" placeholder="Jumlah Cuti">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-7">
	<hr/>
      <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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
		Data Jumlah Cuti <b></h3>	

		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
		<th>Nama Pegawai</th> 
		<th>Periode</th> 
		<th>Jumlah Cuti</th> 
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT c.id_cuti ,p.nm_pegawai , c.nip , c.periode , c.jml_cuti from pegawai p join cuti c on  p.nip=c.nip";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_cuti = $tampilkan['id_cuti'];

?>

	<tr>
	<td><?php echo $no++; ?></td> 
	<td><?php echo $tampilkan['nm_pegawai']; ?></td> 
	<td><?php echo $tampilkan['periode']; ?></td>
	<td><?php echo $tampilkan['jml_cuti']; ?></td>
	<td align="center">
	<a class="btn btn-xs btn-info"   data-toggle="tooltip" title="Edit Data <?php echo $tampilkan['id_cuti'];?>" href="?module=cuti&aksi=edit&id_cuti=<?php echo $tampilkan['id_cuti'];?>"><i class="glyphicon glyphicon-edit"></i></a>
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=cuti&aksi=hapus&id_cuti=<?php echo $tampilkan['id_cuti'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_cuti; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
$data=mysql_query("select * from cuti where id_cuti='$_GET[id_cuti]'");
$edit=mysql_fetch_array($data);
?>

<!----- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Edit Data Cuti "<?php echo $_GET['id_cuti']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=cuti&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Cuti </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_cuti" value="<?php echo $edit['id_cuti']; ?>" >
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly required="required" name="nip" value="<?php echo $edit['nip']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">Periode</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="periode" value="<?php echo $edit['periode']; ?>">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Jumlah Cuti</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="jml_cuti" value="<?php echo $edit['jml_cuti']; ?>">
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