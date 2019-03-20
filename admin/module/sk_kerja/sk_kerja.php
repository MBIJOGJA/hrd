<?php
$aksi="module/sk_kerja/detail_sk.php";
$nip=$_POST['nip'];

switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER prestasi ------------------------- --- -->      
<h3 class="box-title margin text-center">Data Pegawai<br></h3>
<center> <div class="batas"> </div></center>
<hr/>
  <div class="box box-solid box-success">
    <div class="box-header">
    <h3 class="btn btn disabled box-title">
    <i class="glyphicon glyphicon-thumbs-up"></i>
    Data Pegawai </h3>
    <a class="btn btn-default pull-right" href="?module=tambah_sk&aksi=tambah">
    <i class="fa  fa-plus"></i> Tambah Data SK Kerja</a>  
    </div>    
  <div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
<thead>
  <tr class="text-green">
    <th class="col-sm-1">NIP</th>
    <th class="col-sm-2">Nama</th>
    <th class="col-sm-3">Jenis Kelamin</th> 
    <th>Agama</th> 
    <th>Nomor Hp</th> 
    <th>Tanggal Masuk</th> 
    <th>Email</th> 
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * from pegawai";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
?>

  <tr>  
  <td><?php echo $k['nip']; ?></a></td>
  <td><?php echo $k['nm_pegawai']; ?></a></td>
  <td><?php echo $k['jk']; ?></a></td>
  <td><?php echo $k['agama']; ?></a></td>
  <td><?php echo $k['no_hp']; ?></a></td>
  <td><?php echo IndonesiaTgl($k['tgl_msk']); ?></a></td>
  <td><?php echo $k['email']; ?></a></td>
  <td>
  <a  class="btn btn-xs btn-info" href="?module=detail_sk&aksi=tampil&nip=<?php echo $k['nip'];?>" alt="Edit Data">Detail</a>
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
}
?>