
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i><?php echo $title; ?>
               <!--<div style="float:right"><button class="btn btn-secondary btn-sm" onclick="backtodatahome()">&nbsp;Back</button></div>-->
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata()"><i class="fa fa-plus"></i> </button>
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th class="text-center" width="120px">Kode Desa</th>  
                            <th class="text-center" >Nama Desa</th>  
                            <th class="text-center" >Kodepos</th>  
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

    function backtodatahome(){
        ToContent('<?php echo $url_back; ?>');
    }


    $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            dom: "Blfrtip",
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],
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
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [                
                {
                    "data": "id", "width": "10px", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        var idtr = row["<?php echo $prefix_id; ?>"];

                            btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                            btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";

                        return btn;
                    }
                },
                {"data": "kode_desa"},
                {"data": "nama_desa"},
                {"data": "kodepos"},
            ]

        });

    });
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
    function process_delete() {
        $.ajax({
            url: url_delete,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondatadetail: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid)

            }
        });
        return false;
    }


</script>
