<?php 
$aksi   = "module/".$_GET['module']."/action.php";
$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id='$_GET[id]'"));
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title"><?php echo strtoupper($_GET['act']) ?> <?php echo ucwords($_GET['module']) ?></h4>
      <p class="card-category">Pengisian yang belum disimpan akan hilang</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi."?module=".$_GET['module']."&act=".$_GET['act'] ?>" method="POST">
       <div class="row">

        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Tanggal Kunjungan</label>
            <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="tanggal"
            required>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating">Pasien</label>
            <select name="id_pasien" class="form-control" required>
              <?php $select=mysqli_query($conn,"SELECT * from pasien order by nama"); ?>
              <?php foreach ($select as $s): ?>
                <option value="<?php echo $s['id'] ?>"><?php echo ucwords($s['nama']) ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating">Dokter</label>
            <select name="id_dokter" class="form-control" required>
              <?php $select=mysqli_query($conn,"SELECT * from dokter order by nama"); ?>
              <?php foreach ($select as $s): ?>
                <option value="<?php echo $s['id'] ?>"><?php echo ucwords($s['nama']) ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Diagnosa <span class="text-muted"> *Optional (boleh diisi nanti)</span></label>
            <input type="text" class="form-control" name="diagnosa" >
          </div>
        </div>


      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Deskripsi <span class="text-muted"> *Kosongkan jika belum ada diagnosa</span></label>
            <div class="form-group">
              <label class="bmd-label-floating">Deskripsi Keluhan dan diagnosa.</label>
              <textarea class="form-control" name="deskripsi" rows="5"></textarea>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary pull-right">Save Profile</button>
      <div class="clearfix"></div>
    </form>
  </div>
</div>
</div>