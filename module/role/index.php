<?php
$aksi   = "module/" . $_GET['module'] . "/action.php";
?>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> Create <?php echo ucfirst($_GET['module']); ?> Users</p>
    </div>
    <div class="card-body">
      <form action="<?php echo $aksi . "?module=" . $_GET['module'] . "&act=" . $_GET['act'] ?>" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select name="user_id" class="form-control">
                <option value="#">Please select role</option>
                <option value="1">Admin</option>
                <option value="2">Student</option>
                <option value="3">Teacher</option>
                <option value="5">Staff</option>
                <option value="6">Super Admin</option>
                <option value="7">Principal</option>
                <option value="8">Parent</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select name="user_id" class="form-control">
                <option value="#">Please select user</option>
                <option value="1">Jamal</option>
                <option value="2">Rendi</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select name="user_id" class="form-control" multiple="multiple" style="height: 127px;">
                <option value="" selected>Please select permission</option>
                <option value="1">Manage</option>
                <option value="2">Views</option>
                <option value="3">Create</option>
                <option value="4">Edit</option>
                <option value="5">Delete</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Save Role</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><?php echo strtoupper($_GET['module']) ?></h4>
      <p class="card-category"> List table <?php echo ucfirst($_GET['module']); ?> Users</p>
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
            <th style="text-align: center; width:30%;">Users</th>
            <th style="text-align: center; width:30%;">Role</th>
            <th style="text-align: center; width:30%;">Aksi</th>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: center;">1</td>
              <td style="text-align: center;">Jamal</td>
              <td style="text-align: center;">Admin</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">2</td>
              <td style="text-align: center;">Rendi</td>
              <td style="text-align: center;">Admin</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">3</td>
              <td style="text-align: center;">Adul</td>
              <td style="text-align: center;">Teacher</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Gilang</td>
              <td style="text-align: center;">Student</td>
              <td style="text-align: center;">
                <span>
                  <a class="btn btn-primary btn-xs"><i style="color:white;" class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-xs"><i style="color:white;" class="fa fa-trash"></i></a>
                </span>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td style="text-align: center;">Marcel</td>
              <td style="text-align: center;">Parent</td>
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