<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ciputra Assets Management System">
        <meta name="author" content="ahmad riadi">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/images/favicon.png">
        <title><?php echo judul_apps; ?></title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>public/plugins/jquery-ui/css/base/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/css/bootstrap-chosen.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/DataTables-1.10.18/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
        <!--This page css - Morris CSS -->
        <link href="<?php echo base_url(); ?>public/template/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>public/template/assets/css/style.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet" type="text/css"/>
        <!-- Datatable -->
        <link href="<?php echo base_url(); ?>public/template/assets/plugins/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/select.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/dataTables.checkboxes.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/template/assets/plugins/html5-editor/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
        <!-- You can change the theme colors from here -->
        <link href="<?php echo base_url(); ?>public/template/assets/css/colors/megna.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


        <style>
            marquee {
                width: 100%;
                background-color: #eef5f9;
            }
            .parsley-required{
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
            }
            .musthover :hover{
                background-color: #ffff99;
            }
            .ui-menu-item a.ui-state-focus {
                background: #ffff99;
            }

            table tr:hover {
                background-color: #ffff99;
            }
            table.dataTable td {
                padding-top: 8px;
            }

            .selectedtr{
                background-color: #ffff99;
            }
            .panel-success>.panel-heading {          
                width: 100%;
                font-size: 12px;
                background: #18aa8d;
                color: white;
                line-height: 150%;
                border-radius: 3px 3px 0 0;
                box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);
            }

            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
                z-index: 3;
                color: #fff;
                cursor: default;
                background-color: #18aa8d;
                border-color: #18aa8d;
            }

            .card-outline-success .card-header {
                background: #00897b;
                border-color: #25c1d5;
            }
            .btn-success.disabled:hover, .btn-success:hover {
                background: #158a64;
                -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                border: 1px solid #00897b;
            }
            .btn-success, .btn-success.disabled {
                background: #5fad85;
                border: 1px solid #b8dbc3;
                -webkit-box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                -webkit-transition: 0.2s ease-in;
                -o-transition: 0.2s ease-in;
                transition: 0.2s ease-in;
            }
            .color-table.muted-table thead th {
                background-color: #bbc2c5;
                color: #ffffff;
            }
            .dt-buttons .dt-button {
                padding: 5px 15px;
                border-radius: 4px;
                background: #0e9183;
                color: #ffffff;
                margin-right: 3px;
            }
            .btn-info.disabled:hover, .btn-info:hover {
                background: #00897b;
                border: 1px solid #1e88e5;
                -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
                box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
            }
            .btn-info, .btn-info.disabled {
                background: #00897b;
                border: 1px solid #f6fafd;
                -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                -webkit-transition: 0.2s ease-in;
                -o-transition: 0.2s ease-in;
                transition: 0.2s ease-in;
            }
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #00897b;
                border-color: #00897b;
            }
            .topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
                padding-left: .75rem;
                padding-right: .75rem;
                font-size: 9px;
                line-height: 50px;
            }
            .sidebar-nav ul li a {
                /* color: #607d8b; */
                padding: 8px 13px;
                display: block;
                font-size: 12px;
                white-space: nowrap;
            }
            body{
                font-size: 12px;
                color: #161617;
            }
            .page-titles .breadcrumb {
                padding: 0px;
                background: transparent;
                font-size: 12px;
            }
            h4 {
                line-height: 22px;
                font-size: 12px;
            }
            h3 {
                line-height: 30px;
                font-size: 12px;
            }
            .form-control {
                display: block;
                width: 100%;
                height: calc(1.5em + .75rem + 2px);
                padding: .375rem .75rem;
                font-size: 0.7rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            .btn {
                padding: 7px 12px;
                font-size: 12px;
                cursor: pointer;
            }
            .color-table.muted-table thead th {
                background-color: #00897b;
                color: #ffffff;
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
                background-color: #00897b;
            }
        </style>

        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery-migrate-3.0.1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/popper/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url(); ?>public/template/assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url(); ?>public/template/assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url(); ?>public/template/assets/js/sidebarmenu.js"></script>

        <!--stickey kit -->
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url(); ?>public/template/assets/js/custom.min.js"></script>        
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/toast-master/js/jquery.toast.js" type="text/javascript"></script>
        <!--Datatable-->
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/DataTables-1.10.18/js/dataTables.bootstrap4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/AutoFill-2.3.3/js/dataTables.autoFill.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/Buttons-1.5.6/js/dataTables.buttons.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/Buttons-1.5.6/js/buttons.html5.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/fnReloadAjax.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/fnStandingRedraw.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/dataTables.select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/plugins/datatable-1.10.18/dataTables.checkboxes.min.js" type="text/javascript"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url(); ?>public/template/assets/js/dashboard1.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap-session-timeout.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.session.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/parsley.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/chosen.jquery.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>public/template/assets/plugins/html5-editor/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/template/assets/plugins/html5-editor/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.hotkeys.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.mask.min.js" type="text/javascript"></script>




        <script type="text/javascript">
            var ROOT = {
                'site_url': '<?php echo site_url(); ?>',
                'base_url': '<?php echo base_url(); ?>',
                'controller': null,

            };
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


            function infoshorcuthome() {
                $("#infomarquee").html("Keyboard shortcuts : F2 = Create New, F5 = Refresh, Click the list and then double click = Edit Data, Click the list and then shift+d = Delete Data");
            }



            function infoshorcutform() {
                $("#infomarquee").html("Keyboard shortcuts : Shift + s = Save form data, F4 = Close form data");
            }





            function checkaccess(check) {
                var patt = new RegExp(check);
                var res = patt.test(listbutton);
                return res;
            }



            if ($.session.get("directurl") !== undefined) {
                loadcontent($.session.get("directurl"), $.session.get("data-id"));
            }

            //initialize the javascript         
            //$.fn.dataTable.ext.errMode = 'none';
            //$('#dataintable').on('error.dt', function (e, settings, techNote, message) {
            //     console.log('An error has been reported by DataTables: ', message);
            // });

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
					window.location.reload();
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
                        $('#contentdata').html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
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
                        $(contentdata).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
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
                //create by ahmad riadi
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
                var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                var livedate = "&nbsp;" + dayarray[day] + ", " + montharray[bln] + " " + tgl + ", " + thn + "&nbsp;";
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
                    var position = 'top-center';
                } else {
                    var coloralert = '#ff6849';
                    var iconalert = 'error';
                    var textalert = 'Error';
                    var position = 'top-center';
                }

                if (valid == 'warning') {
                    var iconalert = 'warning';
                    var textalert = 'Warning';
                    var position = 'top-center';
                }

                $.toast({
                    heading: textalert + ' Information',
                    text: msg,
                    position: position,
                    loaderBg: coloralert,
                    icon: iconalert,
                    hideAfter: 3000,
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
                        dom: 'lfrtip',
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
                        /*
                        buttons: [
                            {
                                extend: "copy",
                                key: '2',
                                className: "btn-sm glyphicon glyphicon-copy"
                            },
                            {
                                extend: "csv",
                                key: '3',
                                className: "btn-sm glyphicon glyphicon-file "
                            },

                        ],
                        */
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


    </head>

    <body class="fix-header fix-sidebar card-no-border logo-center">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="javascript:void(0)" onclick="toIndex()">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!--<img src="<?php echo base_url(); ?>public/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                                <!-- Light Logo icon -->
                                <!-- <img src="<?php echo base_url(); ?>public/images/logo-icon.png" alt="homepage" class="light-logo" /> -->                         
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text --><span>
                                <!-- dark Logo text -->
                                <!--<img src="<?php echo base_url(); ?>public/images/logo.png" alt="homepage" class="dark-logo" /> -->
                                <!-- Light Logo text -->    
                                <!--<img src="<?php echo base_url(); ?>public/images/logo.png" class="light-logo" alt="homepage" />--> </span> </a>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>

                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-clock"><span id="LiveDate"></span><span id="LiveTime"></span></i></a>    
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"> 
                                        <!--buka jika ada pesan -->
                                        <div id="alertnotification" style="display:none;"><span class="heartbit"></span> <span class="point" id="count">0</span></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                    <ul>
                                        <li>
                                            <div class="drop-title">Notifications</div>
                                        </li>
                                        <li>
                                            <div id="contentnofif"></div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);" data-appsid="0" data-name="Notification" data-id="0" data-url="mst/Notification" onclick="ToUrl(this)"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>                         
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>public/images/no_foto.jpg" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="<?php echo base_url(); ?>public/images/no_foto.jpg" alt="user"></div>
                                                <div class="u-text">
                                                    <h4><?php echo $this->session->userdata('ses_fullname'); ?></h4>
                                                    <p class="text-muted"><?php echo $this->session->userdata('ses_email'); ?></p>
                                                </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <!--<li><a href="#"><i class="ti-user"></i> My Profile</a></li> -->                                  
                                        <li><a href="javascript:void(0)" onclick="changepassword()"><i class="fa fa-key"></i>&nbsp;Change Password</a></li>
                                        <li><a href="javascript:void(0)" onclick="Logoutjs()"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <?php echo $buildaccess; ?>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)" onclick="toIndex()">Home</a></li>
                                <li class="breadcrumb-item active" id="breadcrumb_link"><span id="breadcrumb_name"></span></li>
                            </ol>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <marquee direction='scroll'><span id="infomarquee"></span></marquee>
                            <div id="contentdata">                                
                                <div class="text-center" id="firstpage">                         
                                    <h3><strong>Welcome <?php echo $this->session->userdata('ses_fullname'); ?></strong></h3>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer" id="footerdata">
                    © <?php echo tahundibuat; ?>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

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

    </body>
</html>
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

