<br/>
<br/>
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <p class='fa fa-home'></p> <?php echo $title; ?>
            <div style="float:right"><button id="btnexitgroupdetail" class="btn btn-sm btn-danger" onclick="exitgroupdetail()"><span class="glyphicon glyphicon-log-out"> back</span></button></div>

        </div>
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills" id="groupdetail-tab">
                <li class=""><a href="#groupuser-pills" data-toggle="tab" aria-expanded="true">User Group</a></li>
                <li class=""><a href="#groupmenu-pills" data-toggle="tab" aria-expanded="false">User Menu</a></li>               
                <li class=""><a href="#groupmenubutton-pills" data-toggle="tab" aria-expanded="false">User Menu Button</a></li>               
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in" id="groupuser-pills"></div>
                <div class="tab-pane fade" id="groupmenu-pills"></div>
                <div class="tab-pane fade" id="groupmenubutton-pills"></div>
            </div>
        </div>
        <div class="panel-footer">
            &nbsp;
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#groupdetail-tab a').on('shown.bs.tab', function (e) {
        e.preventDefault()
        var me = $(this);
        var tabdata = me[0];
        var tab_id = tabdata.getAttribute("href");
        $("#groupuser-pills,#groupmenu-pills").html("");
        if (tab_id == "#groupuser-pills") {
            $("#groupuser-pills").load('<?php echo $url_usergroup . '/' . $rowgroup['id_maplikasigroup']; ?>');
        } else if (tab_id == "#groupmenu-pills") {
            $("#groupmenu-pills").load('<?php echo $url_usermenu . '/' . $rowgroup['id_maplikasigroup']; ?>');
        } else if (tab_id == "#groupmenubutton-pills") {
            $("#groupmenubutton-pills").load('<?php echo $url_usermenubutton . '/' . $rowgroup['id_maplikasigroup']; ?>');
        }
    });

    $('#groupdetail-tab a[href="#groupuser-pills"]').tab('show');

    function exitgroupdetail() {
        $("#group-pills").load('<?php echo $url_group . '/' . $rowgroup['id_maplikasi']; ?>');
    }

</script>
