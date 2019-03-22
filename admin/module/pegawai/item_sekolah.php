<div class="form-group">
    <label class="col-sm-3 control-label">Jenjang/Nama Sekolah </label>
    <div><div class="col-sm-2">
    <select name="jjg[]" class="form-control">
  <option value=""> Pilih Jenjang</option>  
<?php $q = mysql_query ("select * from jjg");
while ($k = mysql_fetch_array($q)){ ?>
<option value="<?php echo $k['nm_jjg']; ?>" 
<?php (@$h['jjg']==$k['jjg'])?print(" "):print(""); ?>  > <?php echo $k['nm_jjg']; ?>
</option> <?php } ?>
  </select>
  </div><div class="col-sm-3">
  <input type="text" class="form-control"  data-toggle="tooltip" title="Nama Sekolah" placeholder="Nama Sekolah"   name="nm_jjg[]">
  </div><div class="col-sm-3">
    <div class="input-group"> <div class="input-group-addon">  <i class="fa fa-calendar"> </i>    </div>
      <input type="text" class="form-control"   data-toggle="tooltip" maxlength="9" title="Format: 2000-2006" placeholder="Tahun"   name="thn_jjg[]">
  </div><!-- /.input group -->
  </div></div></div>