<?php 
$edit=mysqli_fetch_array(mysqli_query($conn,"SELECT * from pasien where id='$_GET[id]'"));
?>
<div class="col-md-6 col-xs-12">
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
    <div class="card card-body  mt-n6">
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
              Student - X IPA 4
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-3 col-xs-12">
  <div class="card">
    <div class="card-header pb-0">
      <h6>Timeline light</h6>
    </div>
    <div class="card-body p-3">
      <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              notifications
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
            <p class="text-secondary text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-primary p-3">
            <i class="material-icons text-white text-sm opacity-10">
              code
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
            <p class="text-secondary text-xs mt-1 mb-0">21 DEC 11 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-success p-3">
            <i class="material-icons text-white text-sm opacity-10">
              shopping_cart
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
            <p class="text-secondary text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-info p-3">
            <i class="material-icons text-white text-sm opacity-10">
              credit_card
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
            <p class="text-secondary text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              vpn_key
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
            <p class="text-secondary text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-primary p-3">
            <i class="material-icons text-white text-sm opacity-10">
              inventory_2
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New message unread</h6>
            <p class="text-secondary text-xs mt-1 mb-0">16 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-success p-3">
            <i class="material-icons text-white text-sm opacity-10">
              done
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Notifications unread</h6>
            <p class="text-secondary text-xs mt-1 mb-0">15 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-info p-3">
            <i class="material-icons text-white text-sm opacity-10">
              mail
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New request</h6>
            <p class="text-secondary text-xs mt-1 mb-0">14 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              sports_esports
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Controller issues</h6>
            <p class="text-secondary text-xs mt-1 mb-0">13 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-3 col-xs-12">
  <div class="card">
    <div class="card-header pb-0">
      <h6>Timeline light</h6>
    </div>
    <div class="card-body p-3">
      <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              notifications
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
            <p class="text-secondary text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-primary p-3">
            <i class="material-icons text-white text-sm opacity-10">
              code
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
            <p class="text-secondary text-xs mt-1 mb-0">21 DEC 11 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-success p-3">
            <i class="material-icons text-white text-sm opacity-10">
              shopping_cart
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
            <p class="text-secondary text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-info p-3">
            <i class="material-icons text-white text-sm opacity-10">
              credit_card
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
            <p class="text-secondary text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              vpn_key
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
            <p class="text-secondary text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-primary p-3">
            <i class="material-icons text-white text-sm opacity-10">
              inventory_2
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New message unread</h6>
            <p class="text-secondary text-xs mt-1 mb-0">16 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-success p-3">
            <i class="material-icons text-white text-sm opacity-10">
              done
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Notifications unread</h6>
            <p class="text-secondary text-xs mt-1 mb-0">15 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block mb-3">
          <span class="timeline-step bg-info p-3">
            <i class="material-icons text-white text-sm opacity-10">
              mail
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">New request</h6>
            <p class="text-secondary text-xs mt-1 mb-0">14 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
        <div class="timeline-block">
          <span class="timeline-step bg-dark p-3">
            <i class="material-icons text-white text-sm opacity-10">
              sports_esports
            </i>
          </span>
          <div class="timeline-content pt-1">
            <h6 class="text-dark text-sm font-weight-bold mb-0">Controller issues</h6>
            <p class="text-secondary text-xs mt-1 mb-0">13 DEC</p>
            <p class="text-sm text-dark mt-3 mb-2">
              People care about how you see the world, how you think, what motivates you, what you’re struggling with or afraid of.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>