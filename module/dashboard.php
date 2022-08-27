
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
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from kunjungan")); ?>
    </h3>
  </div>
  <div class="card-footer">
    <div class="stats">
      <i class="material-icons text-danger">info</i>
      <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <i class="material-icons">import_contacts</i>
      </div>
      <p class="card-category">Academic Year</p>
      <h3 class="card-title"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * from pasien")); ?>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-success">info</i>
        <!-- <a href="javascript:;">Get More Space...</a> -->
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
        Dokter Aktif Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct dokter from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
        Obat Dikeluarkan Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct id_obat from resep where reg_date like '".date('Y-m-d')."%'")); ?></span>
    </div>
  </div>
</div>

<div class="col-lg-12">
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
      <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
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
      <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
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
        <!-- <a href="javascript:;">Get More Space...</a> -->
        Kunjungan Pasien Hari ini 
      </div>
      <span class="pull-right"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT distinct pasien from kunjungan where tanggal = '".date('Y-m-d')."'")); ?></span>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card card-stats" style="padding-top: 15px;padding-bottom: 5px;">
    <center>
      <span id="quotes"></span><br>
      <span id="author"></span>
    </center>  
  </div>
</div>



<!-- <div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Kunjungan hari ini</h4>
      <p class="card-category"><?php echo dateIndonesian(date('Y-m-d')) ?></p>
    </div>
    <div class="card-body table-responsive">

     <table class="table">
      <thead class=" text-primary">
        <th>#</th>
        <th>Kode Transaksi</th>
        <th>Tanggal</th>
        <th>Pasien</th>
        <th>Dokter</th>
      </thead>
      <tbody>
        <?php 
        $no=1;
        $query=mysqli_query($conn,"SELECT * from kunjungan where tanggal = '".date('Y-m-d')."' order by id desc");
        foreach ($query as $row): 
          $pasien=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id = '$row[pasien]'"));
          $dokter=mysqli_fetch_array(mysqli_query($conn,"SELECT * from dokter where id = '$row[dokter]'"));
          $tail=100000+$row['id'];
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td>
              <a href="?module=<?php echo $_GET['module'] ?>&act=detail&id=<?php echo $row['id'] ?>">
                <?php echo "K".date_format(date_create($row['tanggal']),"Ymd")."-".$tail; ?>
              </a>
            </td>
            <td><?php echo dateIndonesian($row['tanggal']);?></td>
            <td>
              <strong>
                <?php echo ucwords($pasien['nama']); ?>
              </strong>
              <br>
              <?php echo date('Y')-date_format(date_create($pasien['tanggallahir']),"Y")." tahun"; ?>
            </td>
            <td>
              <strong>
                <?php echo ucwords($dokter['nama']); ?>
              </strong>
              <br>
              <?php echo $dokter['spesialisasi'] ?>
            </td>
          </tr>
          <?php 
        endforeach
        ?>
      </tbody>
    </table>
  </div>
</div>
</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  
  $(document).ready(function() {
    $.ajax({
        url : 'https://api.forismatic.com/api/1.0/?method=getQuote&format=jsonp&lang=en&jsonp=?',
        dataType: 'jsonp',
        success: function (data) { 
        var quote = data.quoteText;
        var author = data.quoteAuthor;        
        console.log("quotesnya ==>", quote)
        console.log("authornya ==>", author)
        $("#quotes").html("<span style='font-weight:bold;font-size:19px'>' "+quote+" '</span>");
          if(author == ''){            
            $("#author").html("<i><span style='font-weight:normal;font-size:14px'>' Unknown '</span></i>");
          } else{
            $("#author").html("<i><span style='font-weight:normal;font-size:14px'>' "+author+" '</span></i>");          
          }
      },
      error: function (data) {
          quote = "A year spent in artificial intelligence is enough to make one believe in God.";
          author = "Alan Perlis";
      }
    });
  });
  
</script>