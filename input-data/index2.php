<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Form Wizard with jQuery and PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <form action="save.php" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="5" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard active">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>Biodata</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-group"></i></div>
                    <p>Data Keluarga</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-graduation-cap"></i></div>
                    <p>Pendidikan & Kegiatan</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-plus"></i></div>
                    <p>Informasi Lainnya</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-check-circle"></i></div>
                    <p>Selesai</p>
                </div>
            </div>
            <fieldset>
                <h3 align="center">Biodata</h3>
                <br>
                <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                <br>
                <div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Biodata Diri </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>
     <div class="box-body">
                <table border="0" width="1030">
                <div class="form-group"><div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nm_lengkap" class="form-control"/>
                    </td>
                </div> 
                <div class="form-group">
                    <td>
                    <label>Jenis Kelamin</label> <br>
                    <input name="jk" class="minimal" type="radio" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;
                    <input name="jk" class="minimal" type="radio" value="Perempuan"> Perempuan
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-control"/>
                </td>
                </div>
            </tr>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat_sesuai_ktp" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Alamat Domisil</label>
                    <input type="text" name="alamat_domisil" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>No HP</label>
                    <input type="text" name="phone" class="form-control" placeholder="08xxxxxxxxxx" />
                </td>
            </div>
        </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Agama</label>
                        <select name="agama" class="form-control"><option> Pilih</option>
                            <option name="agama" value="Islam"> Islam </option>
                            <option name="agama" value="Kristen"> Kristen </option>
                            <option name="agama" value="Katolik"> Katolik </option>
                            <option name="agama" value="Hindu"> Hindu </option>
                            <option name="agama" value="Budha"> Budha </option>
                            <option name="agama" value="Khonghucu"> Khonghucu </option>
                </select>
            </td>
        </div>
    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Golongan Darah</label>
                    <input type="text" name="gol_darah" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Status Pernikahan</label>
                    <select name="status_pernikahan" class="form-control"><option> Pilih</option>
                        <option name="status_pernikahan" value="Menikah"> Menikah </option>
                        <option name="status_pernikahan" value="Belum Menikah"> Belum Menikah </option>
                        <option name="status_pernikahan" value="Bercerai"> Bercerai </option>
                    </select>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Tinggi Badan</label>
                    <input type="text" name="tinggi_bdn" class="form-control"/>
                </td>
            </div>
        </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Berat Badan</label>
                    <input type="text" name="berat_bdn" class="form-control"/>
                    </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>No KTP</label>
                    <input type="text" name="no_ktp" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>No Rekening</label>
                    <input type="text" name="no_rek" class="form-control"/>
                </td>
            </div>
        </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Bank</label>
                    <input type="text" name="nm_bank" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Nama Pemilik Rekening</label>
                    <input type="text" name="nm_pemilik_rek" class="form-control"/>
                </td>
                </div>
                <td></td>
            </tr>
        </div>
    </div>
</div>
</table>
</div>
</div>
                <div class="form-group">
                    <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
 <fieldset>
                <h3 align="center">Keluarga</h3>
                <br>
                <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                <br>
                <div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Orang Tua </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>
     <div class="box-body">
                <table border="0" width="1030">
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Ayah</label>
                    <input type="text" name="nm_ayah" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Nama Ibu</label>
                    <input type="text" name="nm_ibu" class="form-control"/>
                </td>
            </div>
        </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Usia Ayah</label>
                    <input type="text" name="usia_ayah" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Usia Ibu</label>
                    <input type="text" name="usia_ibu" class="form-control"/>
                </td>
            </div>
        </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Pendidikan Terkahir Ayah</label>
                    <input type="text" name="pend_terakhir_ayah" class="form-control"/>
                </td>
                </div><div class="form-group">
                    <td>
                    <label>Pendidikan Terakhir Ibu</label>
                    <input type="text" name="pend_terakhir_ibu" class="form-control"/>
                </td>
            </div>
        </tr>
                </div><div class="form-group">
                    <tr>
                        <td>
                    <label>Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control"/>
                </td>
                </div><div class="form-group">
                    <td>
                    <label>Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control"/>
                </td>
            </div>
        </tr>
                </div>
            </table>
        </div>
    </div>
    <div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Saudara </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>
     <div class="box-body">
                <table border="0" width="1030">
                    <form action="action.php" method="POST">
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Saudara</label>
                    <input type="text" name="nm_saudara1" class="form-control" placeholder="1. " /> <br>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Usia Saudara</label>
                    <input type="text" name="usia_saudara1" class="form-control" placeholder="1. " /> <br>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Pendidikan Terakhir Saudara</label>
                    <input type="text" name="pend_terakhir_saudara1" class="form-control" placeholder="1. " /> <br>
                   
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Pekerjaan Saudara</label>
                    <input type="text" name="pekerjaan_saudara1" class="form-control" placeholder="1. " /> <br>
                </td>
                </div>
            </tr>
            <tr>
                <td><center> <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button></td></center>
            </tr>
        </div>
    </form>
    <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>
    </table>
