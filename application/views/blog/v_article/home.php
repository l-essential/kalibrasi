    <style type="text/css">
    
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
    </style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
         <div class="col-md-3">
            <!-- <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a> -->

            <div class="card card-like card-outline">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                   <li class="nav-item">
                    <a href="#" class="nav-link" onclick="ToControllerin('blog/List_article', '')">
                      <i class="fas fa-clipboard-list"></i> List article
                      <span class="badge bg-secondary float-right" id="notiflist"><?php echo $notiflist ?></span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="#" class="nav-link" onclick="ToControllerin('blog/article/home_public', '')">
                      <i class="far fa-thumbs-up"></i> Publish
                      <span class="badge bg-like float-right" id="notifpublic"><?php echo $notifpublic ?></span>
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a href="#" class="nav-link" onclick="ToControllerin('blog/Draft', '')">
                      <i class="fas fa-inbox"></i> Drafts
                      <span class="badge bg-primary float-right" id="notifdraft"><?php echo $notifdraft ?></span>
                    </a>
                  </li>
                   <li class="nav-item active">
                    <a href="#" class="nav-link" onclick="ToControllerin('blog/Revisi', '')">
                      <i class="fas fa-file-contract"></i> Revisi
                      <span class="badge bg-warning float-right" id="notifrevisi"><?php echo $notifrevisi ?></span>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="#" class="nav-link" onclick="ToControllerin('blog/article/home_tolak', '')">
                      <i class="fas fa-times-circle"></i> Tolak
                      <span class="badge bg-danger float-right"><?php echo $notifreject ?></span>
                    </a>
                  </li> -->
                 
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        <div class="col-9" id="incontentdata">
            <p align="center" style="padding-top: 35px;">
              <img src="<?php echo base_url(); ?>public/images/scr/useraccess/AdminLTELogo1.png"/>
            </p>
        </div>
    </div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
    
    function ToControllerin(controller, title) {
        var content = $('#incontentdata');
        var url = ROOT.site_url + '/' + controller;
        ROOT.controller = controller;

       // showloading();
        content.load(url, function () {
            $("#title").html(title);
            hideloading();


        });

        return false;

    }

    function ToContent(url) {
        var content = $('#incontentdata');
       // showloading();
        content.load(url, function () {
            hideloading();
        });
        return false;
    }

    function postdata(url_post, formdata, url_index) {
       // showloading();
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
                        alert(request.responseText + " " + status + " " + error);
                    }
                });
        return false;
    }

    // function showloading() {
    //     $(document).ready(function () {
    //         $('#Modalloading').modal('show');
    //     });
    // }
    // function hideloading() {
    //     $(document).ready(function () {
    //         $('#Modalloading').on('shown.bs.modal', function (e) {
    //             $('#Modalloading').modal('hide');

    //         });
    //     });
    // }

    function notif(valid, msg) {
        if (valid == true) {
            var type = 'color success';
        } else {
            var type = 'color youtube';
        }
        $.gritter.add({
            title: "Proces success",
            text: msg,
            class_name: 'color success',
            time: 1000,
        });
    }

    $(function () {
        $(document).tooltip();
    });



    function _alert(msg, valid)
    {
        if (valid == true) {
            var type = 'success';
        } else {
            var type = 'error';
        }

        noty({
            text: msg,
            type: type,
            dismissQueue: true,
            //layout      : 'topCenter',
            //layout: 'center',
            layout: 'topCenter',
            timeout: 3000,
        });

    }

    function getcountdata() {
        var id_article = $("#id_article").val();
        var resultarticle = postaction('<?php echo site_url('blog/article/countbyarticle'); ?>', {
            'id_article': $("#id_article").val(),
        });
        if (resultarticle.valid == true) {
            $("#notiflist").html(resultarticle.notiflist);
            $("#notifdraft").html(resultarticle.notifdraft);
            $("#notifrevisi").html(resultarticle.notifrevisi);
            $("#notifpublic").html(resultarticle.notifpublic);
        }

    }

    $("#id_article").change(function () {
        getcountdata();
    });

    function setRefreshcounter() {
        setTimeout(setRefreshcounter, '3000');//refresh countter setiap 3 detik
        getcountdata();
    }
    $(function () {
        setRefreshcounter();
    });

</script>

<div class="modal fade " id="Modalloading" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered">                  
        <div class="modal-body" align="center">
            <img class=""  src="<?php echo base_url(); ?>public/images/loading2.gif"/>
        </div>                  
    </div>
</div>


















<!-- <script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();

        $("#article").summernote({
      height: 300
    });
        actiondata = (id == 0) ? 'create' : 'update';

         

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            $("#actiondata").val(actiondata);

            $.ajax({
                url: url_post,
                type: "post",
                data: new FormData(this),
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:
                        function (data, text)
                        {

                            hideloading();
                            _alert(data.msg, data.valid);
                            if (data.valid == true) {
                                ToContent(url_index);
                            }
                        },
                error: function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
            });
            return false;


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });
</script> -->
<!-- <script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    $('#tanggal_tmt').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
           
        });
    $("#article").summernote({
      height: 300
    });
    actiondata = (id == 0) ? 'create' : 'update';
    
</script> -->



