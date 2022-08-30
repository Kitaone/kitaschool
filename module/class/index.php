<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create"><i class="fa fa-plus"></i></a></span>
      <h4 class="card-title "><?php echo str_replace('-', ' ', strtoupper($_GET['module'])); ?></h4>
      <p class="card-category"> Tabel dengan data <?php echo str_replace('-', ' ', strtoupper($_GET['module'])); ?></p>
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
            <th class="text-center">Name School</th>
            <th class="text-center">School Level</th>  
            <th class="text-center">Classes</th>    
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>            
            <tr>                
              <td class="text-center">1</td>
              <td class="text-center">SMA ISLAM AL-Azhar</td>
              <td class="text-center">SMA</td>
              <td class="text-center">XI</td>
              <td class="text-center">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>                
              <td class="text-center">2</td>
              <td class="text-center">SMA ISLAM AL-Azhar</td>
              <td class="text-center">SMA</td>
              <td class="text-center">XII</td>
              <td class="text-center">
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