<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
  <div class="logo">
    <a class="simple-text logo-normal">
      <strong>Kita School Landing</strong>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav" id="nav">
      <li class="nav-item <?php if (!@$_GET['module']){echo 'active';} ?>">
        <a class="nav-link" href="?">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='master'){echo 'active';} ?>">
        <a class="nav-link" href="?module=master" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="material-icons">content_paste</i>
          <p>Menu</p>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons">content_paste</i>
                <p>Sub menu 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons">content_paste</i>
                <p>Sub menu 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons">content_paste</i>
                <p>Sub menu 1</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='master'){echo 'active';} ?>">
        <a class="nav-link" href="?module=master" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="material-icons">content_paste</i>
          <p>Menu</p>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons mt-1">remove</i>
                <p>Sub menu 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons mt-1">remove</i>
                <p>Sub menu 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?module=x">
                <i class="material-icons mt-1">remove</i>
                <p>Sub menu 1</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='siswa'){echo 'active';} ?>">
        <a class="nav-link" href="?module=siswa">
          <i class="material-icons">content_paste</i>
          <p>Siswa</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='teacher'){echo 'active';} ?>">
        <a class="nav-link" href="?module=teacher">
          <i class="material-icons">content_paste</i>
          <p>Teacher</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='parent'){echo 'active';} ?>">
        <a class="nav-link" href="?module=parent">
          <i class="material-icons">content_paste</i>
          <p>Parent</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='ppdb'){echo 'active';} ?>">
        <a class="nav-link" href="?module=ppdb">
          <i class="material-icons">person</i>
          <p>PPDB</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='payment'){echo 'active';} ?>">
        <a class="nav-link" href="?module=payment">
          <i class="material-icons">health_and_safety</i>
          <p>Payment</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='bk'){echo 'active';} ?>">
        <a class="nav-link" href="?module=bk">
          <i class="material-icons">health_and_safety</i>
          <p>BK</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='master-data'){echo 'active';} ?>">
        <div class="nav-link">
          <i class="material-icons">dashboard</i>
          <p>Master Data</p>
        </div>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='list-school'){echo 'active';} ?>">
        <a class="nav-link" href="?module=list-school">
          <i class="material-icons">content_paste</i>
          <p>List Schools</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='list-school-level'){echo 'active';} ?>">
        <a class="nav-link" href="?module=list-school-level">
          <i class="material-icons">content_paste</i>
          <p>List School Levels</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='class'){echo 'active';} ?>">
        <a class="nav-link" href="?module=class">
          <i class="material-icons">content_paste</i>
          <p>List classes</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='course'){echo 'active';} ?>">
        <a class="nav-link" href="?module=course">
          <i class="material-icons">content_paste</i>
          <p>List Courses</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='list-employee'){echo 'active';} ?>">
        <a class="nav-link" href="?module=list-employee">
          <i class="material-icons">content_paste</i>
          <p>List Employees</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='list-teachers'){echo 'active';} ?>">
        <a class="nav-link" href="?module=list-teachers">
          <i class="material-icons">content_paste</i>
          <p>List Teachers</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='list-students'){echo 'active';} ?>">
        <a class="nav-link" href="?module=list-students">
          <i class="material-icons">content_paste</i>
          <p>List Students</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='settings'){echo 'active';} ?>">
        <div class="nav-link">
          <i class="material-icons">dashboard</i>
          <p>Settings</p>
        </div>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='apps'){echo 'active';} ?>">
        <a class="nav-link" href="?module=apps">
          <i class="material-icons">health_and_safety</i>
          <p>Apps</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='role'){echo 'active';} ?>">
        <a class="nav-link" href="?module=role">
          <i class="material-icons">health_and_safety</i>
          <p>Role</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='backup-databases'){echo 'active';} ?>">
        <a class="nav-link" href="?module=backup-databases">
          <i class="material-icons">health_and_safety</i>
          <p>Backups Databases</p>
        </a>
      </li>
    </ul>
  </div>
</div>