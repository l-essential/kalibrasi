
<!-- JQueryUI -->
<link href="<?php echo base_url(); ?>public/plugins/jquery-ui/development-bundle/demos/demos.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>public/plugins/jquery-ui/css/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>public/plugins/jquery-ui/js/jquery-1.8.3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-ui/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<!----End JQuery --->
<iframe  
    src="<?php echo $url; ?>" 
    frameborder="0" 
    width="100%" 
    height="300"     
    scrolling="yes">
</iframe>


<script>
    $(function () {
        $("#print-form").dialog({
            autoOpen: false, //width: 940,                                                                                            
            closeOnEscape: true,
            modal: true,
            resizable: true,
            draggable: true,
            width: 'auto',
            height: 160,
            position: "center",
            close: function () {
                $("#print-form").html("");
                $("#print-form").dialog('destroy');
            }

        });
        $("#print-form").dialog("open");
    });
</script>
