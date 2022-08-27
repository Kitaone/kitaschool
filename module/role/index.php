<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create"><i class="fa fa-plus"></i></a></span>
      <h4 class="card-title "><?php echo strtolower($_GET['module']) ?></h4>
      <p class="card-category"> Tabel dengan data <?php echo strtolower($_GET['module']) ?></p>
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
            <th>#</th>
            <th>Hcode</th>
            <th>Name</th>
            <th>Status</th>
            <th>Created at</th>   
            <th>Updated at</th>   
            <th>Aksi</th>
          </thead>
          <tbody>            
            <tr>       
              <td>1</td>
              <td>dashboard</td>
              <td>Admin</td>
              <td>1</td>
              <td>2022-08-20 10:46:58</td>
              <td>2022-08-20 10:46:58</td>
              <td>
                <span>
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