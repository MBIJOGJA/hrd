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
<?php

function umur($tgl_lahir){
    $tgl=explode("/",$tgl_lahir);
    $cek_jmlhr1=cal_days_in_month(CAL_GREGORIAN,$tgl['1'],$tgl['2']);
    $cek_jmlhr2=cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));
    $sshari=$cek_jmlhr1-$tgl['0'];
    $ssbln=12-$tgl['1']-1;
    $hari=0;
    $bulan=0;
    $tahun=0;
//hari+bulan
    if($sshari+date('d')>=$cek_jmlhr2){
        $bulan=1;
        $hari=$sshari+date('d')-$cek_jmlhr2;
    }else{
        $hari=$sshari+date('d');
    }
    if($ssbln+date('m')+$bulan>=12){
        $bulan=($ssbln+date('m')+$bulan)-12;
        $tahun=date('Y')-$tgl['2'];
    }else{
        $bulan=($ssbln+date('m')+$bulan);
        $tahun=(date('Y')-$tgl['2'])-1;
    }

      $selisih=$tahun." Thn ".$bulan." Bln ";
    return $selisih;
}
switch($_GET['aksi']){
default:
?>

<?php
break;
case "habis_kontrak":
?>

<div class="text-center">
<h3>Data Pegawai Habis Kontrak</h3><hr/></div> 
<center>Silahkan Masukkan Tanggal Habis Kontrak</center><br>
<form class="form-horizontal" action="module/laporan/habis_kontrak.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>	
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
	<i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>
</div>
<?php
break;
case "data_pegawai":
?>
<hr/>
<div class="text-center">
<h3>Silahkan PIlih Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan PIlih NIP dan klik tombol cetak untuk cetak laporan data hukuman pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/cetak_pegawai.php" method="post">             
    <div class="form-group">
    <label class="col-sm-3 control-label">NIP</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="nip" id="nip" required="required" class="form-control pull-right" "/>

</div><!-- /.input group -->

</div>
    <div class="col-sm-2">
      
      <a type="button" class="btn btn-primary" onclick="cari()">Cari</a>
    </div>
<div class="col-sm-1">

<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>
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
$sql = "SELECT p.nip , p.nm_pegawai, j.nm_jabatan, st.status_pegawai , u.nm_unit_krj from pegawai p join sk_krj s on p.nip=s.nip join jabatan j on s.id_jabatan=j.id_jabatan join status_pegawai st on s.id_status_pegawai=st.id_status_pegawai join unit_krj u on s.id_unit_krj=u.id_unit_krj group by p.nip ";
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



<div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">

        <i class="fa fa-user-md"></i>
        Data Pegawai </h3>
        <span class="pull-right">
        <a class="btn btn-default" target="blank" href="module/laporan/cetakpegawai.php">
        <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak</a>
        </span>
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
<thead>
    <tr class="text-green">
        <th class="col-sm-1">NIP</th>
        <th class="col-sm-3">Nama pegawai</th>
        <th class="col-sm-1">JK</th> 
        <th>Tempat/Tgl. Lahir</th> 
        <th class="col-sm-1">No. HP</th> 
        <th class="col-sm-1">Email</th>
        <th class="col-sm-1">Tgl. Masuk</th>        
        <th class="col-sm-1">Aksi</th>  
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM pegawai";
$tampil = mysql_query($sql);
$no=1;
while ($data = mysql_fetch_array($tampil)) { ?>

    <tr>
    <td><?php echo $data['nip']; ?></td>
    <td><?php echo $data['nm_pegawai']; ?></td>
    <td><?php echo $data['jk']; ?></td>
    <td><?php echo $data['tpt_lhr'] .", ". IndonesiaTgl($data['tgl_lhr']); ?></td>
    <td><?php echo $data['no_hp']; ?></td>
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo IndonesiaTgl($data['tgl_msk']); ?></td>
    <td><a class="btn btn-xs btn-info" target="blank" href="module/laporan/cetak_pegawai.php&nip=<?php echo $data['nip'];?>">Cetak</a></td>
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
case "sk_kerja":
?>
<div class="text-center">
<h3>Data SK  Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan masukan tanggal dan klik tombol cetak untuk cetak laporan data hukuman pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/cetak_sk.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>


<h3 class="box-title margin text-center">Data SK Kerja</h3>
<center> <div class="batas"> </div></center>
<hr/>
    <div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-briefcase"></i>
        Daftar SK Kerja Aktif RS Lestari Raharja</h3>
        <span class="pull-right">       
        <a class="btn btn-default" target="blank" href="module/laporan/cetak_sk_kerja.php">
        <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak</a>
        </span>
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordeblue table-striped">
<thead>
    <tr class="text-green">
        <th>No. SK</th>
        <th>NIP</th>
        <th>Nama Pegawai</th> 
        <th>Tgl. SK</th> 
        <th>Unit Kerja</th> 
        <th>Jabatan</th>
        <th>Masa Kerja</th>
    </tr>
</thead>

<tbody>
    <!-- SIP -->
    <?php
break;
case "sip":
?>
<div class="text-center">
<h3>Data SIP  Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan masukan tanggal dan klik tombol cetak untuk cetak laporan data hukuman pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/cetak_sip.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>


<h3 class="box-title margin text-center">Data SIP Kerja</h3>
<center> <div class="batas"> </div></center>
<hr/>
    <div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-briefcase"></i>
        Daftar SK Kerja Aktif RS Lestari Raharja</h3>
        <span class="pull-right">       
        <a class="btn btn-default" target="blank" href="module/laporan/cetak_sip_kerja.php">
        <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak</a>
        </span>
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordeblue table-striped">
<thead>
    <tr class="text-green">
        <th>No. SIP</th>
        <th>NIP</th>
        <th>Nama Pegawai</th> 
        <th>Tgl. SIP</th> 
        <th>Unit Kerja</th> 
        <th>Jabatan</th>
<!--         <th>Masa Kerja</th> -->
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM sk_krj sk JOIN pegawai p ON sk.nip=p.nip JOIN jabatan j ON j.id_jabatan=sk.id_jabatan JOIN unit_krj u ON u.id_unit_krj=sk.id_unit_krj WHERE sk.status_sk='aktif' sk.jenis_sk='STR'";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['no_sk'];
$msk=IndonesiaTgl($k['tgl_msk']);
?>

    <tr>    
    <td><?php echo $k['no_sk']; ?></a></td>
    <td><?php echo $k['nip']; ?></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo IndonesiaTgl($k['tgl_sk']); ?></td>
    <td><?php echo $k['nm_unit_krj']; ?></td>
    <td><?php echo $k['nm_jabatan']; ?></td>
<!--     <td><?php echo umur($msk); ?></td> -->
    <?php
    }
    ?>
    </tr>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
<!-- STR -->
<?php
break;
case "str":
?>
<div class="text-center">
<h3>Data STR  Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan masukan tanggal dan klik tombol cetak untuk cetak laporan data hukuman pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/cetak_str.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>


<h3 class="box-title margin text-center">Data SIP Kerja</h3>
<center> <div class="batas"> </div></center>
<hr/>
    <div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-briefcase"></i>
        Daftar SK Kerja Aktif RS Lestari Raharja</h3>
        <span class="pull-right">       
        <a class="btn btn-default" target="blank" href="module/laporan/cetak_str_kerja.php">
        <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak</a>
        </span>
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordeblue table-striped">
<thead>
    <tr class="text-green">
        <th>No. STR</th>
        <th>NIP</th>
        <th>Nama Pegawai</th> 
        <th>Tgl. STR</th> 
        <th>Unit Kerja</th> 
        <th>Jabatan</th>
<!--         <th>Masa Kerja</th> -->
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM sk_krj sk JOIN pegawai p ON sk.nip=p.nip JOIN jabatan j ON j.id_jabatan=sk.id_jabatan JOIN unit_krj u ON u.id_unit_krj=sk.id_unit_krj WHERE sk.status_sk='aktif' and sk.jenis_sk='STR'";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['no_sk'];
$msk=IndonesiaTgl($k['tgl_msk']);
?>

    <tr>    
    <td><?php echo $k['no_sk']; ?></a></td>
    <td><?php echo $k['nip']; ?></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo IndonesiaTgl($k['tgl_sk']); ?></td>
    <td><?php echo $k['nm_unit_krj']; ?></td>
    <td><?php echo $k['nm_jabatan']; ?></td>
<!--     <td><?php echo umur($msk); ?></td>
 -->    <?php
    }
    ?>
    </tr>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<?php
