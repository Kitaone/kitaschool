<?php 
$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id='$_GET[id]'"));
?>
<div class="col-md-9 col-xs-12">
  <!-- <div class="card">
    <div class="card-header">
      <h3><b>Detail Calon Siswa</b></h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 col-xs-12"></div>
        <div class="col-md-3 col-xs-12"></div>
        <div class="col-md-3 col-xs-12"></div>
      </div>
    </div>
  </div> -->
  <div class="">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body  mt-n6 mb-2">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="assets/img/user.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Jamal Bahri
            </h5>
            <p class="mb-0 font-weight-normal text-sm">
              Student - XII IPA 4
            </p>
          </div>
        </div>
        <div class="col-auto my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <nav class="pull-right">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-apps-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="nav-apps" aria-selected="true">Profile</a>
              <a class="nav-item nav-link" id="nav-transcripts-tab" data-toggle="tab" href="#transcripts" role="tab" aria-controls="nav-transcripts" aria-selected="false">Transcripts</a>
              <a class="nav-item nav-link" id="nav-document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="nav-document" aria-selected="false">Document</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="card">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h3 class="mb-0 text-primary"><b>Profile Information</b></h3>
                </div>
                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i class="fa fa-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                Hi, I’m Jamal Bahri, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
              </p>
              <hr class="horizontal gray-light my-4">
              <table>
                <tr>
                  <td ><strong class="text-dark">Full Name</strong></td>
                  <td class="p-3">:</td>
                  <td>Jamal Bahri</td>
                </tr>
                <tr>
                  <td ><strong class="text-dark">Phone</strong></td>
                  <td class="p-3">:</td>
                  <td>089566123822</td>
                </tr>
                <tr>
                  <td ><strong class="text-dark">Email</strong></td>
                  <td class="p-3">:</td>
                  <td>Jamalbahrialbakasy@gmail.com</td>
                </tr>
                <tr>
                  <td ><strong class="text-dark">Location</strong></td>
                  <td class="p-3">:</td>
                  <td>Bojong Gede</td>
                </tr>
                <tr>
                  <td ><strong class="text-dark">Social</strong></td>
                  <td class="p-3">:</td>
                  <td>
                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      <!-- </div>
        <div class="tab-pane fade" id="transcripts" role="tabpanel" aria-labelledby="nav-transcripts-tab"> -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0 text-primary"><b>Transcript</b></h3>
              <p class="tetx-muted">Course result by years</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Year</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Period</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Grade</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Course Code</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Course Name</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Teacher</th>
                      <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2020/2021</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">X</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    

                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2021/2022</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XI</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    

                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Ganjil</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43431</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Ilmu Pengetahuan Alam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43432</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Matematika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gumilar Lesmana Wijayadi</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43433</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Biologi</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Gilang Sadewo</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43434</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Fisika</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Ega Sanjaya</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43435</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Kimia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Sinta Yulia Fitri</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Indonesia</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Elin Marliana</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43436</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Bahasa Inggris</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Brigitta Chesya Priscilla</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">A</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43437</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">TIK</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Chairul Rizki</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">2022/2023</p>
                      </td>
                      <td class="text-sm">
                        <p class="text-sm font-weight-normal mb-0">Genap</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">XII</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-normal mb-0">43438</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">Pendididkan Agama Islam</p>
                      </td>
                      <td class="">
                        <p class="text-sm font-weight-normal mb-0">Fanny Wibianka</p>
                      </td>
                      <td>
                        <span class="badge badge-dot me-4">
                          <i class="bg-info"></i>
                          <span class="text-dark text-xs">B</span>
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
  </div>
  <div class="col-md-3 col-xs-12">
    <div class="card">
      <div class="card-header pb-0">
        <h6>Payment Activity</h6>
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-primary p-3">
              <i class="material-icons text-white text-sm opacity-10">
                notifications
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">SPP Agustus</h6>
              <p class="text-secondary text-xs mt-1 mb-0">01 AUG 7:20</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 850.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-success p-3">
              <i class="material-icons text-white text-sm opacity-10">
                sports_esports
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Study Tour Lombok</h6>
              <p class="text-secondary text-xs mt-1 mb-0">14 JUL 9:34</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 7.800.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-primary p-3">
              <i class="material-icons text-white text-sm opacity-10">
                notifications
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">SPP Juli</h6>
              <p class="text-secondary text-xs mt-1 mb-0">01 JUL 7:21</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 850.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-primary p-3">
              <i class="material-icons text-white text-sm opacity-10">
                notifications
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">SPP Juni</h6>
              <p class="text-secondary text-xs mt-1 mb-0">02 JUN 7:10</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 850.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-primary p-3">
              <i class="material-icons text-white text-sm opacity-10">
                notifications
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">SPP Mei</h6>
              <p class="text-secondary text-xs mt-1 mb-0">01 MAY 7:37</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 850.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-primary p-3">
              <i class="material-icons text-white text-sm opacity-10">
                notifications
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">SPP April</h6>
              <p class="text-secondary text-xs mt-1 mb-0">01 APR 7:20</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Transfer BRI Rp. 850.000
              </p>
            </div>
          </div>
          <div class="timeline-block mb-3">
            <span class="timeline-step bg-dark p-3">
              <i class="material-icons text-white text-sm opacity-10">
                content_paste
              </i>
            </span>
            <div class="timeline-content pt-1">
              <h6 class="text-dark text-sm font-weight-bold mb-0">Pendaftaran</h6>
              <p class="text-secondary text-xs mt-1 mb-0">03 JUL 2020 11.32</p>
              <p class="text-sm text-dark mt-3 mb-2">
                Cash Rp. 5.600.000
              </p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>