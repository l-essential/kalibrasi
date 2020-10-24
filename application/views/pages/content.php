<?php $templates = base_url() . 'allassets/'; ?>

<style>
.example {
  overflow-y: scroll; /* Add the ability to scroll */
}

/* Hide scrollbar for Chrome, Safari and Opera */
.example::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.example {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: url('allassets/background/<?php echo $background->background; ?>') !important;background-size:cover;background-position:center;background-repeat:no-repeat">
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-white digital"> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <span class="info-box-icon" style="background-color:#ffffff00">
      <a href="javascript:;" onclick="ToController('setup/Recyclebin', '')" title='Recycle bin'>
        <i class="far fa-trash-alt" style="color:#fff;font-size:27px"></i>
      </a>
      </span>

          <div class="col-md-3 float-right">
            <div class="card" style="background-color: #ffffff99;">
              
            <div class="card-body" style="padding:0rem;padding-top:0px;border-left: 0px solid #dcdcdc;">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages example" style="height:97px;">
              <h3 class="card-title">
                <i class="digital"><?php echo $this->session->userdata('ses_namaKaryawan'); ?></i>
              </h3><br>
              <i class="digital">username&emsp;: <?php echo $this->session->userdata('ses_username'); ?></i><br>
              <i class="digital">ID&emsp;&emsp;&emsp;&emsp;: <?php echo $this->session->userdata('ses_register_code'); ?></i><br>
              
            </div>
            </div>
          </div>
         

            <div class="card" style="background-color: #ffffff99;">
              <!-- <div class="card-header border-transparent">
                <h3 class="card-title">User online</h3>
                <a href="http://192.168.0.241:8080/penyimpangan/chatme/" class="float-right" target="_blank">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge"><?php echo $message ?></span>
                </a>
              </div> -->
            <div class="card-body" style="padding:0rem;padding-top:0px;border-left: 0px solid #dcdcdc;">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages example" style="height: 150px;">
              <!-- Message. Default to the left -->
                <?php
                      if ($useronline) {
                        foreach ($useronline as $rowonline) {
                          ?>
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <!-- /.direct-chat-infos -->
                            <a href='javascript:void(0)' onClick='message(<?php echo $rowonline['id_user']; ?>,"<?php echo $rowonline['username']; ?>")'>
                            <img class="direct-chat-img" src="<?php echo $rowonline['lokasi_gambar']; ?>" alt="message user image">
                            &emsp; <span class="digital" style="font-size: 17px;"><?php echo $rowonline['username']; ?></span> 
                                    <span class="badge badge-info" style="font-size:35%;color:#20c997">0</span>
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-infos clearfix" style="border-bottom:0.1px solid #bbb">
                              <span class="direct-chat-timestamp float-right digital"><?php echo $rowonline['date_in']; ?></span>
                            </div>
                            </a>
                          </div>
                          <!-- /.direct-chat-msg -->
                          <?php
                        }
                    }
                ?>
            </div>
            </div>
            </div>
          </div>
            <!--/.direct-chat-messages-->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $('#contenttab a').on('shown.bs.tab', function (e) {
        e.preventDefault()
        var me = $(this);
        var tabdata = me[0];
        var tab_id = tabdata.getAttribute("href");
        var url_tab = '';

        if (tab_id == "#home") {
            url_tab = '<?php echo $url_home_userlog ?>';

        } else if (tab_id == "#penyimpangan") {
            url_tab = '<?php echo $url_formimage ?>';

        } else if (tab_id == "#kalibrasi") {
            url_tab = '<?php echo $url_button. '/' . $id; ?>';

        }
        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
        $(tab_id).load(url_tab);


    });

    $("#contenttabs").tabs().tabs('select', 0);
    $("#activity").load('<?php echo $url_home_userlog ?>');
  </script>



   <script type="text/javascript">

            /*mulai setting url default */
            var ROOT = {
                'site_url': '<?php echo site_url(); ?>',
                'base_url': '<?php echo base_url(); ?>',

            };
            /* selesai setting url default */

             function loadcontents(url, id_mmenu = '') {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: '',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $('#contentdatas').html("<div class='text-center' align='center' style='padding-top:; padding-left:500px;'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
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
                        $('#contentdatas').load(urldata, function () {});

                    },
                    error: function (xhr, status, error) {
                        console.log(url);
                        showdialogerror(xhr.responseText);
                    }
                });
                return false;
            }

              function ToCharts(controller, title) {
                var url = ROOT.site_url + '/' + controller;
                ROOT.controller = controller;
                loadcontents(url);
                return false;

            }

            function ToContents(url) {
                loadcontents(url);
                return false;
            }

        function message(id, user) {
            $('#DialogConfirm').modal('show');
            $("#DialogConfirm  input[name=id]").val(id);
            $("#DialogConfirm  input[name=user]").val(user);
        }
          

        </script> 


<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">Message to @<input name="user" id="user" style="background: #20c997;border: 0px;color: #fff;"></font></h4>
            </div>
            <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages example">
                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Alexander Pierce</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo $templates; ?>dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Sarah Bullock</span>
                          <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo $templates; ?>dist/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          You better believe it!
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Alexander Pierce</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo $templates; ?>dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Sarah Bullock</span>
                          <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo $templates; ?>dist/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          I would love to.
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->
                    <!-- /.direct-chat-pane -->
                  </div>
            <div class="modal-body">
                <input type ="hidden" name="id" id="id"/>
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-warning">Send</button>
                  </span>
                </div>
            </div>
               
            <!-- <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insert_message()" class="btn btn-sm bg-like" action="create">Send message</button>
            </div> -->
        </div>
    </div>
  </div>
  
