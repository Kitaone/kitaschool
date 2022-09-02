
<div class="col-lg-12">
  <span>Admin</span>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">person</i>
      </div>
      <p class="card-category">BK</p>
      <h3 class="card-title">
        
      </h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-danger">info</i>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">import_contacts</i>
      </div>
      <p class="card-category">Academic Year</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-danger card-header-icon">
      <div class="card-icon">
        <i class="material-icons">school</i>
      </div>
      <p class="card-category">School</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from dokter")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-danger">info</i>
        
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="material-icons">person_pin_circle</i>
      </div>
      <p class="card-category">Student</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from obat")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-info">info</i>
        
      </div>
    </div>
  </div>
</div>

<!-- <div class="col-lg-12">
  <span>Guru</span>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">location_city</i>
      </div>
      <p class="card-category">Class</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from kunjungan")); ?>
    </h3>
  </div>
  <div class="card-footer">
    <div class="stats">
      <i class="material-icons text-danger">info</i>
      
      Kunjungan Hari ini 
    </div>
    <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
  </div>
</div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="material-icons">person_pin_circle</i>
      </div>
      <p class="card-category">Student</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">import_contacts</i>
      </div>
      <p class="card-category">Course</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-primary card-header-icon">
      <div class="card-icon">
        <i class="material-icons">import_contacts</i>
      </div>
      <p class="card-category">Course</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>

<div class="col-lg-12">
  <span>Murid</span>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="material-icons">payment</i>
      </div>
      <p class="card-category">Payment Billing</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from kunjungan")); ?>
    </h3>
  </div>
  <div class="card-footer">
    <div class="stats">
      <i class="material-icons text-danger">info</i>
      
      Kunjungan Hari ini 
    </div>
    <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
  </div>
</div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">payment</i>
      </div>
      <p class="card-category">Payment Record</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-primary card-header-icon">
      <div class="card-icon">
        <i class="material-icons">payment</i>
      </div>
      <p class="card-category">Payment Record</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="card card-stats">
    <div class="card-header card-header-secondary card-header-icon">
      <div class="card-icon">
        <i class="material-icons">payment</i>
      </div>
      <p class="card-category">Payment Record</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div> -->