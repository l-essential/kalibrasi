var map_obj = {
    marker_list: [],
    vhc_marker : [],
    map_list:[],
	mapa : undefined,
	init: function(){
		//google.maps.event.addDomListener(window, 'load', map_obj.init);

		var mapOptions1 = {
            zoom: 12,
            center: new google.maps.LatLng(-6.2825729,107.1270065),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var mapElement1 = document.getElementById('mapa');
        
        
        map_obj.mapa = new google.maps.Map(mapElement1, mapOptions1);
        
        map_obj.f_resize('#mapa', map_obj.mapa);
	},
    f_addMap: function(el, id){       
        var mapOptions1 = {
            zoom: 12,
            center: new google.maps.LatLng(-6.2825729,107.1270065),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var mapElement1 = document.getElementById(el);
        
        
        var newMap = new google.maps.Map(mapElement1, mapOptions1);
        newMap.map_id = id;
        map_obj.map_list.push(newMap);
        
        map_obj.f_resize('#'+el, newMap);
    },
    f_addMarker: function(opt){
        var image = {
          url: opt.map_icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };
        var marker = new google.maps.Marker({ 
            draggable: false,
            size:new google.maps.Size(10, 32),     
             origin: new google.maps.Point(0, 0),
             scaledSize: new google.maps.Size(25, 25),
            icon:  image,
            map: map_obj.mapa,
            position: {lat: opt.lat, lng: opt.lng}
        });

        marker.marker_id=opt.id;
        marker.src_data = opt;
        
        marker.infowindow = new google.maps.InfoWindow({
                content: "<img style='float:left;margin-right:4px' src='" + opt.map_icon + "' />" +  "<div style='float:left'><strong>" + opt.nama_lokasi +  " </strong></div><br/><div >" + opt.alamat + "</div>",
                maxWidth: 300
        });
        
        marker.addListener('click', function() {
            marker.infowindow.open(map_obj.mapa, marker);
        });

        map_obj.marker_list.push(marker);
    },
    f_addVhcMarker: function(opt){
        var marker = new google.maps.Marker({ 
            draggable: false,
            icon:  opt.icon,
            map: map_obj.mapa,
            //position: {lat: opt.lat, lng: opt.lng}
        });

        marker.marker_id=opt.id;
        marker.src_data = opt;
        
        marker.infowindow = new google.maps.InfoWindow({
                content: '<div class="marker-info"><div class="row"><div class="col-md-2"><img style="float:left;margin-right:10px" src="' + opt.icon + '" /></div>' +  
                        '<div class="col-md-10" style="float:left"><strong>' + opt.plateNumber +  ' </strong><br/>' + opt.vhcName + '</div>' +
                        '</div>' +  
                        '<div class="row" style="min-height:70px;margin-top:4px"><div class="col-md-12">Lokasi : <br/>Loading address...</div></div>' +
                        '<div><button class="btn btn-xs btn-primary pull-right" onclick="tracking_obj.f_addHistoryTab(' + "'" + marker.marker_id + "'"  + ')">View History</button></div>'
                        ,
                maxWidth: 300
        });
        
        //google.maps.event.addListener(marker.infowindow, 'domready', function(){
            //code to dynamically load new content to infowindow
            //for example:
            //    var existing_content = referenceToInfoWindow.getContent();
            //    var new_content = "...";
            
        //}); 

        marker.addListener('click', function() {
            marker.infowindow.open(map_obj.mapa, marker);
            map_obj.f_getLatLngAddress(this.position.lat(), this.position.lng(), function(res){
                if(res.status=="OK"){
                    marker.infowindow.setContent(marker.infowindow.content.replace('Loading address...', res.results[0].formatted_address));
                }
            })
            
        });

        map_obj.vhc_marker.push(marker);
    },
    f_removeMarker: function(marker_list, id){
        var markerIndex = _.findIndex(marker_list, {marker_id:id});

        if(markerIndex>=0){
            marker_list[markerIndex].setMap(null);
            marker_list.splice(markerIndex,1);
        }
    },
    f_clearMarkers: function(){
        for(var i in map_obj.marker_list){
            map_obj.marker_list[i].setMap(null);
        }

        //reinitiate markers
        map_obj.marker_list=[];
        //clear marker cluster
        if(this.markerCluster_Bak){
            this.markerCluster_Bak.clearMarkers();
        }
    },
    f_clearVhcMarkers :function(){
      for(var i in map_obj.vhc_marker){
            map_obj.vhc_marker[i].setMap(null);
        }

        //reinitiate markers
        map_obj.vhc_marker=[];  
    },
	f_setMarkerPos: function (marker_list, id, pos) {
        var m = _.find(marker_list, {marker_id:id});
        if(!m) return;
        var latlng = new google.maps.LatLng(pos.lat, pos.lng);
        m.setPosition(latlng);
    },
    f_getLatLngAddress: function(lat, lng, callback){
    	var url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + lng + "&sensor=true";
        $.get(url, function(res){
            if(callback){callback(res)};
        });
    },
    f_resize: function(el, map){
        var mapHeight=$('.page-container').css('min-height');
        var headHeight =$('.portlet-title').height();
        var iMapHeight = mapHeight.replace("px","");
        //console.log("height",iMapHeight);
        var gMap = $(el);

        var containerHeight = $(window).height() - $('.page-header').height() - $('.portlet-title').height() - $('.page-footer').height()-14;

        gMap.css({height:containerHeight, width:"100%"});

        //mapHeight = (parseInt(iMapHeight) - headHeight)+"px";
        //$('#mapa').height(mapHeight);
        google.maps.event.trigger(map, 'resize') 
    },
    markerCluster_Bak: undefined,
    f_renderCluster: function(map, markers){
        if(!this.markerCluster_Bak){
            this.markerCluster_Bak = new MarkerClusterer(map, markers,
            {imagePath: base_url.replace('index.php','') + '/assets/marker/cluster/m'});    
        }else{
            this.markerCluster_Bak.clearMarkers();
            this.markerCluster_Bak.addMarkers(markers);
        }      
    },
    path:{},
    f_renderPath: function(map, marker_id, data){
        if(this.path[marker_id]){
            this.path[marker_id].setMap(null);
            this.path[marker_id].marker1.setMap(null);
            this.path[marker_id].marker2.setMap(null);
        }
        var path = [];
        for(var i=0;i<data.length;i++){
            if(data[i].latitude>0){
                data[i].latitude =data[i].latitude * -1;

            }
            path.push({lat: data[i].latitude, lng: data[i].longitude});

        }

        var marker = new google.maps.Marker({ 
            draggable: false,
            map: map,
            position: {lat: path[0].lat, lng: path[0].lng},
            label:"A"
        });

        var marker2 = new google.maps.Marker({ 
            draggable: false,
            map: map,
            position: {lat: path[path.length-1].lat, lng: path[path.length-1].lng},
            label:"B"
        });

        this.path[marker_id] = new google.maps.Polyline({
          path: path,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        this.path[marker_id].marker1 = marker;
        this.path[marker_id].marker2 = marker2;
        this.path[marker_id].setMap(map);
    }
}

$( window ).resize(function() {
  map_obj.f_resize('#mapa', map_obj.mapa);
});
