<?php
$aksi="module/cuti/konfirm_cuti_aksi.php";
switch($_GET[aksi]){

default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER jabatan ------------------------- --- -->		
<?php
// $jam= Date("H:i:s");
?>	
<h3 class="box-title margin text-center">Data Pengajuan Cuti Karyawan</h3>
<center> <div class="batas"> </div></center>
<hr/>
  <div class="box box-solid box-danger">
    <div class="box-header">
    <h3 class="btn btn disabled box-title">
    <i class="glyphicon glyphicon-thumbs-down"></i>
    Data Pengajuan Cuti yang Belum ACC </h3>
    
    </div>    
  <div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
<thead>
  <tr class="text-red">
    <th class="col-sm-1">No</th>
    <th class="col-sm-2">NIP</th>
    <th class="col-sm-3">Nama Pegawai</th> 
    <th>Tanggal Cuti</th> 
    <th>Jumlah Cuti (Hari)</th> 
    <th>Sisa Cuti (Hari)</th> 
    <th>Flag HRD</th> 
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT p.nip , p.nm_pegawai , pe.tgl_cuti , pe.jml_cuti , c.sisa_cuti , c.id_cuti , pe.id_pengambilan_cuti, pe.flag_hrd from pegawai p join cuti c on p.nip=c.nip JOIN pengambilan_cuti pe on pe.id_cuti = c.id_cuti where pe.flag_hrd='N' ";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$id_pengambilan_cuti = $k['id_pengambilan_cuti'];
$id_cuti = $k['id_cuti'];?>

  <tr>  
  <td><?php echo $no++; ?></td> 
  <td><?php echo $k['nip']; ?></a></td>
  <td><?php echo $k['nm_pegawai']; ?></td>
  <td><?php echo $k['tgl_cuti']; ?></td>
  <td><?php echo $k['jml_cuti']; ?></td>
  <td><?php echo $k['sisa_cuti']; ?></td>
  <td><?php echo $k['flag_hrd']; ?></td>
  <td align="center">
   <a href="?module=konfirm_cuti&aksi=edit&id_pengambilan_cuti=<?php echo $k['id_pengambilan_cuti'];?>" alt="Edit Data"><button class="btn btn-primary"> Detail</button></a>
  </td>
  <?php
  }
  ?>
  </tr>
      </tbody>
    </table>
  </div><!-- /.box-body -->
</div><!-- /.box -->
<!-- --- ------------------------- END TAMBAH DATA MASTER jabatan ------------------------- --- -->
<?php	
break;
case "edit" :
$data=mysql_query("SELECT p.nip , p.nm_pegawai , pe.tgl_cuti , pe.jml_cuti , c.sisa_cuti , c.id_cuti , pe.id_pengambilan_cuti, pe.flag_hrd, pe.alasan from pegawai p join cuti c on p.nip=c.nip JOIN pengambilan_cuti pe on pe.id_cuti = c.id_cuti where id_pengambilan_cuti='$_GET[id_pengambilan_cuti]'");
$edit=mysql_fetch_array($data);
$id_pengambilan_cuti=$edit['id_pengambilan_cuti'];
?>

<!-- --- ------------------------- EDIT DATA MASTER jabatan ------------------------- --- -->
<h3 class="box-title margin text-center"> Detail Data Pengajuan Cuti</h3>
<br/>
<form class="form-horizontal" action="<?php echo $aksi?>?module=konfirm_cuti&aksi=edit" role="form" method="post">           

  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="nip" value="<?php echo $edit['nip']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="nama" value="<?php echo $edit['nm_pegawai']; ?>">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">ID Cuti </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="id_cuti" value="<?php echo $edit['id_cuti']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-4 control-label">ID Pengambilan Cuti</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" readonly name="id_pengambilan_cuti" value="<?php echo $edit['id_pengambilan_cuti']; ?>" >
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Cuti </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="tgl_cuti" value="<?php echo $edit['tgl_cuti']; ?>">
    </div>
  </div>

      <div class="form-group">
    <label class="col-sm-4 control-label">Jumlah Cuti (Hari) </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="jml_cuti" value="<?php echo $edit['jml_cuti']; ?>">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-4 control-label">Sisa Cuti (Hari) </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="sisa_cuti" value="<?php echo $edit['sisa_cuti']; ?>">
    </div>
  </div>

      <div class="form-group">
    <label class="col-sm-4 control-label">Flag HRD </label>
    <div class="col-sm-5" >
      <select name="flag_hrd" class="form-control">
        <option value="N">N</option>
        <option value="Y">Y</option>
      </select>
    </div>
  </div>

        <div class="form-group">
    <label class="col-sm-4 control-label">Alasan </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="alasan" value="<?php echo $edit['alasan']; ?>">
    </div>
  </div>

<div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
  <hr/>
<button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Konfirmasi</button>
<a href="?module=konfirm_cuti">
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
