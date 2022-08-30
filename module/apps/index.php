<?php
$aksi   = "module/" . $_GET['module'] . "/action.php";
?>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> Create <?php echo ucfirst($_GET['module']); ?> Sidebar</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi . "?module=" . $_GET['module'] . "&act=" . $_GET['act'] ?>" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Menu Name</label>
              <input type="text" class="form-control" name="menu_name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Menu Description</label>
              <textarea name="menu_description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Order Page</label>
                <input type="text" class="form-control" name="menu_name">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select name="user_id" class="form-control">
                  <option value="" selected>Please select type menu</option>
                  <option value="menu">Main menu</option>
                  <option value="dropdown">Dropdown menu</option>
                  <option value="tab">Tab menu</option>
                </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Menu Icon</label>
              <input type="text" class="form-control" name="menu_name">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Save Apps Menu</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> List table <?php echo ucfirst($_GET['module']); ?> Sidebar</p>
    </div>
    <div class="card-body">
      <div class="p-2">
        <?php
        if (isset($_SESSION['flash'])) : ?>
          <div class="<?php echo $_SESSION['flash']['class']; ?> mt-3 mb-3">
            <i class="<?php echo $_SESSION['flash']['icon'] ?>"></i> <?php echo $_SESSION['flash']['label']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
        <?php endif ?>
      </div>

      <div class="table-responsive">
        <table class="table table-sm">
          <thead class="text-primary">
            <th style="text-align: center; width:10%;">#</th>
            <th style="text-align: center; width:30%;">Menu Name</th>
            <th style="text-align: center; width:30%;">Order Page</th>
            <th style="text-align: center; width:30%;">Type</th>
            <th style="text-align: center; width:30%;">Aksi</th>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: center;">1</td>
              <td style="text-align: center;">Dashboard</td>
              <td style="text-align: center;">1</td>
              <td style="text-align: center;">Main Menu</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">2</td>
              <td style="text-align: center;">BK (Counseling Guidance)</td>
              <td style="text-align: center;">2</td>
              <td style="text-align: center;">Main Menu</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">3</td>
              <td style="text-align: center;">PPDB</td>
              <td style="text-align: center;">3</td>
              <td style="text-align: center;">Main Menu</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Payment</td>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Main Menu</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">5</td>
              <td style="text-align: center;">Users</td>
              <td style="text-align: center;">5</td>
              <td style="text-align: center;">Main Menu</td>
              <td style="text-align: center;">
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