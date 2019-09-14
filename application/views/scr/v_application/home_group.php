<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata()"><i class="fa fa-plus"></i> </button>

                <thead>
                    <tr>
                        <th class="text-center" width="10px">Action</th>
                        <th class="text-center" width="80px">Ref ID</th>
                        <th class="text-center" width="100px">Spesial Group</th>
                        <th class="text-center" width="100px">Kode Group</th>
                        <th class="text-center">Nama Group</th>            
                    </tr>
                </thead>                 
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';


    datacolumn = [
        {
            "data": "id", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                btn = btn + "<a href='javascript:void(0)' onClick='adduser(\"" + row.nama_group + "\"," + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Management User'><i class='fas fa-users'></i></a> &nbsp;";
                btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";
                return btn;
            }
        },
        {"data": "id_maplikasigroup", },
        {"data": "spesialgroup", },
        {"data": "kode_group", },
        {"data": "nama_group", },
    ];
    setdatagrid();

    function adduser(label, id) {
        $("#idgroup").val(id);
        $('#DialogUserakses').modal('show');
        $("#label_groupuser").html(label);
    }

    function adddata() {
        $("#tab_group").load(url_add);
    }

    function editdata(id) {
        $("#tab_group").load(url_edit + '/' + id);
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
                actiondata: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }





</script>

<input type="hidden" id="idgroup" name="idgroup" />
<div id="DialogUserakses"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Manajemen User akses group <span id="label_groupuser"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="contenttabgroupuser">
                    <li class=" nav-item"> <a href="#tab_groupuser" class="nav-link active" data-toggle="tab" aria-expanded="true"><span class='fas fa-home'></span>&nbsp;Group User</a> </li>
                    <li class="nav-item"> <a href="#tab_menuuser" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Menu User</a> </li>
                    <li class="nav-item"> <a href="#tab_buttonuser" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Button User</a> </li>
                </ul>
                <div class="tab-content">
                    <div id="tab_groupuser" class="tab-pane active"> </div>
                    <div id="tab_menuuser" class="tab-pane"> </div>
                    <div id="tab_buttonuser" class="tab-pane"></div>
                </div>
                <script type="text/javascript">
                    $('#contenttabgroupuser a').on('shown.bs.tab', function (e) {
                        e.preventDefault()
                        var me = $(this);
                        var tabdata = me[0];
                        var tab_id = tabdata.getAttribute("href");
                        var url_tab = '';



                        if (tab_id == "#tab_groupuser") {
                            url_tab = '<?php echo $url_usergroup . '/'; ?>' + $("#idgroup").val();

                        } else if (tab_id == "#tab_menuuser") {
                            url_tab = '<?php echo $url_usermenu . '/'; ?>' + $("#idgroup").val();

                        } else if (tab_id == "#tab_buttonuser") {
                            url_tab = '<?php echo $url_usermenubutton . '/'; ?>' + $("#idgroup").val();

                        }
                        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
                        $(tab_id).load(url_tab);


                    });

                    $(document).ready(function () {
                        $("#DialogUserakses").on("show.bs.modal", function () {
                            $("#contenttabgroupuser").tabs().tabs('select', 0);
                            $("#tab_groupuser").load('<?php echo $url_usergroup . '/'; ?>' + $("#idgroup").val());
                        });
                    });

                </script>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>