break;
case "daftar_hukuman":
?>

<div class="text-center">
<h3>Data Hukuman Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan masukan tanggal dan klik tombol cetak untuk cetak laporan data hukuman pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/hukuman.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit"name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>
<div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-thumbs-down"></i>
        Data Hukuman Pegawai</h3> 
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
<thead>
    <tr class="text-green">
        <th class="col-xs-1">No</th>
        <th class="col-sm-2">No. Hukuman</th>
        <th class="col-sm-2">NIP</th>
        <th class="col-sm-3">Nama Pegawai</th> 
        <th>Tanggal</th> 
        <th>Hukuman</th>  
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM hukuman a, pegawai b where a.nip=b.nip ";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['id_hukuman'];?>

    <tr>
    <td><?php echo $no++; ?></a></td>   
    <td><?php echo $k['id_hukuman']; ?></a></td>
    <td><a target="blank"href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $k['nip'];?>"><?php echo $k['nip']; ?></a></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo Indonesia2Tgl($k['tgl_hukuman']); ?></td>
    <td><?php echo $k['nm_hukuman']; ?></td>
     
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
case "daftar_prestasi":
?>
<div class="text-center">
<h3>Data Prestasi Pegawai</h3><hr/></div>
<div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
<button type="button" class="btn btn-primary close" data-dismiss="alert" aria-hidden="true">&nbsp;<i class="fa fa-close "></i>&nbsp;</button>
<p><i class="icon fa fa-info"></i>
Silahkan masukan tanggal dan klik tombol cetak untuk cetak laporan data prestasi pegawai!
</p>
</div> 
<form class="form-horizontal" action="module/laporan/prestasi.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit"name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>
<div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-thumbs-up"></i>
        Data Prestasi Pegawai </h3>
         
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
<thead>
    <tr class="text-green">
        <th class="col-xs-1">No</th>
        <th class="col-sm-1">No. Prestasi</th>
        <th class="col-sm-2">NIP</th>
        <th class="col-sm-3">Nama Pegawai</th> 
        <th>Tanggal</th> 
        <th>Nama Prestasi</th>  
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM prestasi a, pegawai b where a.nip=b.nip ";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['id_prestasi'];?>

    <tr>    
    <td><?php echo $no++; ?></a></td>
    <td><?php echo $k['id_prestasi']; ?></a></td>
    <td><a target="blank"href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $k['nip'];?>"><?php echo $k['nip']; ?></a></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo Indonesia2Tgl($k['tgl_prestasi']); ?></td>
    <td><?php echo $k['nm_prestasi']; ?></td>
      
    <?php
    }
    ?>
    </tr>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
