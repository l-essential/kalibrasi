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
    function getgroupmenulist() {
        var resultlist = postaction('<?php echo $url_getgroupmenulist; ?>', {
            'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
        });

        if (resultlist.valid == true) {
            $.each(resultlist.allgroupmenu, function (index, row) {
                var id = row.id_mmenu;
                if (row.statusdata == 'active') {
                    $("#checkbox_idmmenu_" + id).prop("checked", true);
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

        var resultprocess = postaction('<?php echo $url_postgroupmenu; ?>', {
            'id_mmenu': id,
            'actiondata': actiondata,
            'id_maplikasi': '<?php echo $id_maplikasi; ?>',
            'id_maplikasigroup': '<?php echo $id_maplikasigroup; ?>',
        });

        _alert(resultprocess.message, resultprocess.valid);
        getgroupmenulist();

    }
</script>   


