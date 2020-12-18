<?php 
      $templates = base_url() . 'allassets/';
      $customes = base_url() . 'public/';
      $basedata = base_url() . 'public/';
      $baseurl = base_url('public/template/login') . '/';
      $baseurlindex = base_url('public') . '/';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. L`Essential | Log in</title>
  <link rel="shortcut icon" href="<?php echo $templates ?>dist/img/icon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link href="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseurlindex; ?>css/materialicon/materialicon.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseurlindex; ?>css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
   
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>

            .card .card-header-rose .card-icon, .card .card-header-rose .card-text, .card .card-header-rose:not(.card-header-icon):not(.card-header-text), .card.bg-rose, .card.card-rotate.bg-rose .back, .card.card-rotate.bg-rose .front {
                background: linear-gradient(60deg,#28bea9,#2e6e6e);
            }
            .btn.btn-rose.btn-link, .btn.btn-rose.btn-link:active, .btn.btn-rose.btn-link:focus, .btn.btn-rose.btn-link:hover {
                background-color: transparent;
                color: #1d654e;
            }
            .btn-like {
              color: #fff;
              background-color: #20c997;
              border-color: #20c997;
              box-shadow: none;
            }
        </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color:#268f5b;font-family: initial;">
    <img src="<?php echo $templates ?>dist/img/Logo.png" alt="Logo" width="40" style="opacity: .9">
        <b>PT. L'ESSENTIAL </b>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="border-radius: 15px;">
    <p class="login-box-msg">  Sign in to start your session</p>

      <form class="form" method="" action="#">
      <!-- <input type="hidden" name="ip" id="ip" class="form-control" value="<?php echo $ip ?>"> -->
        <div class="input-group mb-3">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
             
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
              <a href="#" id="login-button" class="btn btn-sm btn-like btn-block">Submit</a>
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <p class="mb-1">
        <a href="<?php echo site_url('Login/forgot_password') ?>">I forgot my password</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $templates ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $templates ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $templates ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo $templates ?>plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/js/jquery.toast.js" type="text/javascript"></script>
<script src="<?php echo $baseurl; ?>assets/js/bootstrap-notify.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $templates ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo $templates ?>dist/js/demo.js"></script>

  <script type="text/javascript">
            var url_post;
            url_post = '<?php echo $url_post; ?>'; //setting url post, variable di dapat dari controller



            function notif(message, valid) {
                if (valid == true) {
                    var type = 'success';
                } else {
                    var type = 'danger';
                }


                $.notify({
                    icon: "add_alert",
                    message: message

                }, {
                    type: type,
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'center'
                    }
                });
            }

            $(document).ready(function ()
            {

                /*ketika tombol login di klik maka 
                 * akan mengirim data dengan teknik ajax, dengan 
                 * membuat properties username dan password,
                 * isi didapat dari di username dan password
                 */

                $(document).keypress(function (e) {
                    if (e.which == 13) {
                        loginproses();
                    }
                });


                $('#login-button').click(
                        function ()
                        {
                            loginproses();
                        });



            });


            function loginproses() {
                $.ajax(
                        {
                            type: "POST", //type ajax adalah post
                            url: url_post, // ketik di klik, akan mengirim data ke url postnya
                            dataType: "json", //data yang di kirim berupa json
                            data: {
                                username: $("#username").val(), //username: adalah sebuah properties, $("#username") adalah sebuah object dari id input username
                                password: $("#password").val(),
                                ip: $("#ip").val() //password: adalah sebuah properties, $("#password") adalah sebuah object dari id input password

                            },
                            cache: false,
                            success:
                                    function (data, text)
                                    {

                                        if (data.hasil == true) {
                                            window.location = data.redirecto;
                                        } else {
                                            if (data.err_loginas == null) {

                                                notif(data.msg, false);

                                            }

                                        }
                                    },
                            error: function (request, status, error) {
                                alert(request.responseText + " " + status + " " + error);
                            }
                        });
                return false;

            }

        </script>  

</body>
</html>

      
