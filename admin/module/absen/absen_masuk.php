<?php
$aksi="module/absen/absen_masuk_aksi.php";


switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER pangkat ------------------------- --- -->	
<?php 
$jam= Date("H:i:s"); 

	if(($jam >= '07:00:00') && ($jam <'14:00:00'))
		{
			$shift_sekarang='PAGI';
			$shift_id='1';
		//	$jam_telat='07:00:05';
		}
	else if(($jam >= '14:00:00') && ($jam <'23:00:00'))
		{
			$shift_sekarang='SIANG';
			$shift_id='2';
		//	$jam_telat='14:00:05';
		}
		else{
			$shift_sekarang='MALAM';
			$shift_id='3';
		//	$jam_telat='23:00:05';
		}

		if($jam > $jam_telat){
			$ket="telat";
		}else{
			$ket="tepat";
		}




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
<h3 class="box-title margin text-center">Data Presesnsi Masuk Shift <font color ="red"><b> <?php echo "$shift_sekarang"; ?></b></font></h3>

<center> <div class="batas"> </div></center>
<br/>
<div class="row">
<div class="col-md-6">
	<div class="box box-solid box-warning">
		<div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-plus"></i>
		Data Presesnsi Masuk <?php echo "$jam"; ?></h3>	
		<a class="btn btn-default pull-right" href="?module=input_ijin">
		<i class="fa  fa-plus"></i>Input Karyawan Tidak Masuk</a>		 	
		</div>		
	<div class="box-body">
	 <form class="form-horizontal" action="<?php echo $aksi?>?module=absen_masuk&aksi=tambah" role="form" method="post"> 
	 <div class="form-group">
    <label class="col-sm-4 control-label">SHIFT</label>
    <div class="col-sm-7">
 <input type="text" class="form-control" required="required" name="shift_id"  placeholder="NIP" readonly value="<?php echo $_GET['id_shift'];?>">
    </div>  
    </div>     
    <div class="form-group">
    <label class="col-sm-4 control-label">Jam Terlambat</label>
    <div class="col-sm-7">
    	<?php 
	$s=mysql_fetch_array(mysql_query("select jam_mulai + INTERVAL 5 Minute as jam_telat from shift WHERE id_shift='$_GET[id_shift]'"));
	?>
      <input type="text" class="form-control" required="required" name="jam_telat" placeholder="NIP" readonly value="<?php echo $s['jam_telat'];?>">
    </div>  
    </div>      
     <div class="form-group">
    <label class="col-sm-4 control-label">Keterangan</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" required="required" name="keterangan" placeholder="NIP" readonly value="<?php echo $ket?>">
    </div>  
    </div>  
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP</label>
          <div class="col-sm-3">
      <input type="text" class="form-control" required="required" id="nip" name="nip" placeholder="NIP">
    </div>
    <div class="col-sm-4">
      
      <a type="button" class="btn btn-primary" onclick="cari()">Cari</a>
    </div>
  </div>
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
    <th>Jabatan</th>
    <th>Status Pegawai</th>
    <th>Unit Kerja</th>
    <th class="col-sm-1">AKSI</th>  
  </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT p.nip , p.nm_pegawai, j.nm_jabatan, st.status_pegawai , u.nm_unit_krj from pegawai p join sk_krj s on p.nip=s.nip join jabatan j on s.id_jabatan=j.id_jabatan join status_pegawai st on s.id_status_pegawai=st.id_status_pegawai join unit_krj u on s.id_unit_krj=u.id_unit_krj where s.status_sk='aktif'";
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
		Data Presesnsi Shift <?php echo "$shift_sekarang";?> <b></h3>	

		</div>		
	<div class="box-body">
	<table id="example2" class="table table-bordered table-striped">
<thead>
	<tr class="text-red">
		<th class="col-sm-1">No</th> 
		<th>Nama Pegawai</th> 
		<th>Shift</th> 
		<th>Jam Masuk</th> 
		<th>Ket</th>
		<th class="col-sm-1">AKSI</th> 	
	</tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "select DISTINCT(p.nm_pegawai) , a.tanggal, p.nm_pegawai , s.nama_shift, a.jam_masuk , a.id_absen, a.keterangan_masuk from absen a join pegawai p on a.nip = p.nip JOIN shift s on a.id_shift=s.id_shift where a.tanggal=CURRENT_DATE()  order by a.jam_masuk desc";
$tampil = mysql_query($sql);
$no=1;
while ($tampilkan = mysql_fetch_array($tampil)) { 
$id_absen = $tampilkan['id_absen'];s
?>
	<tr>
	<td><?php echo $no++; ?></td> 
	<td><?php echo $tampilkan['nm_pegawai']; ?></td> 
	<td><?php echo $tampilkan['nama_shift']; ?></td>
	<td><?php echo $tampilkan['jam_masuk']; ?></td>
	<td><?php echo $tampilkan['keterangan_masuk']; ?></td>
	<td align="center">
	<a class="btn btn-xs btn-danger" href="<?php echo $aksi ?>?module=absen_masuk&aksi=hapus&id_absen=<?php echo $tampilkan['id_absen'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $id_absen; ?>	?')"> <i class="glyphicon glyphicon-trash"></i></a>
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
}
?>