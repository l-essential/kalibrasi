
<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <?php echo $checkboxmenu; ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    getgroupmenulist();
    statusbuttunaccess();

    function statusbuttunaccess() {
        var result = postaction('<?php echo $url_getstatusbuttunaccess; ?>', {
            'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
        });

        if (result.valid == true) {
            $.each(result.allbuttonaccess, function (index, row) {
                if (row.data != null){
                        var id_mmenu = row.id_mmenu;
                        $.each(row.data, function (indexbutton, rowbutton) {
                            if (rowbutton.statusdata == 'active') {
                                $("#checkbox_id_mbutton_" + id_mmenu + "_" + rowbutton.id_mbutton).prop("checked", true);
                            } else {
                                $("#checkbox_id_mbutton_" + id_mmenu + "_" + rowbutton.id_mbutton).prop("checked", false);
                            }

                        });

                    }
                });
            }
        }


    function getgroupmenulist() {
        var resultlist = postaction('<?php echo $url_getgroupmenulist; ?>', {
            'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
        });

        if (resultlist.valid == true) {
            $.each(resultlist.allgroupmenu, function (index, row) {
                var id = row.id_mmenu;
                if (row.statusdata == 'active') {
                    $("#checkbox_idmmenu_" + id).prop("checked", true);

                    var resultbutton = postaction('<?php echo $url_getbutton; ?>', {
                        'id_mmenu': id,
                        'id_maplikasi': '<?php echo $id_maplikasi; ?>',
                        'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
                    });
                    $("#div_idmmenu_" + id).html("");
                    if (resultbutton.valid == true) {
                        $("#div_idmmenu_" + id).html(resultbutton.allbutton);
                    }

                } else {
                    $("#checkbox_idmmenu_" + id).prop("checked", false);
                }

            });

        }

    }

    function handlechekboxClick(cb) {
        var checkboxdata_id = cb.id;
        var actiondata = (cb.checked == true) ? 'create' : 'delete';
        var tmpid = checkboxdata_id.split("_");
        var id = tmpid[2];

    }
    function handlechekboxbuttonallClick(cb) {
        var checkboxdata_id = cb.id;
        var actiondata = (cb.checked == true) ? 'create' : 'delete';
        var statuschecked = (cb.checked == true) ? true : false;
        var tmpid = checkboxdata_id.split("_");
        var id_mmenu = tmpid[3];

        var resultbuttonlist = postaction('<?php echo $url_getbuttonlist; ?>',{
            'id_mmenu':id_mmenu,
            'actiondata':actiondata,
        });
        
        if (resultbuttonlist.valid == true) {
            $.each(resultbuttonlist.databutton, function (index, row) {
                var id_mbutton = row.id_mbutton;
                $("#checkbox_id_mbutton_" + id_mmenu + "_" + id_mbutton).prop("checked", statuschecked);

                var resultprocess = postaction('<?php echo $url_postgroupmenubutton; ?>', {
                    'id_mbutton': id_mbutton,
                    'actiondata': actiondata,
                    'id_maplikasi': '<?php echo $id_maplikasi; ?>',
                    'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
                    'id_mmenu': id_mmenu,
                });
                _alert(resultprocess.message, resultprocess.valid);

            });
            statusbuttunaccess();
        }
    }

    function handlechekboxbuttonClick(cb) {
        var checkboxdata_id = cb.id;
        var actiondata = (cb.checked == true) ? 'create' : 'delete';
        var statuschecked = (cb.checked == true) ? true : false;
        var tmpid = checkboxdata_id.split("_");
        var id_mmenu = tmpid[3];
        var id_mbutton = tmpid[4];

        var resultprocess = postaction('<?php echo $url_postgroupmenubutton; ?>', {
            'id_mbutton': id_mbutton,
            'actiondata': actiondata,
            'id_maplikasi': '<?php echo $id_maplikasi; ?>',
            'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
            'id_mmenu': id_mmenu,
        });
        _alert(resultprocess.message, resultprocess.valid);
        statusbuttunaccess();

    }
</script>   


