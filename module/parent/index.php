<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create"><i class="fa fa-plus"></i></a></span>
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> Tabel dengan data <?php echo strtoupper($_GET['module']) ?></p>
    </div>
    <div class="card-body">
      <div class="p-2">
        <?php 
        if (isset($_SESSION['flash'])): ?>
          <div class="<?php echo $_SESSION['flash']['class']; ?> mt-3 mb-3"> 
            <i class="<?php echo $_SESSION['flash']['icon'] ?>"></i> <?php echo $_SESSION['flash']['label']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
        <?php endif ?>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th class="text-center">#</th>
            <th class="text-center">Nama Orang Tua</th>
            <th class="text-center">NISN Anak</th>
            <th class="text-center">NIS Anak</th>
            <th class="text-center">Nama Anak</th>
            <th class="text-center">Gender Anak</th>
            <th class="text-center">Alamat Anak</th>        
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td class="text-center">1</td>
              <td class="text-center">Taryana Jupri</td>
              <td class="text-center">12345</td>
              <td class="text-center">123456</td>
              <td class="text-center">Jupri</td>
              <td class="text-center">Laki-laki</td>
              <td class="text-center">Cipinang</td>
              <td class="text-center">
                <span>
                  <a class="btn btn-warning btn-xs" href="<?php echo '?module='.'student'.'&act=detail&id=1' ?>"><i style="color:white;" class="fa fa-eye"></i></a>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>              
            <tr>
              <td class="text-center">2</td>
              <td class="text-center">Keman Sueman</td>
              <td class="text-center">12346</td>
              <td class="text-center">123457</td>
              <td class="text-center">Jamal</td>
              <td class="text-center">Laki-laki</td>
              <td class="text-center">Bojong Gede</td>
              <td class="text-center">
                <span>
                  <a class="btn btn-warning btn-xs" href="<?php echo '?module='.'student'.'&act=detail&id=1' ?>"><i style="color:white;" class="fa fa-eye"></i></a>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>