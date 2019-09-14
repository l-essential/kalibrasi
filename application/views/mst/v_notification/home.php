
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
             <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Module</th>
                            <th class="text-center">Transaksi</th>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Pesan</th>
                            <th class="text-center">Waktu buat</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';

    accesscreate = checkaccess("create");
    accessedit = checkaccess("edit");
    accessdelete = checkaccess("delete");

    datacolumn = [
        {
            "data": "id", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                
                if(row.typedata !='information'){
                   btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='btn btn-info btn-sm' title='' data-toggle='tooltip' data-original-title='Process'>Process</a> &nbsp;";
                }else{
                   btn = btn + "<a href='javascript:void(0)' onClick='setclose(" + idtr + ")' class='btn btn-info btn-sm' title='' data-toggle='tooltip' data-original-title='Set Close Notification'>Close</a> &nbsp;";
                 }
                
                return btn;
            }
        },
        {"data": "status_notification", },
        {"data": "module", },
        {"data": "transaksi", },
        {"data": "title", },
        {"data": "message", },
        {"data": "createtime", },
    ];
    setdatagrid();
    
    function setclose(id){    
        var returnclose = postaction('<?php echo $url_post; ?>',{
            'actiondata':'close',
            'id_notification':id,
            'rejectnote':'',
        });
        _alert(returnclose.message,returnclose.valid);
        if(returnclose.valid==true){
             getnotification();
             ToContent('<?php echo $url_index; ?>');             
        }
    }
</script>