</div>
</div>
<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-mortar-board "></i> Informasi Pendidikan </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a></div>  
  <div class="box-body" id="list_pendidikan">
  <?php
for ($i= 1; $i <= 3; $i++) { ?>
<div class="form-group">
    <label class="col-sm-3 control-label">Jenjang/Nama Sekolah </label>
    <div><div class="col-sm-2">
    <select name="jjg[]" class="form-control">
  <option value=""> Pilih Jenjang</option>  
<?php $q = mysql_query ("select * from jjg");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['nm_jjg']; ?>" 
<?php (@$h['id']==$k['jjg'])?print(" "):print(""); ?>  > <?php echo $k['nm_jjg']; ?>
</option> <?php } ?>
  </select>
  </div><div class="col-sm-3">
  <input type="text" class="form-control"  data-toggle="tooltip" title="Nama Sekolah" placeholder="Nama Sekolah"   name="nm_jjg[]">
  </div><div class="col-sm-3">
    <div class="input-group"> <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>
      <input type="text" class="form-control"   data-toggle="tooltip" maxlength="9" title="Format: 2000-2006" placeholder="Tahun"   name="thn_jjg[]">
  </div><!-- /.input group -->
  </div></div></div>
<?php } ?>  
<div class="form-group">
<div id="main">
    <div class="my-form">
            <center>
      <p class="text-box">
                
            </p></center>
    </div>
    <center>
    <a class="add-box btn btn-primary"" href="#" onclick=""> <i class="fa fa-plus"> </i> Tambah</a>
    </center>
