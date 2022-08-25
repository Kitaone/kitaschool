<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
  <div class="logo">
    <a class="simple-text logo-normal">
      <strong>Kita School Landing</strong>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item <?php if (!@$_GET['module']){echo 'active';} ?>">
        <a class="nav-link" href="?">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
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
      <li class="nav-item <?php if (@$_GET['module']=='Parent'){echo 'active';} ?>">
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
      <li class="nav-item <?php if (@$_GET['module']=='apps'){echo 'active';} ?>">
        <a class="nav-link" href="?module=ppdb">
          <i class="material-icons">person</i>
          <p>Apps</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='course'){echo 'active';} ?>">
        <a class="nav-link" href="?module=course">
          <i class="material-icons">bubble_chart</i>
          <p>Course</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='class'){echo 'active';} ?>">
        <a class="nav-link" href="?module=class">
          <i class="material-icons">health_and_safety</i>
          <p>class</p>
        </a>
      </li>

      <li class="nav-item <?php if (@$_GET['module']=='role'){echo 'active';} ?>">
        <a class="nav-link" href="?module=role">
          <i class="material-icons">health_and_safety</i>
          <p>Role</p>
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
    </ul>
  </div>
</div>