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

  <title>L'Essential | <?php echo $title; ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo $templates ?>dist/datepicker/css/datepicker.css">
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>public/plugins/jquery-ui/css/base/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>public/css/bootstrap-chosen.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>public/template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/template/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet" type="text/css"/>
   
   <!-- custome -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link href="<?php echo $customes ?>DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
  <link href="<?php echo $customes ?>jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
  <link href="<?php echo $customes ?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <link href="<?php echo $customes ?>vendor/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $customes ?>vendor/bootstrap-select-1.13.2/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">
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
            .potong {
                white-space: nowrap;
                max-width: 149px;
                background: white;
                overflow: hidden;
                text-overflow: ellipsis ;
            }
            .border-transparent {
                border-color: #dee2e6!important;
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
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <?php $this->load->view('pages/top_menu'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-teal">
    <?php $this->load->view('v_dashboard/sidebar_admin'); ?>
    
    <!-- /.sidebar -->
  </aside>



<div id="contentdata">
  <?php $this->load->view('pages/content'); ?>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo $templates ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $templates ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $templates ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo $templates ?>dist/js/adminlte.js"></script>
<script src="<?php echo $templates ?>dist/js/demo.js"></script>

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

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

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

<!-- Datateble JavaScript -->
<script src="<?php echo $customes ?>DataTables-1.10.11/media/js/jquery.dataTables.js"></script>
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




<!-- Bootstrap -->
<!-- <script src="<?php echo $templates ?>dist/js/datetime.js"></script> -->

<!-- overlayScrollbars -->
<!-- <script src="<?php echo $templates ?>plugins/datatables/jquery.dataTables.js"></script> -->
<script src="<?php echo $templates ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $templates ?>dist/js/pages/dashboard2.js"></script>
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



            //refresh data
            $(document).bind('keydown', 'f5', function () {
                refreshtemplate();
            });

            //add data
            $(document).bind('keydown', 'f2', function () {
                adddata();
            });

            //close form data
            $(document).bind('keydown', 'f4', function () {
                closedata();
            });

            //menyimpan formdata
            $(document).bind('keydown', 'shift+s', function () {
                submitform();
            });

           

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
                keepAliveUrl: '<?php echo site_url('Dashboard') ?>',
                logoutUrl: '<?php echo site_url('Login/logout') ?>',
                redirUrl: '<?php echo site_url('Login/logout') ?>',
                //warnAfter: 3000, //3 detik, 60000 = 1 menit
                warnAfter: 900000, // 15 menit
                redirAfter: 910000, //10 detik
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

            //cek nomor
            function validasiangka(o, w) {
                var r = {'numbers': /[^\d\.]/g}
                o.value = o.value.replace(r[w], '');
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
                    // Put the content in the iframe
                    iframedoc.open();
                    iframedoc.writeln(html_string);
                    iframedoc.close();
                } else {
                    //just in case of browsers that don't support the above 3 properties.
                    //fortunately we don't come across such case so far.
                    alert('Cannot inject dynamic contents into iframe.');
                }

            }

              function LiveDate() {
                var D = new Date();
                var day = D.getDay();
                var tgl = D.getDate();
                var bln = D.getMonth();
                var thn = D.getFullYear();
                var jam = D.getHours();
                var mnt = D.getMinutes();
                var dtk = D.getSeconds();
                var suf;
                if (jam < 10) {
                    jam = "0" + jam;
                }
                if (mnt < 10) {
                    mnt = "0" + mnt;
                }
                if (dtk < 10) {
                    dtk = "0" + dtk;
                }
                if (tgl == "1" || tgl == "21" || tgl == "31") {
                    suf = "st";
                } else if (tgl == "2" || tgl == "22") {
                    suf = "nd";
                } else if (tgl == "3" || tgl == "23") {
                    suf = "rd";
                } else {
                    suf = "th";
                }

                var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                var montharray = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

                var livedate = "&nbsp;" + dayarray[day] + ", " +tgl + "-" +  montharray[bln] + "-" + thn + "&nbsp;";
                var livetime = "&nbsp;" + jam + ":" + mnt + ":" + dtk + "&nbsp;";
                $("#LiveDate").html(livedate);
                $("#LiveTime").html(livetime);
                setTimeout("LiveDate()", 1000);
            }

            LiveDate();

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


            function setdatagrid(idtable) {
                $(document).ready(function () {
                    $('#dataintable').DataTable({
                        responsive: true,
                        "ajax": {
                            "url": url_grid,
                            "type": 'POST',
                        },
                      
                         'order': [[1, 'asc']],
                                keys: true,
                                fixedHeader: true,
                                deferRender: true,
                                scrollY: true,
                                scrollX: true,
                                scrollCollapse: true,
                                scroller: false,
                                
                                "bRetrieve": true,
                                "bDestroy": true,
                                lengthMenu: [
                                    [5, 10, 25, 50, 100],
                                    [5, 10, 25, 50, 100]
                                ],
                       
                        "columns": datacolumn,
                        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                            $(nRow).attr("id", aData[prefix_id]);
                            return nRow;
                        },
                        "initComplete": function (settings, json) {
                            $('#dataintable tbody tr').click(function (e) {
                                var clickedtd = $(e.target).closest('td');
                                $(this).closest('table').find('td').not(this).removeClass('selectedtr');
                                clickedtd.addClass('selectedtr');

                                accessdelete = checkaccess("delete");
                                if (accessdelete == true) {
                                    //delete data
                                    $(document).bind('keydown', 'shift+d', function () {
                                        deletedata($(this)[0].id);
                                    });
                                }


                            });
                            $('#dataintable tbody tr').dblclick(function (e) {

                                accessedit = checkaccess("edit");
                                if (accessedit == true) {
                                    editdata($(this)[0].id);
                                }


                            });
                        },

                    });
                });
            }
            function setdatagridserverside(idtable) {
                $(document).ready(function () {
                    $('#dataintable').DataTable({
                        dom: 'Blrtip',
                        'order': [[0, 'desc']],
                        scrollY: 380,
                        scrollX: true,
                        scrollCollapse: true,
                        scroller: false,
                        "bRetrieve": true,
                        "bDestroy": true,
                        lengthMenu: [
                            [10, 25, 50, 100, 200, 500, 1000],
                            [10, 25, 50, 100, 200, 500, 1000]
                        ],
                        responsive: true,
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": url_grid,
                            "type": 'POST',
                        },
                        "columns": datacolumn,
                        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                            $(nRow).attr("id", aData[prefix_id]);
                            return nRow;
                        },
                        "initComplete": function (settings, json) {
                            $('#dataintable tbody tr').click(function (e) {
                                var clickedtd = $(e.target).closest('td');
                                $(this).closest('table').find('td').not(this).removeClass('selectedtr');
                                clickedtd.addClass('selectedtr');

                                accessdelete = checkaccess("delete");
                                if (accessdelete == true) {
                                    //delete data
                                    $(document).bind('keydown', 'shift+d', function () {
                                        deletedata($(this)[0].id);
                                    });
                                }


                            });
                            $('#dataintable tbody tr').dblclick(function (e) {

                                accessedit = checkaccess("edit");
                                if (accessedit == true) {
                                    editdata($(this)[0].id);
                                }


                            });
                        },

                    });
                });
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
            
            function changepassword(){
                 ToContent('<?php echo site_url('Login/changepassword') ?>');
            }
            
            function formatnumber(nStr,desimalpoint)
            {
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
            
            function toformatdate(strdate,format){
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
                    <img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="200" height="200"/>
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
