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
      <li class="nav-item <?php if (@$_GET['module']=='ppdb'){echo 'active';} ?>">
        <a class="nav-link" href="?module=ppdb">
          <i class="material-icons">person</i>
          <p>PPDB</p>
        </a>
      </li>
      <!-- <li class="nav-item <?php if (@$_GET['module']=='obat'){echo 'active';} ?>">
        <a class="nav-link" href="?module=obat">
          <i class="material-icons">bubble_chart</i>
          <p>Obat</p>
        </a>
      </li>
      <li class="nav-item <?php if (@$_GET['module']=='dokter'){echo 'active';} ?>">
        <a class="nav-link" href="?module=dokter">
          <i class="material-icons">health_and_safety</i>
          <p>Dokter</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>