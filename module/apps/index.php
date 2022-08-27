<?php 
$aksi   = "module/".$_GET['module']."/action.php";
?>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-apps-tab" data-toggle="tab" href="#apps" role="tab" aria-controls="nav-apps" aria-selected="true">Apps</a>
    <a class="nav-item nav-link" id="nav-appsuser-tab" data-toggle="tab" href="#appsuser" role="tab" aria-controls="nav-appsuser" aria-selected="false">Apps User</a>
    <a class="nav-item nav-link" id="nav-appsmenu-tab" data-toggle="tab" href="#appsmenu" role="tab" aria-controls="nav-appsmenu" aria-selected="false">Apps Menu</a>
    <a class="nav-item nav-link" id="nav-appsmenuuser-tab" data-toggle="tab" href="#appsmenuuser" role="tab" aria-controls="nav-appsmenuuser" aria-selected="false">Apps Menu User</a>
    <a class="nav-item nav-link" id="nav-appspermission-tab" data-toggle="tab" href="#appspermission" role="tab" aria-controls="nav-appspermission" aria-selected="false">Apps Permission</a>
  </div>
</nav>
<div class="tab-content col-md-12" id="nav-tabContent">
  <div class="tab-pane fade show active" id="apps" role="tabpanel" aria-labelledby="nav-apps-tab">
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
                <th>Description</th>
                <th>Status</th>
                <th>Created at</th>   
                <th>Updated at</th>   
                <th>Aksi</th>
              </thead>
              <tbody>            
                <tr>       
                  <td>1</td>
                  <td>dashboard</td>
                  <td>Dashboard</td>
                  <td>Lorem ipsum dolor siamet</td>
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
  </div>
  <div class="tab-pane fade" id="appsuser" role="tabpanel" aria-labelledby="nav-appsuser-tab">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create_apps_user"><i class="fa fa-plus"></i></a></span>
          <h4 class="card-title "><?php echo strtolower($_GET['module']) ?> user</h4>
          <p class="card-category"> Tabel dengan data <?php echo strtolower($_GET['module']) ?> user</p>
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
                <th>Role id</th>
                <th>User id</th>
                <th>Apps id</th>
                <th>Status</th>
                <th>Created at</th>   
                <th>Updated at</th>   
                <th>Aksi</th>
              </thead>
              <tbody>            
                <tr>       
                  <td>1</td>
                  <td>6</td>
                  <td>1</td>
                  <td>2</td>
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
  </div>
  <div class="tab-pane fade" id="appsmenu" role="tabpanel" aria-labelledby="nav-appsmenu-tab">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create_apps_menu"><i class="fa fa-plus"></i></a></span>
          <h4 class="card-title "><?php echo strtolower($_GET['module']) ?> menu</h4>
          <p class="card-category"> Tabel dengan data <?php echo strtolower($_GET['module']) ?> menu</p>
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
                <th>Parent id</th>
                <th>Menu Name</th>
                <th>Slug</th>
                <th>Menu Description</th>
                <th>Menu URL</th>
                <th>Menu Order</th>
                <th>Menu Type</th>
                <th>Menu Icon</th>
                <th>Root</th>
                <th>Status</th>
                <th>Created at</th>   
                <th>Updated at</th>   
                <th>Aksi</th>
              </thead>
              <tbody>            
                <tr>       
                  <td>1</td>
                  <td>2</td>
                  <td>Dashboard</td>
                  <td>home</td>
                  <td>Master Dashboard</td>
                  <td>dashboard</td>
                  <td>2</td>
                  <td>menu</td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></td>
                  <td>1</td>
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
  </div>
  <div class="tab-pane fade" id="appsmenuuser" role="tabpanel" aria-labelledby="nav-appsmenuuser-tab">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create_apps_menu_user"><i class="fa fa-plus"></i></a></span>
          <h4 class="card-title "><?php echo strtolower($_GET['module']) ?> menu user</h4>
          <p class="card-category"> Tabel dengan data <?php echo strtolower($_GET['module']) ?> menu user</p>
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
                <th>Role id</th>
                <th>User id</th>
                <th>Apps id</th>
                <th>Apps menu id</th>
                <th>Created at</th>   
                <th>Updated at</th>   
                <th>Aksi</th>
              </thead>
              <tbody>            
                <tr>    
                  <td>1</td>
                  <td>6</td>
                  <td>1</td>
                  <td>1</td>
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
  </div>
  <div class="tab-pane fade" id="appspermission" role="tabpanel" aria-labelledby="nav-appspermission-tab">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <span class="float-right"><a class="btn btn-secondary" href="?module=<?php echo $_GET['module'] ?>&act=create_apps_permission"><i class="fa fa-plus"></i></a></span>
          <h4 class="card-title "><?php echo strtolower($_GET['module']) ?> menu permission</h4>
          <p class="card-category"> Tabel dengan data <?php echo strtolower($_GET['module']) ?> menu permission</p>
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
                <th>Role id</th>
                <th>Permission id</th> 
                <th>Created at</th>   
                <th>Updated at</th>   
                <th>Aksi</th>
              </thead>
              <tbody>            
                <tr>       
                  <td>1</td>
                  <td>6</td>
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
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
