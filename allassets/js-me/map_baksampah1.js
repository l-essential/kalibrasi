var this_module = {
    f_getLocation : function(opt){
    	$.ajax({
    		url: base_url+"/C_Map/filter",
    		method: "POST",
    		data: opt,
    		dataType: "json",
    		success: function(res){
    			this_module.f_renderMarker(res);
    		},
			error: function(){

				var title 		= "<span class='fa fa-exclamation-triangle text-warning'></span>&nbsp;Error.";
				var str_message = "Gagal ambil data.";

				bootbox.alert({
					size:'small',
					title:title,
					message:str_message,
					buttons:{
						ok:{
							label: 'OK',
							className: 'btn-error'
						}
					}
				});
				return false;
			}
    	});
    },
    f_renderMarker : function(dt){
    	for(var i in dt){
    		var c = dt[i];
    		c.marker_id = c.id_lokasi;
    		c.lat = parseFloat(c.lat);
    		c.lng = parseFloat(c.lng);
    		map_obj.f_addMarker(c);
    	}
    }
}


/*$(document).on('ready', function(){
    (function(){
        map_obj.init();

        $('.menu_filter').on('click', function(){
            $('.fa-check').remove();
            $(this).append('<i class="fa fa-check"></i>');
            var jenis = $(this).attr('value');
            map_obj.f_clearMarkers();
            this_module.f_getLocation({"jenis":jenis});
        });

        var selectedFilter = $('.menu_filter[selected="true"]').attr('value');

        setTimeout(function(){
        	this_module.f_getLocation({"jenis":selectedFilter});
        },1000);
        
        console.log("d",selectedFilter)
    })();
});*/