<!-- CUTI -->
<?php
break;
case "cuti":
?>

<div class="text-center">
<h3>Data Sisa Cuti  Pegawai</h3><hr/></div>
<
<div class="box box-solid box-success">
        <div class="box-header">
        <h3 class="btn btn disabled box-title">
        <i class="glyphicon glyphicon-thumbs-down"></i>
        Data Hukuman Pegawai</h3> 
        <span class="pull-right">       
        <a class="btn btn-default" target="blank" href="module/laporan/cuti.php">
        <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Cetak</a>
        </span>
        </div>      
    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
<thead>
    <tr class="text-green">
        <th class="col-xs-1">No</th>
        <th class="col-sm-2">NIP</th>
        <th class="col-sm-2">Nama Pegawai</th>
        <th class="col-sm-3">Sisa Cuti</th> 
    </tr>
</thead>

<tbody>
<?php 
// Tampilkan data dari Database
$sql = "SELECT * FROM cuti a, pegawai b where a.nip=b.nip  ";
$tampil = mysql_query($sql);
$no=1;
while ($k = mysql_fetch_array($tampil)) { 
$Kode = $k['id_hukuman'];?>

    <tr>
    <td><?php echo $no++; ?></a></td>   
    <td><?php echo $k['nip']; ?></a></td>
    <td><?php echo $k['nm_pegawai']; ?></td>
    <td><?php echo $k['sisa_cuti']; ?></td>
     
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
case "habis_kontrak":
?>

<div class="text-center">
<h3>Data Pegawai Habis Kontrak</h3><hr/></div> 
<center>Silahkan Masukkan Tanggal Habis Kontrak</center><br>
<form class="form-horizontal" action="module/laporan/habis_kontrak.php" method="post">             
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>   
    <div class="col-sm-3">
    <div class="input-group">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
  <input type="text" name="tanggal" required="required" class="form-control pull-right" id="reservation"/>
</div><!-- /.input group -->
</div>
<div class="col-sm-1">
<button type="submit" name="submit" onclick="this.form.target='_blank';return true;" class="btn btn-success"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div></div>  
</form>
</div>
<?php
break;
}
?>