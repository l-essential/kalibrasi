var map_baksampah_obj = {
    f_getLocation : function(opt){
    	$.ajax({
    		url: base_url+"/C_Map/filter",
    		method: "POST",
    		data: opt,
    		dataType: "json",
    		success: function(res){
    			map_baksampah_obj.f_renderMarker(res);
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
        map_obj.f_renderCluster(map_obj.mapa, map_obj.marker_list);
    },
    f_refresh: function(){
        var a = $('.chk-jenis:checkbox:checked');
                var jenis = [];
                a.each(function(f,g){
                    jenis.push($(g).val());
                })

                map_obj.f_clearMarkers();
                if(jenis.length>0)
                        map_baksampah_obj.f_getLocation({"jenis":jenis});
    },
    init: function(){
        /*$(".chk-jenis").on('change', function(){
                var a = $('.chk-jenis:checkbox:checked');
                var jenis = [];
                a.each(function(f,g){
                    jenis.push($(g).val());
                })

                map_obj.f_clearMarkers();
                if(jenis.length>0)
                        map_baksampah_obj.f_getLocation({"jenis":jenis});
        });*/
        $('.chk-jenis').on('ifChanged', function(event){
              map_baksampah_obj.f_refresh();
        
        });

        var selectedFilter = $('.menu_filter[selected="true"]').attr('value');


        setTimeout(function(){
          map_baksampah_obj.f_refresh();
        },2000);
    }
}



    