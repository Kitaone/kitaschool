<!doctype html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>
            Login
        </title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <!-- <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" /> -->
        <!-- <link href="assets/demo/demo.css" rel="stylesheet" /> -->
        <style>
            body {
                color: #000;
                overflow-x: hidden;
                height: 100%;
                background-color: #B0BEC5;
                background-repeat: no-repeat
            }
            .card0 {
                box-shadow: 0px 4px 8px 0px #757575;
                border-radius: 0px
            }
            .card2 {
                margin: 0px 40px
            }
            .logo {
                width: 200px;
                height: 100px;
                margin-top: 20px;
                margin-left: 35px
            }
            .image {
                width: 360px;
                height: 280px
            }
            .border-line {
                border-right: 1px solid #EEEEEE
            }
            .facebook {
                background-color: #3b5998;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer
            }
            .twitter {
                background-color: #1DA1F2;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer
            }
            .linkedin {
                background-color: #2867B2;
                color: #fff;
                font-size: 18px;
                padding-top: 5px;
                border-radius: 50%;
                width: 35px;
                height: 35px;
                cursor: pointer
            }
            .line {
                height: 1px;
                width: 45%;
                background-color: #E0E0E0;
                margin-top: 10px
            }
            .or {
                width: 10%;
                font-weight: bold
            }
            .text-sm {
                font-size: 14px !important
            }
            ::placeholder {
                color: #BDBDBD;
                opacity: 1;
                font-weight: 300
            }
            :-ms-input-placeholder {
                color: #BDBDBD;
                font-weight: 300
            }
            ::-ms-input-placeholder {
                color: #BDBDBD;
                font-weight: 300
            }
            input,
            textarea {
                padding: 10px 12px 10px 12px;
                border: 1px solid lightgrey;
                border-radius: 2px;
                margin-bottom: 5px;
                margin-top: 2px;
                width: 100%;
                box-sizing: border-box;
                color: #2C3E50;
                font-size: 14px;
                letter-spacing: 1px
            }
            input:focus,
            textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: 1px solid #304FFE;
                outline-width: 0
            }
            button:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                outline-width: 0
            }
            a {
                color: inherit;
                cursor: pointer
            }
            .btn-blue {
                background-color: #1A237E;
                width: 150px;
                color: #fff;
                border-radius: 2px
            }
            .btn-blue:hover {
                background-color: #000;
                cursor: pointer
            }
            .bg-blue {
                color: #fff;
                background-color: #1A237E
            }
            @media screen and (max-width: 991px) {
                .logo {
                    margin-left: 0px
                }
                .image {
                    width: 300px;
                    height: 220px
                }
                .border-line {
                    border-right: none
                }
                .card2 {
                    border-top: 1px solid #EEEEEE !important;
                    margin: 0px 15px
                }
            }
            .flip-card {
                padding: 5px;
                background-color: transparent;
                width: 100%;
                height: 120px;
                perspective: 1000px;
            }
            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
            .flip-card-front, .flip-card-back {
                position: absolute;
                padding-top: 10%;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }
            .flip-card-front {
                /*background-color: #bbb;*/
                color: black;
            }
            .flip-card-back {
                background-color: #2980b9;
                color: white;
                transform: rotateY(180deg);
            }
        </style>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
        </script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
        </script>
        <script type='text/javascript'>
        </script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row">
                                <!-- <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> -->
                            </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                                <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <?php 
                            if (isset($_SESSION['flash'])): ?>
                                <div class="<?php echo $_SESSION['flash']['class']; ?>
                                mt-3 mb-3">
                                <i class="<?php echo $_SESSION['flash']['icon'] ?>">
                                </i>
                                <?php echo $_SESSION['flash']['label']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        ×
                                    </span>
                                </button>
                            </div>
                        <?php endif ?>
                        <div class="row px-3 fade-in">
                            <div class="col-md-4 col-xs-12">
                                <div class="flip-card">
                                    <a href="media.php">

                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <i class="fa fa-user-plus fa-3x"></i>
                                                <h5>PPDB</h5>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>Aplikasi PPDB</p> 
                                                <p></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="flip-card">
                                    <a href="media.php">
                                        <div class="flip-card-inner bg-primary">
                                            <div class="flip-card-front">
                                                <i class="fa fa-user-plus fa-3x text-white"></i>
                                                <h5 class="text-white">BK</h5>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>Aplikasi BK</p> 
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="flip-card">
                                    <a href="media.php">
                                        <div class="flip-card-inner bg-primary">
                                            <div class="flip-card-front">
                                                <i class="fa fa-plus fa-3x text-white"></i>
                                                <h5 class="text-white">Others</h5>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>Aplikasi Lainnya</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">
                        Copyright &copy; 
                        <?php echo date('Y') ?>
                        . All rights reserved.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/core/jquery.min.js"></script>

    <script type="text/javascript">
        $( document ).ready(function() {

          $(".card2").fadeIn();
      });
  </script>
</body>
</html>