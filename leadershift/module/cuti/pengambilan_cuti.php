<?php
$aksi="module/cuti/pengambilan_cuti_aksi.php";


switch($_GET[aksi]){
default:
?>
<!-- ---------------------------- MENAMPILKAN DATA MASTER pangkat ---------------------------- -->		
	<head>
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
  <script src="plugin/jquery.min.js"></script>
  <script src="plugin/bootstrap.min.js"></script>
  </head>	
  <script type="text/javascript">
    
    function pilih(a,b){
      console.log(a);
      console.log(b);
      $('#nip').val(b);
      $('#id_cuti').val(a);
      $('#myModal').modal('hide');

    }
    function cari(){
      $('#myModal').modal('show');
    }
  </script>
<h3 class="box-title margin text-center">Data Pengajuan Cuti Karyawan</h3>

<center> <div class="batas"> </div></center>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Data Pengambilan Cuti Karyawan</h3>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=pengambilan_cuti&aksi=tambah" role="form" method="post">             
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
          <h4 class="modal-title">Data Cuti Karyawan</h4>
        </div>
        <div class="modal-body">
          <p>
            <table id="example2" class="table table-bordered table-striped">
<thead>
  <tr class="text-red">
    <th class="col-sm-1">No</th> 
    <th>NIP</th> 
    <th>Nama</th> 
    <th>Jumlah Cuti</th>
    <th>Sisa Cuti</th>
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT c.id_cuti , c.nip, c.jml_cuti , c.sisa_cuti,p.nm_pegawai from cuti c join pegawai p on c.nip=p.nip where c.flag_status='Y'";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_pengambilan_cuti = $tampilkan['id_pengambilan_cuti'];

?>

  <tr>
  <td><?php echo $no++; ?></td> 
  <td><?php echo $tampilkan['nip']; ?></td> 
  <td><?php echo $tampilkan['nm_pegawai']; ?></td>
  <td><?php echo $tampilkan['jml_cuti']; ?></td>
  <td><?php echo $tampilkan['sisa_cuti']; ?></td>
  <td align="center">
 <a type="button"  onclick="pilih(<?php echo $tampilkan['id_cuti']; ?>,<?php echo $tampilkan['nip']; ?>)" class="btn btn-primary"> Pilih</a>
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
    <label class="col-sm-4 control-label">ID Cuti</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" id="id_cuti" name="id_cuti" placeholder="ID Cuti">
    </div>
  </div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Cuti</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_cuti">
  </div>
</div>

   <div class="form-group">
    <label class="col-sm-4 control-label">Jumlah Cuti</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="jml_cuti" placeholder="Jumlah Cuti (Hari)">
  </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label">Alasan</label>
    <div class="col-sm-7">
      <select name="alasan" class="form-control">
        <option value="sakit"> Sakit</option>
        <option value="ijin">Ijin </option>
        <option value="lain-lain">Lain-Lain </option>
      </select>
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
		Data Pengajuan Cuti<b></h3>	

		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
		<th>Nama Pegawai</th> 
		<th>Periode</th> 
    <th>Sisa Cuti</th>
    <th>ACC Cuti</th>
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT p.nm_pegawai , pe.id_pengambilan_cuti , c.id_cuti , c.jml_cuti , c.sisa_cuti , pe.jml_cuti , pe.flag_hrd , c.periode from pegawai p join cuti c on p.nip=c.nip join pengambilan_cuti pe on c.id_cuti=pe.id_cuti";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_pengambilan_cuti = $tampilkan['id_pengambilan_cuti'];

?>

	<tr>
	<td><?php echo $no++; ?></td> 
	<td><?php echo $tampilkan['nm_pegawai']; ?></td> 
	<td><?php echo $tampilkan['periode']; ?></td>
  <td><?php echo $tampilkan['sisa_cuti']; ?></td>
  <td><?php echo $tampilkan['flag_hrd']; ?></td>
	<td align="center">
	<a class="btn btn-xs btn-info"   data-toggle="tooltip" title="Edit Data <?php echo $tampilkan['id_pengambilan_cuti'];?>" href="?module=pengambilan_cuti&aksi=edit&id_pengambilan_cuti=<?php echo $tampilkan['id_pengambilan_cuti'];?>"><i class="glyphicon glyphicon-edit"></i></a>
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=pengambilan_cuti&aksi=hapus&id_pengambilan_cuti=<?php echo $tampilkan['id_pengambilan_cuti'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_pengambilan_cuti; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
$data=mysql_query("select * from pengambilan_cuti where id_pengambilan_cuti='$_GET[id_pengambilan_cuti]'");
$edit=mysql_fetch_array($data);
?>

<!----- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center">Edit Data Permohonan Cuti "<?php echo $_GET['id_pengambilan_cuti']; ?>"</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=pengambilan_cuti&aksi=edit" role="form" method="post">             

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Pengambilan Cuti </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_pengambilan_cuti" value="<?php echo $edit['id_pengambilan_cuti']; ?>" >
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">ID Cuti</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="id_cuti" value="<?php echo $edit['id_cuti']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Cuti</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" value="<?php echo $edit['tgl_cuti']; ?>" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_cuti">
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