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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-sm bg-gradient-secondary" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="ToController('scr/Application');">
                      <i class="fas fa-chevron-circle-left"></i> Back Datatable</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="kode_aplikasi" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="nama_aplikasi" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <div class="main-content container-fluid">
            </div>           
            <div class="form-group row">
               
                <div class="col-sm-3">
                     <label for="kode_aplikasi" class="control-label col-form-label">Kode aplikasi</label><span style="color:red">*</span>
                    <input name="kode_aplikasi" minlength="2" maxlength="20" id="kode_aplikasi" type="text" required="" parsley-type="text" placeholder="Masukan kode aplikasi" class="form-control"
                           value="<?php echo (isset($default['kode_aplikasi'])) ? $default['kode_aplikasi'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_aplikasi'])) ? $default['readonly_kode_aplikasi'] : ''; ?>
                           >
                </div> 
                <div class="col-sm-3">
                     <label for="nama_aplikasi" class="control-label col-form-label">Nama Aplikasi</label><span style="color:red">*</span>
                    <input name="nama_aplikasi" minlength="2" maxlength="80" id="nama_aplikasi" type="text" required="" parsley-type="text" placeholder="Masukan aplikasi" class="form-control"
                           value="<?php echo (isset($default['nama_aplikasi'])) ? $default['nama_aplikasi'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_aplikasi'])) ? $default['readonly_nama_aplikasi'] : ''; ?>
                           >
                </div>

                 <div class="col-sm-3">
                     <label for="icon" class="control-label col-form-label">Icon</label><span style="color:red">*</span>
                    <input name="icon" minlength="2" maxlength="80" id="icon" type="text" required="" parsley-type="text" placeholder="Masukan aplikasi" class="form-control"
                           value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                           <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                           >
                </div> 

             <!-- <div class="col-sm-3" style="top: 43px;">
                <button type="submit" id="btnsubmitform" class="btn btn-success btn-sm"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary btn-sm"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div> -->

            </div>   
           
          
            <div class="form-group">
                <div id="tabdetail">                    
                    <ul class="nav nav-tabs" id="contenttab">
                        <li class=" nav-item"> <a href="#tab_group" class="nav-link active" data-toggle="tab" aria-expanded="true"><span class='fas fa-home'></span>&nbsp;Group</a> </li>
                        <li class="nav-item"> <a href="#tab_menu" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Menu</a> </li>
                        <li class="nav-item"> <a href="#tab_button" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Button</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab_group" class="tab-pane active"> </div>
                        <div id="tab_menu" class="tab-pane"> </div>
                        <div id="tab_button" class="tab-pane"></div>
                    </div>
                </div>                
                              
            </div>
           
            

      
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

  <script type="text/javascript">
    $('#contenttab a').on('shown.bs.tab', function (e) {
        e.preventDefault()
        var me = $(this);
        var tabdata = me[0];
        var tab_id = tabdata.getAttribute("href");
        var url_tab = '';

        if (tab_id == "#tab_group") {
            url_tab = '<?php echo $url_group. '/' . $id; ?>';

        } else if (tab_id == "#tab_menu") {
            url_tab = '<?php echo $url_menu. '/' . $id; ?>';

        } else if (tab_id == "#tab_button") {
            url_tab = '<?php echo $url_button. '/' . $id; ?>';

        }
        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
        $(tab_id).load(url_tab);


    });

    $("#contenttabs").tabs().tabs('select', 0);
    $("#tab_group").load('<?php echo $url_group. '/' . $id; ?>');
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
     
        if(actiondata=='update'){
            $("#nama_aplikasi").prop("readonly",true);
            $("#kode_aplikasi").prop("readonly",true);
            $("#icon").prop("readonly",true);
            $("#tabdetail").show();            
        }else{
             $("#tabdetail").hide();
         }
        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                postdata(url_post, formdata, url_index);
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });
</script>
