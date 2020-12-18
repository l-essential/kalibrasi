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
  <title>AdminLTE 3 | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo $templates ?>index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
      <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
      <input type="hidden" name="actiondata" id="actiondata" />
      <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
      <input type="hidden" name="checkdata1" id="checkdata1" value="department_code" />
      <input type="hidden" name="checkdata2" id="checkdata2" value="" />
      <input type="hidden" name="checkdata3" id="checkdata3" value="" />
      <input type="hidden" name="checkdata4" id="checkdata4" value="" />
      <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" id="btnsimpan" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $templates ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $templates ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $templates ?>dist/js/adminlte.min.js"></script>

</body>
</html>


<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
       

        $("#titledata").html('<?php echo $title; ?>');

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);

                var formdata = $("#formdata").serialize();
                var resultformdata = postaction('<?php echo site_url('scr/Useraccess/postdata'); ?>', formdata);

                 if (resultformdata.valid == true) {
                        loading_proces();
                        _alert("Register data berhasil,silakan cek email untuk mendapatkan informasi account login", true);
                        var resultformdataemail = postaction('<?php echo site_url('scr/Useraccess/sendemailregister'); ?>', formdata);
                        _alert(resultformdataemail.message, resultformdataemail.valid);
                        $("#content_register").hide();
                        $("#contect_selesairegister").show();

                    } else {
                        _alert(resultformdata.msg);
                    }
            }


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });


    });
    function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }
</script>
