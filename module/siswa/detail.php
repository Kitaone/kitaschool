<?php 
$aksi   = "module/".$_GET['module']."/action.php";

$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from kunjungan where id='$_GET[id]'"));
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">

      <h4 class="card-title"><?php echo strtoupper($_GET['act']) ?> <?php echo ucwords($_GET['module']) ?></h4>
      <p class="card-category">Detail kunjugan</p>
    </div>
    <div class="card-body">
     <div class="row">

      <div class="col-md-3 col-sm-12">
        <div class="form-group">
          <label class="bmd-label-floating">Tanggal Kunjungan</label>
          <input disabled type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $edit['tanggal'] ?>">
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="form-group">
          <label class="bmd-label-floating">Pasien</label>

          <?php $select=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id = '$edit[pasien]'")); ?>
          <input disabled type="text" class="form-control" value="<?php echo $select['nama'] ?>">        </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating">Dokter</label>
            <?php $select=mysqli_fetch_array(mysqli_query($conn,"SELECT * from dokter where id = '$edit[dokter]'")); ?>
            <input disabled type="text" class="form-control" value="<?php echo $select['nama'] ?>">
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label class="bmd-label-floating">Diagnosa</label>
            <input disabled type="text" class="form-control" value="<?php echo $edit['diagnosa'] ?>" title="Ubah diagnosa di menu edit">
          </div>
        </div>


      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Deskripsi</label>
            <div class="form-group">
              <label class="bmd-label-floating">Deskripsi Keluhan dan diagnosa.</label>
              <textarea disabled class="form-control" rows="5" title="Ubah diagnosa di menu edit"><?php echo $edit['deskripsi'] ?></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary pull-right">Update Profile</button> -->
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <h4>Resep Dokter</h4>
          <a class="btn btn-primary" href="<?php echo "?module=".$_GET['module']."&act=tambah_detail&id=".$_GET['id'] ?>"><i class="fa fa-plus"></i></a>
          <div class="table-responsive">
           <table class="table">
            <thead class=" text-primary">
              <th>#</th>
              <th>Obat</th>
              <th>Dosis Takar</th>
              <th></th>
            </thead>
            <tbody>
              <?php 
              $no=1;
              $query=mysqli_query($conn,"SELECT * from resep where id_kunjungan = '$_GET[id]' order by id ");
              foreach ($query as $row): 
                $obat=mysqli_fetch_array(mysqli_query($conn,"SELECT * from obat where id = '$row[id_obat]'"));
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $obat['nama_obat'] ?></td>
                  <td><?php echo $row['dosis'] ?> kali sehari</td>
                  <td>
                    <span class="float-right">
                      <a class="btn btn-danger btn-xs" onclick="return confirm('Hapus data?')" href="<?php echo $aksi ?>?module=<?php echo $_GET['module'] ?>&act=delete_detail&detail=<?php echo $_GET['id'] ?>&id=<?php echo $row['id']; ?>">
                        <i class="fa fa-trash"></i>
                      </a>
                    </span>
                  </td>
                </tr>
                <?php 
              endforeach
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>