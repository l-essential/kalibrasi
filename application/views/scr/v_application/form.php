<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
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
                <label for="kode_aplikasi" class="col-sm-2 text-right control-label col-form-label">Kode aplikasi</label><span style="color:red">*</span>
                <div class="col-sm-1">
                    <input name="kode_aplikasi" minlength="2" maxlength="20" id="kode_aplikasi" type="text" required="" parsley-type="text" placeholder="Masukan kode aplikasi" class="form-control"
                           value="<?php echo (isset($default['kode_aplikasi'])) ? $default['kode_aplikasi'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_aplikasi'])) ? $default['readonly_kode_aplikasi'] : ''; ?>
                           >
                </div> 
                <label for="nama_aplikasi" class="col-sm-2 text-right control-label col-form-label">Nama Aplikasi</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="nama_aplikasi" minlength="2" maxlength="80" id="nama_aplikasi" type="text" required="" parsley-type="text" placeholder="Masukan aplikasi" class="form-control"
                           value="<?php echo (isset($default['nama_aplikasi'])) ? $default['nama_aplikasi'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_aplikasi'])) ? $default['readonly_nama_aplikasi'] : ''; ?>
                           >
                </div> 
             <div class="col-sm-3">   
                <button type="submit" id="btnsubmitform" class="btn btn-success btn-sm"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary btn-sm"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
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
                    
                </div>                
                              
            </div>
           
            

      
    </div>
</form>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
     
        if(actiondata=='update'){
            $("#kode_aplikasi").prop("readonly",true);
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
