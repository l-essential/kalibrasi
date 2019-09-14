<?php
$baseurlindex = base_url('public') . '/';
$baseurl = base_url('public/template/login') . '/';

//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="<?php echo $baseurlindex; ?>images/favicon.png" type="image/x-icon" />
        <link rel="icon" href="<?php echo $baseurlindex; ?>images/favicon.png" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            <?php echo judul_apps; ?>
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="<?php echo $baseurlindex; ?>css/materialicon/materialicon.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $baseurlindex; ?>css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    

        <link href="<?php echo $baseurl ?>assets/css/material-dashboard.min40a0.css?v=2.0.2" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="<?php echo $baseurl ?>assets/demo/demo.css" rel="stylesheet" />

        <style>

            .card .card-header-rose .card-icon, .card .card-header-rose .card-text, .card .card-header-rose:not(.card-header-icon):not(.card-header-text), .card.bg-rose, .card.card-rotate.bg-rose .back, .card.card-rotate.bg-rose .front {
                background: linear-gradient(60deg,#28bea9,#2e6e6e);
            }
            .btn.btn-rose.btn-link, .btn.btn-rose.btn-link:active, .btn.btn-rose.btn-link:focus, .btn.btn-rose.btn-link:hover {
                background-color: transparent;
                color: #1d654e;
            }
        </style>

    </head>

    <body class="off-canvas-sidebar">


        <div class="wrapper wrapper-full-page">



            <div class="page-header lock-page header-filter" style="background-image: url('<?php echo $baseurl ?>assets/img/lock.jpg')">
                <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
                <div class="container">
                    <div class="col-md-4 ml-auto mr-auto">
                        <form class="form" method="" action="#">
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Login <?php echo judul_apps; ?></h4>
                                    <div class="social-line">
                                        <i class="material-icons">lock_outline</i>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <p class="card-description text-center"></p>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username...">
                                        </div>
                                    </span>                                   
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password...">
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#" id="login-button" class="btn btn-rose btn-link btn-lg">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="<?php echo $baseurl ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseurl ?>assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseurl ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <!--  Notifications Plugin    -->
        <script src="<?php echo $baseurl; ?>assets/js/bootstrap-notify.js"></script>




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
                                password: $("#password").val() //password: adalah sebuah properties, $("#password") adalah sebuah object dari id input password

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
