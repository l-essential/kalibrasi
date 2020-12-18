
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <p class='fa fa-home'></p> <?php echo $title; ?>
            <div style="float:right"><button id="btnexitdetail" class="btn btn-sm btn-danger" onclick="exitdetail()"><span class="glyphicon glyphicon-log-out"> back</span></button></div>

        </div>
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills" id="pills-tab">
                <li class=""><a href="#group-pills" data-toggle="tab" aria-expanded="true">Group</a></li>
                <li class=""><a href="#menu-pills" data-toggle="tab" aria-expanded="false">Menu</a></li>               
                <li class=""><a href="#button-pills" data-toggle="tab" aria-expanded="false">Button</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in" id="group-pills"></div>
                <div class="tab-pane fade" id="menu-pills"></div>
                <div class="tab-pane fade" id="button-pills"></div>
            </div>
        </div>
        <div class="panel-footer">
            &nbsp;
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#pills-tab a').on('shown.bs.tab', function (e) {
        e.preventDefault()
        var me = $(this);
        var tabdata = me[0];
        var tab_id = tabdata.getAttribute("href");
        $("#group-pills,#menu-pills,#button-pills").html("");

        if (tab_id == "#group-pills") {
            $("#group-pills").load('<?php echo $url_group . '/' . $rowaplikasi['id_maplikasi']; ?>');
        } else if (tab_id == "#menu-pills") {
            $("#menu-pills").load('<?php echo $url_menu . '/' . $rowaplikasi['id_maplikasi']; ?>');
        } else if (tab_id == "#button-pills") {
            $("#button-pills").load('<?php echo $url_button . '/' . $rowaplikasi['id_maplikasi']; ?>');
        }
    });

    $('#pills-tab a[href="#group-pills"]').tab('show');

    function exitdetail() {
        ToContent('<?php echo $url_index; ?>');
    }

</script>