</div>
<script type="text/javascript">
$(document).ready(function($){

    $('.add-box').click(function(){
        var n = $('.text-box').length + 1;
        if( 5 < n ) {
            alert('Stop it!');
            return false;
        }
        var box_html = $('<div class="form-group"><label class="col-sm-3 control-label">Jenjang/Nama Sekolah </label><div><div class="col-sm-2"> <select name="jjg[]" class="form-control"><option value=""> Pilih Jenjang</option> <?php $q = mysql_query ("select * from jjg");while ($k = mysql_fetch_array($q)){ ?><option value="<?php echo $k['nm_jjg']; ?>" <?php (@$h['jjg']==$k['jjg'])?print(" "):print(""); ?> > <?php echo $k['nm_jjg']; ?></option> <?php  } ?>  </select></div><div class="col-sm-3"> <input type="text" class="form-control"  data-toggle="tooltip" title="Nama Sekolah" placeholder="Nama Sekolah" name="nm_jjg[]"> </div><div class="col-sm-3"> <div class="input-group">  <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>  <input type="text" class="form-control"   data-toggle="tooltip" title="Format: 2000-2006" maxlength="9" placeholder="Tahun"   name="thn_jjg[]"></div></div></div>  <a href="#" class="remove-box btn btn-danger btn-sm "><i class="fa fa-remove"> </i></a></div>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
           return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
</div>
</div></div> 

<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-puzzle-piece"></i> Pengalaman Pekerjaan </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i>
  </a>
 
    </div>  
  <div class="box-body">
<?php 
// Tampilkan data dari Database
$a = mysql_query("SELECT * FROM pengalaman_krj where nip='$_GET[nip]'");
while ($data = mysql_fetch_array($a)) { ?>
<div class="form-group">
    <label class="col-sm-1 control-label"></label>
    <div><div class="col-sm-4">
  <input type="text" class="form-control"  data-toggle="tooltip" value="<?php echo $data['nm_krj'];?>"   name="pekerjaan[]">
  <input type="hidden" class="form-control"  value="<?php echo $data['id_peng_krj'];?>"   name="ids[]">
  </div>
  <div class="col-sm-3">
  <input type="text" class="form-control"  data-toggle="tooltip" value="<?php echo $data['nm_pt'];?>"   name="nm_pt[]">
  </div>
  <div class="col-sm-3">
    <div class="input-group"> <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>
      <input type="text" class="form-control"   data-toggle="tooltip" maxlength="9"title="Format: 2000-2006" value="<?php echo $data['thn_krj'];?>"   name="thn_krj[]">
  </div><!-- /.input group -->
  </div></div>
  <a class="hapus-box btn btn-danger btn-sm"   data-toggle="tooltip" title="Hapus Data" href="<?php echo $aksi ?>?module=pegawai&aksi=hapus_peng_krj&id_peng_krj=<?php echo $data['id_peng_krj'];?>"  alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA <?php echo $Kode; ?>  ?')"> <i class="glyphicon glyphicon-trash"></i></a></div> 

<?php } ?>
  <div class="form-group">
<div id="main">
    <div class="form-ku">
            <center>
      <p class="text-itan">
                <a class="ad-box btn btn-primary"" href="#"> <i class="fa fa-plus"> </i> Add More</a>
            </p></center>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.form-ku .ad-box').click(function(){
        var n = $('.text-itan').length + 1;
        if( 5 < n ) {
            alert('Stop it!');
            return false;
        }
        var box_html = $('<div class="form-group"> <label class="col-sm-1 control-label"></label>    <div><div class="col-sm-4">    <input type="text" class="form-control"  data-toggle="tooltip" title="Pekerjaan" placeholder="Pekerjaan" name="add_pekerjaan[]">  </div><div class="col-sm-3">  <input type="text" class="form-control"  data-toggle="tooltip" title="Nama Perusahaan" placeholder="Nama Perusahaan" name="add_nm_pt[]">  </div><div class="col-sm-3">    <div class="input-group"> <div class="input-group-addon">       <i class="fa fa-calendar"> </i>    </div>      <input type="text" class="form-control"   data-toggle="tooltip" title="Format: 2000-2006"maxlength="9" placeholder="Tahun" name="add_thn_krj[]"> </div>  </div></div>  <a href="#" class="hapus-box btn btn-danger btn-sm "><i class="fa fa-remove"> </i></a></div>');
        box_html.hide();
        $('.form-ku p.text-itan:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.form-ku').on('click', '.hapus-box', function(){
        $(this).parent().css( 'background-color', '#' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});

</script>
</div>  
  </div>
</div> 






<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Suami / Istri </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>
     <div class="box-body">
                <table border="0" width="1030">
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Suami / Istri</label>
                    <input type="text" name="nm_si" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Usia Suami / Istri</label>
                    <input type="text" name="usia_si" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Pendidikan Terakhir Suami / Istri</label>
                    <input type="text" name="pend_si" class="form-control"/>
                </td>
                </div>
                <div class="form-group">
                    <td>
                    <label>Pekerjaan Suami / Istri</label>
                    <input type="text" name="kerja_si" class="form-control"/>
                </td>
                </div>
            </tr>
        </div>
    </table>
</div>
</div>

<div class="box box-solid box-primary">
<div class="box-header">
<h3 class="btn btn disabled box-title">
<i class="fa fa-user-md"></i> Informasi Anak </h3>
  <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
  <i class="fa fa-minus"></i></a>
    </div>
     <div class="box-body">
               <table border="0" width="1030">
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Nama Anak</label>
                        <input type="text" name="nm_anak1" class="form-control" placeholder="1."/> <br>
                    </td>
                    <div class="form-group">
                        <td>
                         <label>Nama Anak</label>
                        <input type="text" name="nm_anak2" class="form-control" placeholder="2."/> <br>
                    </td>
                </div>
            </tr>
                    <div class="form-group">
                        <tr>
                            <td>
                        <label>Jenis Kelamin Anak</label> <br>
                        <input name="jk_anak1" class="minimal" type="radio" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;
                        <input name="jk_anak1" class="minimal" type="radio" value="Perempuan"> Perempuan
                        <input name="jk_anak1" class="minimal" type="radio" value="Tidak Ada"> Tidak ada
                    </td>
                    </div>
                </div>
                <br>
                    <div class="form-group">
                        <td>
                        <label>Jenis Kelamin Anak</label> <br>
                        <input name="jk_anak2" class="minimal" type="radio" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;
                        <input name="jk_anak2" class="minimal" type="radio" value="Perempuan"> Perempuan
                        <input name="jk_anak2" class="minimal" type="radio" value="Tidak Ada"> Tidak ada
                    </td>
                </div>
            </tr>
                    </div> 
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Usia Anak</label>
                    <input type="text" name="umur_anak1" class="form-control" placeholder="1."/><br>
                </td>
                <center>
    <a class="add-box btn btn-primary"" href="#" onclick=""> <i class="fa fa-plus"> </i> Tambah</a>
    </center>
                <td>
                    <label>Usia Anak</label>
                    <input type="text" name="umur_anak2" class="form-control" placeholder="2."/><br>
                </td>
            </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                    <label>Pendidikan Terakhir Anak</label>
                    <input type="text" name="pend_akhir_anak1" class="form-control" placeholder="1."/><br>
                </td>
                <td>
                    <label>Pendidikan Terakhir Anak</label>
                    <input type="text" name="pend_akhir_anak2" class="form-control" placeholder="2."/><br>
                </td>
            </tr>
                </div>
            </table>
        </div>
    </div>
                <div class="form-group">
                    <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h3 align="center">Pendidikan & Kegiatan</h3>
                <br>
                <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                <br>
                <div class="form-group">
                    <label>Jenjang Pendidikan</label>
                    <input type="text" name="jenjang_pend_sd" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="jenjang_pend_smp" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="jenjang_pend_smasmk" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="jenjang_pend_d3" class="form-control" placeholder="4." /> <br>
                    <input type="text" name="jenjang_pend_s1" class="form-control" placeholder="5." /> <br>
                    <input type="text" name="jenjang_pend_s2" class="form-control" placeholder="6." /> <br>
                </div>
                <div class="form-group">
                    <label>Tahun Pendidikan</label>
                    <input type="text" name="thn_pend_sd" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="thn_pend_smp" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="thn_pend_smasmk" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="thn_pend_d3" class="form-control" placeholder="4." /> <br>
                    <input type="text" name="thn_pend_s1" class="form-control" placeholder="5." /> <br>
                    <input type="text" name="thn_pend_s2" class="form-control" placeholder="6." /> <br>
                </div>
                <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input type="text" name="nm_sklh_sd" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="nm_sklh_smp" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="nm_sklh_smasmk" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="nm_univ_d3" class="form-control" placeholder="4." /> <br>
                    <input type="text" name="nm_univ_s1" class="form-control" placeholder="5." /> <br>
                    <input type="text" name="nm_univ_s2" class="form-control" placeholder="6." /> <br>
                </div>
                <div class="form-group">
                    <label>Lulus Tahun</label>
                    <input type="text" name="lulus_thn_sd" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="lulus_thn_smp" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="lulus_thn_smasmk" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="lulus_thn_d3" class="form-control" placeholder="4." /> <br>
                    <input type="text" name="lulus_thn_s1" class="form-control" placeholder="5." /> <br>
                    <input type="text" name="lulus_thn_s2" class="form-control" placeholder="6." /> <br>
                </div>
                <h4 align="center">Kemampuan Bahasa Asing</h4>
                <br>
                <div class="form-group">
                    <label>Jenis Bahasa</label>
                    <input type="text" name="jns_bhs1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="jns_bhs2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="jns_bhs3" class="form-control" placeholder="3." /> <br>
                </div>
                <div class="form-group">
                    <label>Kemampuan Mendengarkan</label>
                    <input type="text" name="kem_dengar1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="kem_dengar2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="kem_dengar3" class="form-control" placeholder="3." /> <br>
                </div>
                <div class="form-group">
                    <label>Kemampuan Membaca</label>
                    <input type="text" name="kem_baca1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="kem_baca2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="kem_baca3" class="form-control" placeholder="3." /> <br>
                </div>
                <div class="form-group">
                    <label>Kemampuan Berbicara</label>
                    <input type="text" name="kem_bicara1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="kem_bicara2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="kem_bicara3" class="form-control" placeholder="3." /> <br>
                </div>
                <div class="form-group">
                    <label>Kemampuan Menulis</label>
                    <input type="text" name="kem_tulis1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="kem_tulis2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="kem_tulis3" class="form-control" placeholder="3." /> <br>
                </div>
                <h4 align="center">Aktivitas Organisasi</h4>
                <br>
                <div class="form-group">
                    <label>Nama Organisasi</label>
                    <input type="text" name="nm_organisasi1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="nm_organisasi2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="nm_organisasi3" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="nm_organisasi4" class="form-control" placeholder="4." /> <br>
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="date" name="waktu1" class="form-control"/> <br>
                    <input type="date" name="waktu2" class="form-control"/> <br>
                    <input type="date" name="waktu3" class="form-control"/> <br>
                    <input type="date" name="waktu4" class="form-control"/> <br>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="jabatan2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="jabatan3" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="jabatan4" class="form-control" placeholder="4." /> <br>
                </div>
                <h4 align="center">Pelatihan / Kursus yang pernah diikuti</h4>
                <br>
                <div class="form-group">
                    <label>Nama Pelatihan</label>
                    <input type="text" name="nm_pelatihan1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="nm_pelatihan2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="nm_pelatihan3" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="nm_pelatihan4" class="form-control" placeholder="4." /> <br>
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="date" name="waktu_1" class="form-control"/> <br>
                    <input type="date" name="waktu_2" class="form-control"/> <br>
                    <input type="date" name="waktu_3" class="form-control"/> <br>
                    <input type="date" name="waktu_4" class="form-control"/> <br>
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label>
                    <input type="text" name="penyelenggara1" class="form-control" placeholder="1." /> <br>
                    <input type="text" name="penyelenggara2" class="form-control" placeholder="2." /> <br>
                    <input type="text" name="penyelenggara3" class="form-control" placeholder="3." /> <br>
                    <input type="text" name="penyelenggara4" class="form-control" placeholder="4." /> <br>
                </div>
                <div class="form-group">
                    <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                    <h3 align="center">Informasi Lainnya</h3>
                    <br>
                    <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                    <br>
                    <div class="form-group">
                        <label>Nama Saudara yang bisa dihubungi</label>
                        <input type="text" name="nm1" class="form-control" placeholder="1." /> <br>
                        <input type="text" name="nm2" class="form-control" placeholder="2." /> <br>
                    </div>
                    <div class="form-group">
                        <label>Hubungan</label>
                        <input name="hub1" class="form-control" placeholder="1." /> <br>
                        <input name="hub2" class="form-control" placeholder="2." /> <br>
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="no_telp1" class="form-control" placeholder="1. 08x-xxx-xxx-xxx" /> <br>
                        <input type="text" name="no_telp2" class="form-control" placeholder="2. 08x-xxx-xxx-xxx" /> <br>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat1" class="form-control" placeholder="1." /> <br>
                        <input type="text" name="alamat2" class="form-control" placeholder="2." /> <br>
                    </div>
                        <h4 align="center">Riwayat Perawatan Di Rumah Sakit</h4>
                        <br>
                        <h5>* Jika data kosong diisi tanda <b>-</b> </h5>
                        <br>
                    <div class="form-group">
                        <label>Jenis Penyakit</label>
                        <input type="text" name="jns_penyakit1" class="form-control" placeholder="1." /> <br>
                        <input type="text" name="jns_penyakit2" class="form-control" placeholder="2." /> <br>
                        <input type="text" name="jns_penyakit3" class="form-control" placeholder="3." /> <br>
                        <input type="text" name="jns_penyakit4" class="form-control" placeholder="4." /> <br>
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="date" name="wkt1" class="form-control"/> <br>
                        <input type="date" name="wkt2" class="form-control"/> <br>
                        <input type="date" name="wkt3" class="form-control"/> <br>
                        <input type="date" name="wkt4" class="form-control"/> <br>
                    </div>
                    <div class="form-group">
                        <label>Rumah Sakit dan Kota</label>
                        <input type="text" name="rs_kota1" class="form-control" placeholder="1." /> <br>
                        <input type="text" name="rs_kota2" class="form-control" placeholder="2." /> <br>
                        <input type="text" name="rs_kota3" class="form-control" placeholder="3." /> <br>
                        <input type="text" name="rs_kota4" class="form-control" placeholder="4." /> <br>
                    </div>
                    <h4 align="center">Pengalaman Kerja</h4>
                    <br>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nm_perusahaan1" class="form-control" placeholder="1." /> <br>
                        <input type="text" name="nm_perusahaan2" class="form-control" placeholder="2." /> <br>
                        <input type="text" name="nm_perusahaan3" class="form-control" placeholder="3." /> <br>
                        <input type="text" name="nm_perusahaan4" class="form-control" placeholder="4." /> <br>
                        <input type="text" name="nm_perusahaan5" class="form-control" placeholder="5." /> <br>
                    </div>
                    <div class="form-group">
                        <label>Periode Kerja</label>
                        <input name="periode_krj1" class="form-control" placeholder="1."> <br>
                        <input name="periode_krj2" class="form-control" placeholder="2."> <br>
                        <input name="periode_krj3" class="form-control" placeholder="3."> <br>
                        <input name="periode_krj4" class="form-control" placeholder="4."> <br>
                        <input name="periode_krj5" class="form-control" placeholder="5."> <br>
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="posisi1" class="form-control" placeholder="1."/> <br>
                        <input type="text" name="posisi2" class="form-control" placeholder="2." /> <br>
                        <input type="text" name="posisi3" class="form-control" placeholder="3." /> <br>
                        <input type="text" name="posisi4" class="form-control" placeholder="4." /> <br>
                        <input type="text" name="posisi5" class="form-control" placeholder="5." /> <br>
                    </div>
                    <div class="form-group">
                        <label>Gaji Terakhir</label>
                        <input type="text" name="gaji_akhir1" class="form-control" placeholder="1. Rp" /> <br>
                        <input type="text" name="gaji_akhir2" class="form-control" placeholder="2. Rp" /> <br>
                        <input type="text" name="gaji_akhir3" class="form-control" placeholder="3. Rp" /> <br>
                        <input type="text" name="gaji_akhir4" class="form-control" placeholder="4. Rp" /> <br>
                        <input type="text" name="gaji_akhir5" class="form-control" placeholder="5. Rp" /> <br>
                    </div>
                    <div class="form-group">
                        <h4>* Jika data kosong diisi tanda <b>-</b> </h4>
                    </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <div class="jumbotron text-center">
                <h2>Terima Kasih telah mengisi data dengan benar</h2>
                <h3>(Jika tidak bisa submit silahkan di reload)
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>