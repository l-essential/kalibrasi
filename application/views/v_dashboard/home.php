    <?php 
        $templates = base_url() . 'allassets/';
        $customes = base_url() . 'public/';
        $basedata = base_url() . 'public/';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PT L'ESSENTIAL | <?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo $templates ?>dist/img/icon.png">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>mystyle/mystyle.css?=v0.2">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?php echo $templates ?>dist/datepicker/css/datepicker.css">
    <link rel="stylesheet" href="<?php echo $templates ?>dist/yearpicker-css/yearpicker.css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>public/plugins/jquery-ui/css/base/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>public/css/bootstrap-chosen.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="<?php echo base_url(); ?>public/template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url(); ?>public/template/assets/plugins/c3-master/c3.min.css" rel="stylesheet"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" href="<?php echo $templates ?>plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/fullcalendar-bootstrap/main.min.css">
    <link rel="stylesheet" href="<?php echo $templates ?>plugins/ekko-lightbox/ekko-lightbox.css">

    
    <script src="<?php echo $templates ?>plugins/chart.js/Chart.min.js"></script>

    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link href="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
     <link href="<?php echo $customes ?>DataTables-1.10.11/extensions/media/css/editor.dataTables.min.css" rel="stylesheet"> -->
    <link href="<?php echo $customes ?>jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
    <link href="<?php echo $customes ?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- <link href="<?php echo $customes ?>vendor/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/> -->
    <!-- <link href="<?php echo $customes ?>vendor/bootstrap-select-1.13.2/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.css?=0.0.1">
    <style type="text/css">
    @font-face {
            font-family: "Font Digital";
            src: url('<?php echo $templates ?>digital-7/digital-7 (italic).ttf');
            }
    
    .digital {
            font-family: "Font Digital";
            }
    .pl35 {
            padding-left: 35px;
        }
        .btn-like {
            color: #fff;
            background-color: #20c997;
            border-color: #20c997;
            box-shadow: none;
        }
        .card-like.card-outline {
            border-top: 3px solid #20c997;
        }
        .bg-like {
            background-color: #20c997!important;
            color: #ffffff;
        }

        a {
                color: #6e777f;
                text-decoration: none;
                background-color: transparent;
            }
            marquee {
                    width: 100%;
                    background-color: #eef5f9;
                }
                .parsley-required{
                    color: #a94442;
                    background-color: #f2dede;
                    border-color: #ebccd1;
                    padding: 3px;
                    margin-bottom: 0px;
                    border: 1px solid transparent;
                    border-radius: 4px;
                }
                .musthover :hover{
                    background-color: #ffff99;
                }
                .ui-menu-item a.ui-state-focus {
                    background: #ffff99;
                }
                .color-table.muted-table thead th {
                    background-color: #bbc2c5;
                    color: #ffffff;
                }
                .page-item.active .page-link {
                    z-index: 1;
                    color: #fff;
                    background-color: #20c997;
                    border-color: #20c997;
                }
                .topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
                    padding-left: .75rem;
                    padding-right: .75rem;
                    font-size: 9px;
                    line-height: 50px;
                }
                input:hover {
                    background-color: #ffff99;
                }
                select:hover {
                    background-color: #ffff99;
                }
                input[type="checkbox"]:hover  {
                    background-color: #ffff99;
                }
                .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
                    color: #fff;
                    background-color: #33c595;
                }
                .nav-pills .nav-link:not(.active):hover {
                    color: #20c997;
                }

                .card-green-me:not(.card-outline) .card-header {
                    background-color: #20c997;
                }
                .text-dark {
                    color: #757575!important;
                }
                .font-21{
                    font-size:21px;
                }
                .font-19{
                    font-size:19px;
                }
                .font-17{
                    font-size:17px;
                }
                .potong {
                    white-space: nowrap;
                    max-width: 149px;
                    background: white;
                    overflow: hidden;
                    text-overflow: ellipsis ;
                }
                .batas-text {
                    white-space: nowrap;
                    max-width: 235px;
                    background: none;
                    overflow: hidden;
                    text-overflow: ellipsis ;
                    font-size: 13px;
                }
                .border-transparent {
                    border-color: #dee2e6!important;
                }
                .modal-header .close, .modal-header .mailbox-attachment-close {
                    padding: 1rem;
                    margin: -1rem -1rem -1rem auto;
                    margin-left: 0px;
                }
                .modal-title {
                    margin-bottom: 0;
                    line-height: 1.5;
                    padding-right: 117px;
                }
                label:not(.form-check-label):not(.custom-file-label) {
                    font-weight: 300;
                    font-family: initial;
                }
    </style>
    <style type="text/css">
    @font-face {
            font-family: "Font ELEPHNTI";
            src: url('<?php echo $templates ?>digital-7/ELEPHNTI.TTF');
            }
    
    .logo {
            font-family: "Font ELEPHNTI";
            }
    </style>
  

    </head>
    <script type="text/javascript">
                var ROOT = {
                    'site_url': '<?php echo site_url(); ?>',
                    'base_url': '',
                    'controller': null,

                };
        </script>
        <script type="text/javascript">
        history.pushState(null, null, location.href);
        history.back();
        history.forward();
        window.onpopstate = function () { history.go(1); };
    </script>
    <body class="hold-transition sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <?php $this->load->view('pages/top_menu'); ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-light-teal">
        <?php $this->load->view('v_dashboard/sidebar_menu'); ?>
        <!-- /.sidebar -->
    </aside>



    <div id="contentdata">
        <?php $this->load->view('pages/content'); ?>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
   
    <!-- Main Footer -->
    <footer class="main-footer" style="padding-right: 0px;padding-top: 5px;padding-bottom: 7px;">
        <a class="font-17" data-widget="pushmenu" href="javascript:;">
            <img src="<?php echo base_url(); ?>allassets/dist/img/Logo.png" alt="Logo" style="opacity: .8;width: 25px;">
        </a> menu


        <div class="float-right d-none d-sm-inline-block">
        <!-- fas fa-headset -->
        <a href="javascript:;" id="play-button" class="play-pause text-primary text-dark far fa-play-circle" aria-hidden="true"></a>
        <i id="pause-button" class="play-pause d-none text-primary text-dark far fa-pause-circle" aria-hidden="true"></i>
        <i id="now-playing">
          <a class="text-dark" id="title"></a>
        </i>&emsp;
        <a href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-caret-up" style="font-size:17px"></i>
            <div class="dropdown-menu" style="top: -25px;border: 1px solid rgba(0, 0, 0, 0.91);background-color: rgba(0, 0, 0, 0.75);">
            <a class="dropdown-item text-white" href="#" onclick="ToController('setup/setup/background', '')">Set Background</a>
            <a class="dropdown-item text-white" href="#">Set Desktop</a>
            <a class="dropdown-item text-white" href="#" onclick="ToController('e_/Shortcut', '')">Shortcut</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item text-white" href="#">Separated link</a> -->
            <!-- Dropdown menu links -->
        </div>
        </a>&nbsp;

        <a href="javascript:;" class="font-17" onclick="ToController('e_s/Calendar  ', '')">
            <span id="LiveTime" style="font-size:15px"></span>
        </a>&nbsp;
        <a href="javascript:;" class="font-17" data-widget="control-sidebar" data-slide="true">
            <i class="fas fa-sliders-h"></i>
        </a>&emsp;
        <a href="javascript:;" class="font-17" onclick="toIndex()" style="border-left: 1px solid #7d7d7d;"> &emsp;</a>
        </div>
    </footer>
    
    </div>
    <!-- ./wrapper -->
    <!-- <ul class="playlist list-group list-group-flush" style="display:none">
        <li audio_url="playlist/In The End (Official Video) - Linkin Park.mp3"
        img_url="icon.png"
        class="active list-group-item playlist-item">
        In The End</li>
        <li audio_url="playlist/Lirik One Ok Rock Wherever You Are (indonesia Translation).mp3"
        class="list-group-item playlist-item"
        img_url="images/icon.png">
        Wherever You Are</li>
        <li audio_url="playlist/Numb (Official Video) - Linkin Park.mp3"
        class="list-group-item playlist-item"
        img_url="images/icon.png">
        Numb</li>
    </ul> -->
    <!-- <audio id="audio-player" class="d-none" src="" type="audio/mp3" controls="controls"></audio> -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo $templates ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo $templates ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $templates ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo $templates ?>dist/js/adminlte.js"></script>
    <script src="<?php echo $templates ?>dist/js/demo.js"></script>
    <script src="<?php echo $templates ?>dist/yearpicker-js/yearpicker.js"></script>
    <script src="<?php echo $templates ?>plugins/jquery/jquery-migrate-3.1.0.js"></script>

    <script src="<?php echo $templates ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script src="<?php echo $customes ?>jquery.gritter/js/jquery.gritter.js"></script>
    <script src="<?php echo $customes ?>jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
    <script src="<?php echo $customes ?>js/jquery-populate.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>js/jquery.session.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>js/bootstrap-session-timeout.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>js/bootstrap3-typeahead.js"></script>
    <script src="<?php echo $customes ?>js/jquery.hotkeys.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>js/parsley.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/chosen.jquery.js" type="text/javascript"></script>

    <!-- <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script> -->

    <script src="<?php echo $templates ?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo $templates ?>plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo $templates ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo $templates ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="<?php echo $templates ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="<?php echo $templates ?>plugins/moment/moment.min.js"></script>

    <script src="<?php echo $customes ?>vendor/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>vendor/noty-2.2.8/packaged/jquery.noty.packaged.min.js" type="text/javascript"></script>
    <script src="<?php echo $customes ?>vendor/bootstrap-select-1.13.2/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="<?php echo $templates ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/js/jquery.toast.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkJA4ZGFREZKM8AmN8wSaSRcNooR2H6gI&callback=initMap"></script>
    <!-- <script src="<?php echo $templates; ?>js-me/form_validation.js" type="text/javascript"></script> -->
    <!-- Datateble JavaScript -->
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/js/dataTables.editor.min.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/js/dataTables.select.min.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/api/fnReloadAjax.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/media/api/fnStandingRedraw.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/js/buttons.flash.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/js/buttons.html5.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/js/buttons.print.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/js/buttons.colVis.js"></script>
    <script src="<?php echo $customes ?>DataTables-1.10.11/extensions/ColReorderWithResize.js" type="text/javascript"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>public/template/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo $customes ?>vendor/bootstrap-select-1.13.2/dist/js/bootstrap-select.js" type="text/javascript"></script>



    <script src="<?php echo $templates ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo $templates ?>plugins/fullcalendar/main.min.js"></script>
    <script src="<?php echo $templates ?>plugins/fullcalendar-daygrid/main.min.js"></script>
    <script src="<?php echo $templates ?>plugins/fullcalendar-timegrid/main.min.js"></script>
    <script src="<?php echo $templates ?>plugins/fullcalendar-interaction/main.min.js"></script>
    <script src="<?php echo $templates ?>plugins/fullcalendar-bootstrap/main.min.js"></script>
    <script src="<?php echo $templates ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $templates ?>js-me/audioPlayer.js" charset="utf-8"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo $templates ?>plugins/datatables/jquery.dataTables.js"></script> -->
    <script src="<?php echo $templates ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo $templates ?>dist/js/pages/dashboard2.js"></script>
    <script src="<?php echo $templates ?>js-me/time.js?v0.0.3"></script>
    <script src="<?php echo $templates ?>js-me/table-me.js?v0.0.2"></script>
    
    </body>
    </html>
    <script type="text/javascript">
                var dlg_optserror = {show: false, keyboard: true, backdrop: 'static'};  // <-- HERE
                var dlg_opts = {show: false, keyboard: false, backdrop: 'static'};  // <-- HERE

                var url_grid = '<?php echo $url_grid; ?>';
                var url_add = '<?php echo $url_add; ?>';
                var url_edit = '<?php echo $url_edit; ?>';
                var url_delete = '<?php echo $url_delete; ?>';
                var prefix_id = '<?php echo $prefix_id; ?>';
                var url_post = '<?php echo $url_post; ?>';
                var url_index = '<?php echo $url_index; ?>';
                var datacolumn = '';
                var datadelete = '';
                var id_mmenu = '';
                var urlmenu = '';
                var menuname = '';
                var actiondata = '';
                var id = '';
                var listbutton = '';
                var accesscreate = false;
                var accessedit = false;
                var accessdelete = false;

                function checkaccess(check) {
                    var patt = new RegExp(check);
                    var res = patt.test(listbutton);
                    return res;
                }



                if ($.session.get("directurl") !== undefined) {
                    loadcontent($.session.get("directurl"), $.session.get("data-id"));
                }

                function ToUrl(me) {
                    id_mmenu = $(me).attr('data-id');
                    urlmenu = $(me).attr('data-url');
                    menuname = $(me).attr('data-name');
                    if (urlmenu != '') {
                        //$.session.set("directurl", url);
                        var url = ROOT.site_url + '/' + urlmenu;
                        ROOT.controller = urlmenu;
                        $.session.set("data-url", urlmenu);
                        $.session.set("data-name", menuname);
                        $.session.set("data-id", id_mmenu);
                        $.session.set("directurl", url);
                        loadcontent(url, id_mmenu);
                        // window.location.reload();
                        return false;
                    }
                    return false;
                }

                function loadcontent(url, id_mmenu = '') {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '',
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            $('#contentdata').html("<div class='text-center' align='center' style='padding-top:211px; padding-left:199px;'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
                        },
                        xhr: function () {
                            var xhr = new XMLHttpRequest();
                            return xhr;
                        },
                        success: function (returndata) {
                            $.session.set("directurl", url);
                            if (id_mmenu != '') {
                                var urldata = url + "?id_mmenu=" + id_mmenu;
                            } else {
                                var urldata = url;
                            }


                            $("#footerdata").show();
                            $("#breadcrumb_name").html("<a href='javascript:void(0)' data-id='" + $.session.get("data-id") + "' data-url='" + $.session.get("data-url") + "' data-name='" + $.session.get("data-name") + "' onClick='ToUrl(this)' >" + $.session.get("data-name") + "</a>");
                            $('#contentdata').load(urldata, function () {});

                        },
                        error: function (xhr, status, error) {
                            console.log(url);
                            showdialogerror(xhr.responseText);
                        }
                    });
                    return false;
                }


                function loadparamcontent(contentdata, url) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '',
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            $(contentdata).html("<div class='text-center' align='center' style='padding-top: 155px;'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
                        },
                        xhr: function () {
                            var xhr = new XMLHttpRequest();
                            return xhr;
                        },
                        success: function (returndata) {
                            $.session.set("directurl", url);
                            $(contentdata).load(url, function () {});

                        },
                        error: function (xhr, status, error) {
                            showdialogerror(xhr.responseText);
                        }
                    });
                    return false;
                }


                function showdialogerror(errormessage) {
                    _alert("AJAX Respone Error", false);
                    $("#DialogError").modal(dlg_optserror);
                    $("#DialogError").modal('show');
                    $("#dialogerrormessage").html(errormessage);
                    $("#DialogError").on("hide.bs.modal", function () {
                        //window.location.reload();

                    });

                }


                function ToController(controller, title) {
                    var url = ROOT.site_url + '/' + controller;
                    ROOT.controller = controller;
                    loadcontent(url);
                    return false;

                }

                function ToContent(url) {
                    loadcontent(url);
                    return false;
                }


                function postdata(url_post, formdata, url_index) {
                    $.ajax(
                            {
                                type: "POST",
                                url: url_post,
                                dataType: "json",
                                data: formdata,
                                cache: false,
                                success:
                                        function (data, text)
                                        {

                                            if (data.valid == true) {
                                                ToContent(url_index);
                                            }
                                            hideloading();
                                            _alert(data.msg, data.valid);
                                        },
                                error: function (request, status, error) {
                                    //alert(request.responseText);
                                    showdialogerror(request.responseText);
                                }
                            });
                    return false;
                }

                function showloading() {
                    $(document).ready(function () {
                        $('#Modalloading').modal('show');
                    });
                }
                function hideloading() {
                    $(document).ready(function () {
                        $('#Modalloading').on('shown.bs.modal', function (e) {
                            $('#Modalloading').modal('hide');

                        });
                    });
                }


                // $.sessionTimeout({
                //     title:'Your session is About to Expire!',
                //     message: '<?php echo $this->session->userdata('ses_username'); ?> your session is about to expire.',
                //     logoutButton:'Logout',
                //     keepAliveButton:'Stay Connected',


                //     keepAliveUrl: '<?php echo site_url('Dashboard') ?>',
                //     logoutUrl: '<?php echo site_url('Login/logout') ?>',
                //     redirUrl: '<?php echo site_url('Login/logout') ?>',
                //     //warnAfter: 3000, //3 detik, 60000 = 1 menit
                //     warnAfter:  187000, // 5 menit
                //     redirAfter: 300000, // 3 menit
                //     countdownBar: true
                // });


                function postaction(url, param) {
                    var theResponse = {valid: false, message: ''};

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: param,
                        dataType: "json",
                        async: false,
                        success: function (data) {
                            theResponse = data;
                        },
                        error: function (xhr, status, error) {
                            showdialogerror(xhr.responseText);
                            theResponse = {valid: false, message: 'Ajax error'};
                        }
                    });
                    return theResponse;
                }

                function Logoutjs() {
                    var resultlogout = postaction('<?php echo site_url('Login/Logoutjs') ?>', '');
                    $.session.clear();
                    window.location.reload();
                }
                function toIndex() {
                    $.session.clear();
                    window.location.reload();
                }
                
                function refreshtemplate() {
                    window.location.reload();
                }


                function injectHTML(html_string) {
                    var iframe = document.getElementById('contentiframe');

                    var iframedoc = iframe.document;
                    if (iframe.contentDocument)
                        iframedoc = iframe.contentDocument;
                    else if (iframe.contentWindow)
                        iframedoc = iframe.contentWindow.document;

                    if (iframedoc) {
                        iframedoc.open();
                        iframedoc.writeln(html_string);
                        iframedoc.close();
                    } else {
                        alert('Cannot inject dynamic contents into iframe.');
                    }

                }

                function _alert(msg, valid)
                {
                    if (valid == true) {
                        var coloralert = '#ff6849';
                        var iconalert = 'success';
                        var textalert = 'Success';
                        var position = 'top-right';
                    } else {
                        var coloralert = '#ff6849';
                        var iconalert = 'error';
                        var textalert = 'Error';
                        var position = 'top-right';
                    }

                    if (valid == 'warning') {
                        var iconalert = 'warning';
                        var textalert = 'Warning';
                        var position = 'top-right';
                    }

                    $.toast({
                        heading: textalert + ' Information',
                        text: msg,
                        position: position,
                        loaderBg: coloralert,
                        icon: iconalert,
                        hideAfter: 5000,
                        stack: 6
                    });

                }

                function adddata() {
                    ToContent(url_add);
                }

                function editdata(id) {
                    ToContent(url_edit + '/' + id);
                }
                function deletedata(id) {
                    $('#DialogConfirm').modal('show');
                    $("#DialogConfirm  input[name=id]").val(id);
                }

                function submitform() {
                    var form = $("#formdata");
                    form.parsley().validate();
                    if (form.parsley().isValid()) {
                        $("#actiondata").val(actiondata);
                        var formdata = $("#formdata").serialize();
                        postdata(url_post, formdata, url_index);
                        /*
                        var resultdata = postaction(url_post, formdata);
                        _alert(resultdata.msg, resultdata.valid);
                        if (resultdata.valid == true) {
                        ToContent(url_index);
                        }
                        */
                    }
                    return false;
                }

                function closedata() {
                    ToContent(url_index);
                }
                
                function changepassword() {
                    ToContent('<?php echo site_url('Login/changepassword') ?>');
                }
                function lockscreen() {
                    ToContent('<?php echo site_url('Login/lockscreen') ?>');
                }
                
                function formatnumber(nStr,desimalpoint) {
                    if(desimalpoint=='.'){
                    var pemisahnilai =',';  
                    }else{
                    var pemisahnilai ='.';  
                    }
                    
                    nStr += '';
                    var x = nStr.split(desimalpoint);
                    var x1 = x[0];
                    var x2 = x.length > 1 ? desimalpoint + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + pemisahnilai + '$2');
                    }
                    
                    return x1 + x2;
                }
                
                function toformatdate(strdate,format) {
                    var tmptanggal = strdate.split("-");
                    if(format=='ind'){
                        return tmptanggal[2]+' - '+tmptanggal[1]+'-'+tmptanggal[0];
                    }else{
                        return tmptanggal[0]+' - '+tmptanggal[1]+'-'+tmptanggal[2];
                    }
                }






            </script>
    <script>

        getnotification();
        setInterval(function () {
            getnotification();
        }, 30000);
        
        function getnotification() {
            var resultnotif = postaction('<?php echo $url_notification; ?>', '');
            if (resultnotif.valid == true) {
                $("#alertnotification").show();
                $("#count").html("");
                $("#contentnofif").html("");
                $("#count").html(resultnotif.count);
                var notifdata = "<div class='message-center' style='overflow: hidden; width: auto; height: 250px;'>";
                $.each(resultnotif.data, function (key, value) {
                    notifdata = notifdata + "<a href='#'>";
                    notifdata = notifdata + "<div class='btn btn-danger btn-circle'><i class='fa fa-link'></i></div>";
                    notifdata = notifdata + "<div class='mail-contnet'>";
                    notifdata = notifdata + "<h6>" + value.title + "</h6> <span class='mail-desc'>" + value.message + "</span> <span class='time'>" + value.createtime + "</span>";
                    notifdata = notifdata + "</div>";
                    notifdata = notifdata + "</a>";
                });
                notifdata = notifdata + "</div>";
                $("#contentnofif").html(notifdata);
            } else {
                $("#alertnotification").hide();
                $("#count").html(0);
                $("#contentnofif").html("");
            }
        }

    </script>
        <div class="modal fade " id="Modalloading" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered">                  
                <div class="modal-body" align="center">
                    <img class=""  src="<?php echo base_url(); ?>public/images/loading2.gif"  width="200" height="200"/>
                </div>                  
            </div>
        </div>
        <div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header btn-danger">
                        <input type ="hidden" name="id"/>
                        <h4 class="modal-title"><font color="white">Confirm for Delete Data</font></h4>
                    </div>
                    <div class="modal-body">
                        <font color="black">Are you sure delete this data ?</font>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="process_delete()" class="btn btn-danger" action="delete">Ok</button>
                    </div>
                </div>
            </div>
        </div>
            
        <div id="DialogError" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="DialogErrorLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header btn-success">
                        <h4 class="modal-title"><font color="white">Error Message</font></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="dialogerrormessage"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
