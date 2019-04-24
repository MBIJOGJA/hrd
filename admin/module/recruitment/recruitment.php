<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<?php
include "koneksi.php";

$aksi="module/recruitment/recruitment_aksi.php";


switch($_GET[aksi]){
default:
?>
<!----- ------------------------- MENAMPILKAN DATA MASTER pegawai ------------------------- --- -->     
<h3 class="box-title margin text-center">Recuitment & Hiring</h3>
  <hr/>

  <div class="box box-solid box-primary">
    <div class="box-header">
      <h3 class="btn btn disabled box-title">
        <i class="fa fa-user-md"></i>
      Data recruitment </h3>
      <a class="btn btn-default pull-right" href="?module=recruitment&aksi=tambah">
        <i class="fa  fa-plus"></i> Tambah Data Recruitment</a> 
      </div>    
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="text-blue">
              <th style="width: 1%;">No</th>
              <th class="col-sm-3">Nama recruitment</th>
              <th class="col-sm-1">Posisi</th>
              <th class="col-sm-1">User Input</th>   
              <th class="col-sm-2">Tgl Lamaran</th>
              <th class="col-sm-1">Sumber Informasi</th> 
              <th class="col-sm-1">Progres Recuitment</th> 
              <th class="col-sm-1">Resume</th>
              <th class="col-sm-1">Status Recruitment</th>
              <th class="col-sm-1">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php 
// Tampilkan data dari Database
            $sql = "SELECT * FROM recruitment ";
            $tampil = mysql_query($sql);
            $no=1;
            while ($data = mysql_fetch_array($tampil)) { 
              $Kode = $data['id_hiring'];?>

              <tr>
                <td align="center"><?php echo $no++; ?></td> 
                <td><a href="?module=recruitment&aksi=detail_recruitment&nama=<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></a></td>
                <td><?php echo $data['posisi']; ?></td>
                <td><?php echo $data['user_input']; ?></td>
                <td><?php echo $data[''] ." ". IndonesiaTgl($data['tgl_lamaran']); ?></td>
                <td><?php echo $data['sumber']; ?></td>
                <td><?php echo $data['progres_recruitment']; ?></td>
                <td><?php echo $data['resume']; ?><a href="module/recruitment/file/<?php echo $data['resume']; ?>" ><i class="fa fa-download"></i></a></td>
                <td><?php echo $data['status_recruitment']; ?></td>
                <td align="center">
                  <a class="btn btn-xs btn-info"   data-toggle="tooltip" title="Edit Data <?php echo $data['id_hiring'];?>" href="?module=recruitment&aksi=edit&id_hiring=<?php echo $data['id_hiring'];?>"><i class="glyphicon glyphicon-edit"></i></a>
                  <a class="btn btn-xs btn-warning"   data-toggle="tooltip" title="Hapus Semua Data recruitment" href="<?php echo $aksi ?>?module=recruitment&aksi=hapus&id_hiring=<?php echo $data['id_hiring'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $Kode; ?>  ?')"> <i class="glyphicon glyphicon-trash"></i></a>
                  <br><br>
                  <a class="btn btn-xs btn-success"   data-toggle="tooltip" title="Link untuk form input data <?php echo $data['id_hiring'];?>" href="../input-data/" target="_blank"><i class="fa fa-link"></i></a>
                </td>
                <?php
              }
              ?>
            </tr>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

    <!-- ---------------------------- END MENAMPILKAN DATA MASTER recruitment ---------------------------- -->
    <?php 
    break;
    case "tambah": 

    ?>
    <!----- ------------------------- TAMBAH DATA MASTER recruitment ------------------------- --- -->
    <h3 class="box-title margin text-center">Tambah Data Recruitmen Baru</h3>
    <hr/>
    <form class="form-horizontal" action="<?php echo $aksi?>?module=recruitment&aksi=tambah" role="form" method="post" enctype="multipart/form-data">             

      <div class="box box-solid box-primary">
        <div class="box-header">
          <h3 class="btn btn disabled box-title">
            <i class="fa fa-user-md"></i> Informasi recruitment </h3>
            <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
              <i class="fa fa-minus"></i></a>
            </div>  
            <div class="box-body">
              <br>
              <div class="form-group">
                <label class="col-sm-4 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" required="required" name="nama" placeholder="Nama">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Posisi</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" required="required" name="posisi" placeholder="posisi">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">User Input</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" required="required" name="user_input" placeholder="User Input">
                </div>
              </div>  
              <div class="form-group">
                <label class="col-sm-4 control-label">Tgl. Lamaran</label>
                <div><div class="col-sm-2">
                  <input type="date" class="form-control" required="required" name="tgl_lamaran" placeholder="Tanggal Lamaran">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Sumber Informasi</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" value="<?php echo $edit['sumber']; ?>" name="sumber">
                </div>
              </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Progres Recruitment</label>
              <div class="col-sm-5">  
                <select name="progres_recruitment" class="form-control"><option> Pilih</option>
                  <option name="progres_recruitment" value="CV Screening"> CV Screening </option>
                  <option name="progres_recruitment" value="Pre-Interview"> Pre-Interview </option>
                  <option name="progres_recruitment" value="User Interview"> User Interview </option>
                  <option name="progres_recruitment" value="Skill Test"> Skill Test </option>
                  <option name="progres_recruitment" value="Medical Check-up"> Medical Check-up </option>
                  <option name="progres_recruitment" value="Additional Assessment"> Additional Assessment </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Resume (Attachment)</label>
              <div class="col-sm-5">
                <input type="file" class="form-control"  name="resume" placeholder="Resume (Attachment)">
                * file harus PDF (size maks 1mb).
              </div>
            </div> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Status Recruitment</label>
              <div class="col-sm-5">  
                <select name="status_recruitment" class="form-control"><option> Pilih</option>
                  <option name="status_recruitment" value="Pre-screening"> Pre-screening </option>
                  <option name="status_recruitment" value="Passed Interview"> Passed Interview</option>
                  <option name="status_recruitment" value="Failed Interview"> Failed Interview</option>
                  <option name="status_recruitment" value="Passed Test"> Passed Test</option>
                  <option name="status_recruitment" value="Failed Test"> Failed Test</option>
                  <option name="status_recruitment" value="Hired"> Hired </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4"></label>
              <div class="col-sm-5">
                <br/>
                <br>
                <br>
                <br>
                <button type="submit"name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> <i>Reset</i></button>
                <a href="javascript:history.back()" class="btn btn-info pull-right"><i class="fa fa-backward"></i> Kembali</a>       
              </div>
            </div> 
          </form>

<!----- ------------------------- END TAMBAH DATA MASTER pegawai ------------------------- --- -->
<?php
break;
case "edit":
$data=mysql_query("select * from recruitment where  id_hiring='$_GET[id_hiring]'");
$edit=mysql_fetch_array($data);
?>
<h3 class="box-title margin text-center">Edit Data Recruitment</h3>
<hr/>

<form class="form-horizontal" action="<?php echo $aksi?>?module=recruitment&aksi=edit" role="form" method="post">             

<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Edit Informasi Recruitment </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>  
  <div class="box-body">
    <input type="hidden" class="form-control" value="<?php echo $edit['id_hiring']; ?>" name="id_hiring">
<!--     <div class="form-group">
    <label class="col-sm-4 control-label">ID Hiring</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $edit['id_hiring']; ?>" name="id_hiring">
    </div>
  </div> -->
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $edit['nama']; ?>" name="nama">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Posisi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $edit['posisi']; ?>" name="posisi">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">User Input</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $edit['user_input']; ?>" name="user_input">
    </div>
  </div>  
  <div class="form-group">
    <label class="col-sm-4 control-label">Tgl. Lamaran</label>
    <div><div class="col-sm-2">
      <input type="date" class="form-control" value="<?php echo $edit['tgl_lamaran']; ?>" name="tgl_lamaran">
    </div>
  </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label">Sumber Informasi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $edit['sumber']; ?>" name="sumber">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Progres Recruitment</label>
    <div class="col-sm-5">  
    <select name="progres_recruitment" class="form-control"><option> Pilih </option>
  <option name="progres_recruitment" value="CV Screening" <?php if(($edit['progres_recruitment'])== "CV Screening")
        {echo "selected=\"selected\"";};?>> CV Screening </option>
      <option name="progres_recruitment" value="Pre-Interview" <?php if(($edit['progres_recruitment'])== "Pre-Interview")
        {echo "selected=\"selected\"";};?>> Pre-Interview </option>

  <option name="progres_recruitment" value="User Interview" <?php if(($edit['progres_recruitment'])== "User Interview")
        {echo "selected=\"selected\"";};?>> User Interview </option>

      <option name="progres_recruitment" value="Skill Text" <?php if(($edit['progres_recruitment'])== "Skill Text")
        {echo "selected=\"selected\"";};?>> Skill Text </option>

  <option name="progres_recruitment" value="Medical Check-up" <?php if(($edit['progres_recruitment'])== "Medical Check-up")
        {echo "selected=\"selected\"";};?>> Medical Check-up </option>

  <option name="progres_recruitment" value="Additional Assessment" <?php if(($edit['progres_recruitment'])== "Additional Assessment")
        {echo "selected=\"selected\"";};?>> Additional Assessment </option>
  </select>
    </div>
  </div>
<div class="form-group">
    <label class="col-sm-4 control-label">Resume</label>
    <div class="col-sm-5">
      <input rowspan="2" class="form-control" value="<?php echo $edit['resume']; ?>" name="resume" readonly>
    </div>
  </div>  
  <div class="form-group">
    <label class="col-sm-4 control-label"> Status Recruitment</label>
    <div class="col-sm-5">  
      <select name="status_recruitment" class="form-control"><option> Pilih </option>
        <option name="status_recruitment" value="Pre-screening" <?php if(($edit['status_recruitment'])== "Pre-screening")
        {echo "selected=\"selected\"";};?>> Pre-screening </option>

        <option name="status_recruitment" value="Passed Interview" <?php if(($edit['status_recruitment'])== "Passed Interview")
        {echo "selected=\"selected\"";};?>> Passed Interview </option>
        
        <option name="status_recruitment" value="Failed Interview" <?php if(($edit['status_recruitment'])== "Failed Interview")
        {echo "selected=\"selected\"";};?>> Failed Interview </option>

        <option name="status_recruitment" value="Passed Test" <?php if(($edit['status_recruitment'])== "Passed Test")
        {echo "selected=\"selected\"";};?>> Passed Test </option>

        <option name="status_recruitment" value="Failed Test" <?php if(($edit['status_recruitment'])== "Failed Test")
        {echo "selected=\"selected\"";};?>> Failed Test </option>

        <option name="status_recruitment" value="Hired" <?php if(($edit['status_recruitment'])== "Hired")
        {echo "selected=\"selected\"";};?>> Hired </option>

      </select>
    </div>
  </div>
</div></div>
  
  <div class="form-group">
    <label class="col-sm-4"></label>
    <div class="col-sm-5">
  <hr/>
<button type="submit"name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> <i>Reset</i></button>
<a href="javascript:history.back()" class="btn btn-info pull-right"><i class="fa fa-backward"></i> Kembali</a>       
    </div>
  </div>
</form>
 
 
<!----- ------------------------- END EDIT DATA MASTER pegawai ------------------------- --- -->
<?php
break;

case "detail_recruitment":
?>
<center>
<h3> Data Pegawai </h3>
</center>

<form class="form-horizontal" action="<?php echo $aksi?>?module=recruitment&aksi=edit" role="form" method="post">             
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
  <li class="active"><a class="text-blue" href="#data" data-toggle="tab">Info Pegawai</a></li>
  <li><a class="text-blue" href="#data1" data-toggle="tab">Info Pekerjaan</a><li>
  <li><a class="text-blue" href="#data2" data-toggle="tab">Info Pendidikan</a></li>
  <li><a class="text-blue" href="#data3" data-toggle="tab">Pengalaman Kerja</a></li>
</ul>
 <!-- <li><a href="javascript:history.back()" class="btn btn-sm btn-primary pull-right"><i class="fa fa-backward"></i> Kembali</a>   </li> -->
<div class="tab-content">
<div class="tab-pane active" id="data">
<section id="new">
<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Pegawai </h3>
<div class="pull-right">
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a></div>  </div>  
  <div class="box-body">
<?php 
$data=mysql_query("select * from pegawai where nip='$_GET[nip]'");
$edit=mysql_fetch_array($data);
?>  
  <div class="form-group">
    <label class="col-sm-4 control-label">NIP </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled name="nip" value="<?php echo $edit['nip']; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Nama pegawai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled name="nama" value="<?php echo $edit['nm_pegawai']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Jenis kelamin</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" disabled  value="<?php echo $edit['jk'];  ?>">
    </div>
  </div>
  
<div class="form-group">
    <label class="col-sm-4 control-label">Tempat/Tgl. Lahir</label>
    <div><div class="col-sm-5">
      <input type="text" class="form-control" disabled name="tpt_lhr" value="<?php echo $edit['tpt_lhr']; echo ", ".Indonesia2Tgl ($edit['tgl_lhr']); ?>">
  </div>
  </div>
</div>
<div class="form-group">
    <label class="col-sm-4 control-label">Alamat</label>
    <div class="col-sm-5">
      <textarea rowspan="2" disabled class="form-control" name="alamat"><?php echo $edit['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">Nomor HP</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $edit['no_hp']; ?>">
    </div></div> 
<div class="form-group">
    <label class="col-sm-4 control-label">Email</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $edit['email']; ?>">
    </div></div> </div></div></section></div>
<div class="tab-pane" id="data1">
<section id="new1">
<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="glyphicon glyphicon-briefcase"></i> Informasi Pekerjaan Pegawai </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a></div>  
  <div class="box-body">
<?php 
$data=mysql_query("select * sk_krj where nip='$_GET[nip]'");
$e=mysql_fetch_array($data);
?>  
<div class="form-group">
    <label class="col-sm-4 control-label">Tanggal Masuk</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo Indonesia2Tgl($edit['tgl_msk']); ?>">
    </div></div>  
<div class="form-group">
    <label class="col-sm-4 control-label">Nomor SK</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $e['no_sk']; ?>">
    </div></div>  
<div class="form-group">
    <label class="col-sm-4 control-label">Unit Kerja</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $e['nm_unit_krj']; ?>">
    </div></div> 
<div class="form-group">
    <label class="col-sm-4 control-label">Jabatan / Pangkat</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $e['nm_jabatan']."/".$e['nm_pangkat']; ?>">
    </div></div>
<div class="form-group">
    <label class="col-sm-4 control-label">Lokasi Kerja</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" disabled value="<?php echo $e['nm_lokasi']." (".$e['alamat_lokasi'].")"; ?>">
    </div></div> </div></div></section></div>
<div class="tab-pane" id="data2">
<section id="new2"> 
<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-mortar-board "></i> Informasi Pendidikan </h3>
<div class="pull-right">
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a></div></div>  
  <div class="box-body">
  <?php 
// Tampilkan data dari Database
$sqll = "SELECT * FROM pendidikan where nip='$_GET[nip]'";
$tampill = mysql_query($sqll);
$no=1;
while ($dat = mysql_fetch_array($tampill)) { ?>
<div class="form-group">
    <label class="col-sm-3 control-label">Jenjang/Nama Sekolah </label>
    <div><div class="col-sm-2">
  <input type="text" class="form-control" disabled value="<?php echo $dat['jenjang']; ?>" >
  </div><div class="col-sm-4">
  <input type="text" class="form-control" disabled value="<?php echo $dat['nm_pendidikan']; ?>" >
  </div><div class="col-sm-3">
    <div class="input-group"> <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>
      <input type="text" class="form-control"  disabled value="<?php echo $dat['thn_pend']; ?>" >
  </div><!-- /.input group -->
  </div></div></div>
<?php } ?>

  </div></div></section></div>
<div class="tab-pane" id="data3">
<section id="new">  
<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-puzzle-piece"></i> Pengalaman Kerja </h3>
<div class="pull-right">  
  <a class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a></div></div>
  <div class="box-body"> 
<?php 
// Tampilkan data dari Database
$sq = "SELECT * FROM pengalaman_krj where nip='$_GET[nip]'";
$tampi = mysql_query($sq);
while ($da = mysql_fetch_array($tampi)) { 

?>
<div class="form-group">
<label class="col-sm-1 control-label"></label>
    <div><div class="col-sm-4">
  <input type="text" class="form-control" disabled value="<?php echo $da['nm_krj']; ?>" >
  </div><div class="col-sm-3">
  <input type="text" class="form-control" disabled value="<?php echo $da['nm_pt']; ?>" >
  </div><div class="col-sm-3">
    <div class="input-group"> <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>
      <input type="text" class="form-control"  disabled value="<?php echo $da['thn_krj']; ?>" >
  </div><!-- /.input group -->
  </div></div></div>
<?php } ?>  
  </div></div></section></div>   
</form>

<?php
break;
} 
?>

</div></div>