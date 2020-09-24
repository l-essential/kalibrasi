
<style>
 
#show8{
	color:red;
    border:1px solid red;
    padding:10px;
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
        <div class="col-12">
          <div class="card">    
            <div class="card-header bg-like">
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
 <!-- value="Dev/O/QA/2020/02/62" -->
        <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="file" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />


            <div class="main-content container-fluid">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nomor Penyimpangan</label>
                    <div class="col-sm-3">
                    <input name="improvement_code" minlength="1" maxlength="30" id="improvement_code" type="text" required=""  parsley-type="text" placeholder="input kode penyimpangan" class="form-control"
                    value="<?php echo (isset($default['improvement_code'])) ? $default['improvement_code'] : ''; ?>"
                    <?php echo (isset($default['readonly_improvement_code'])) ? $default['readonly_improvement_code'] : ''; ?>
                        readonly="readonly">
                    </div>
            </div> 
             <div class="form-group row">
                <label for="kesimpulan_akhir" class="col-sm-3 col-form-label">Kesimpulan Akhir <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <textarea name="kesimpulan_akhir" class="form-control" rows="3" required="" <?php echo (isset($default['readonly_kesimpulan_akhir'])) ? $default['readonly_kesimpulan_akhir'] : ''; ?> ><?php echo (isset($default['kesimpulan_akhir'])) ? $default['kesimpulan_akhir'] : ''; ?></textarea>
                </div>                        
             </div>

             <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="">Status Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input type="radio" name="status_penyimpangan" value="1"> Open
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="status_penyimpangan" value="0" > Closed
                    </label>
                </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Department <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="tindaklajuti_oleh" name="tindaklajuti_oleh" class="form-control" required="">
                        <?php foreach ($default['department_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <input type="file" name="file"> Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
            </div>


               
            </div>
            <div class="col-sm-12">
                <p class="text-right">
                        <button type="reset" class="btn btn-sm btn-space btn-secondary"><i class='fa fa-times'>&nbsp;Cancel</i></button>
                        <button type="submit" id="btnsubmitform" class="btn btn-sm btn-space btn-like"><i class='fa fa-check'>&nbsp;Submit</i></button>
                    </p>
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
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
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
            // loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });
    });
 
         
</script>
