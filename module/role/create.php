<?php 
$aksi   = "module/".$_GET['module']."/action.php";
$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id='$_GET[id]'"));
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      
      <h4 class="card-title"><?php echo strtolower($_GET['act']) ?> <?php echo strtolower($_GET['module']) ?></h4>
      <p class="card-category">Pengisian yang belum disimpan akan hilang</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi."?module=".$_GET['module']."&act=".$_GET['act'] ?>" method="POST">        
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Hcode</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Name</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>        
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Status</label>
                <select class="form-control">
                  <option selected> - Choose Status - </option>
                  <option value="1">Active</option>
                  <option value="0">Non Active</option>
                </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>