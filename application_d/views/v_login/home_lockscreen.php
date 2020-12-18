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
  <title>AdminLTE 3 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseurlindex; ?>css/materialicon/materialicon.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseurlindex; ?>css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
   
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo $templates ?>index2.html"><b>PT</b> L'ESSENTIAL</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo $this->session->userdata('ses_username') ?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo base_url($this->session->userdata('ses_lokasi_gambar')) ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form method="" action="#" class="lockscreen-credentials">
    <input type="hidden" class="form-control" name="username" id="username" value="<?php echo $this->session->userdata('ses_username') ?>">
      <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button type="submit" id="login-button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="javascript:;" onclick="Logoutjs();">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2019-<?php echo date('Y') ?> <b><a href="#" class="text-black">IT</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
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

    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo $templates ?>plugins/datatables/jquery.dataTables.js"></script> -->
    <script src="<?php echo $templates ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo $templates ?>dist/js/pages/dashboard2.js"></script>
    <script src="<?php echo $templates ?>js-me/time.js?v0.0.2"></script>
    <script src="<?php echo $templates ?>js-me/table-me.js?v0.0.2"></script>


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
                            },
                            cache: false,
                            success:
                                    function (data, text) {

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


                $.sessionTimeout({
                    title:'Your session is About to Expire!',
                    message: '<?php echo $this->session->userdata('ses_username'); ?> your session is about to expire.',
                    logoutButton:'Logout',
                    keepAliveButton:'Stay Connected',


                    keepAliveUrl: '<?php echo site_url('Dashboard') ?>',
                    logoutUrl: '<?php echo site_url('Login/logout') ?>',
                    redirUrl: '<?php echo site_url('Login/logout') ?>',
                    //warnAfter: 3000, //3 detik, 60000 = 1 menit
                    warnAfter:  187000, // 5 menit
                    redirAfter: 300000, // 3 menit
                    countdownBar: true
                });


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
                    var resultlogout = postaction('<?php echo site_url('Login/logout') ?>', '');
                    $.session.clear();
                    window.location.reload('<?php echo site_url('Login/login') ?>');
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

</body>
</html>