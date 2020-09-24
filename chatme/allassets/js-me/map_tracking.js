var tracking_obj ={
	token: '',
	tracking_url :'',//from server
	vhc_list:[],
	socket:undefined,
	socket_connected:false,
	init:function(){
		$.ajax({
			url:base_url + '/cm_kendaraan/grid', 
			method: "GET",
			//dataType:"application/json",
			success:function(res){
				res = JSON.parse(res);
				tracking_obj.vhc_list=res.data;
				tracking_obj.f_renderListKendaraan(tracking_obj.vhc_list);
			}
		});
		this.initSocket();

		$('.map-container .map_tabs').on('shown.bs.tab', function(){
			if(map_obj.mapa)
				google.maps.event.trigger(map_obj.mapa, 'resize');
		});
	},
    initSocket:function(){
        this.socket = io.connect(this.tracking_url+ '/',
                {
                    'force new connection': true,
                    query: 'j_token=' + this.token
                }
            );
        this.socket.on('connect', function () {
			console.log('io connected');
			tracking_obj.socket_connected = true;
		});	
		//=========================================
		this.socket.on('gps_data', function (msg){
			if(msg.latitude && msg.longitude){
				if(msg.latitude>0) msg.latitude*=-1;
				map_obj.f_setMarkerPos(map_obj.vhc_marker, msg.deviceId, {lat: msg.latitude, lng: msg.longitude});
			}
		});
    },
	f_filterKendaraan: function(param, callback){
		var searchFormVal = $('.map-sidemenu .txt-filter-kendaraan').val();
		
		var data = [];
		if(param){
			data=param;
		}else{
			data.push({plateNumber: searchFormVal});
			data.push({vhcName: searchFormVal});
		}

		var filteredVhc = [];
		for(var i in tracking_obj.vhc_list){
			var c = tracking_obj.vhc_list[i];
			if(c.plateNumber.toUpperCase().includes(searchFormVal.toUpperCase())|| c.vhcName.toUpperCase().includes(searchFormVal.toUpperCase())){
				filteredVhc.push(c);
			}
		}
		this.f_renderListKendaraan(filteredVhc);
		return false;
	},
	f_renderListKendaraan: function(k){
		if(k.length==0)
			$('.map-sidemenu .sub-menu-kendaraan').html('<li class="nav-item"><a>tidak ada kendaraan</span></a>');
		else
			$('.map-sidemenu .sub-menu-kendaraan').html('');

		var uptd = [];
		for(var i in k){
			var c= k[i];
			if(c.id_uptd==null){
				c.id_uptd="0";
				c.nama_uptd="UPTD Not Set";
			}
			var addedUptd = _.find(uptd, {id_uptd: c.id_uptd});
			if(!addedUptd){
				uptd.push({id_uptd: c.id_uptd, nama_uptd: c.nama_uptd});
			}
		}

		for(var i in uptd){
			var el = '<li class="nav-item"> ' +
                		'<a href="javascript:;" class="nav-link nav-toggle">' +
                		'<label><input type="checkbox" class="icheck chk-uptd" value="uptd_' + uptd[i].id_uptd +  '"></label>' + 
                		uptd[i].nama_uptd + '<span class="arrow"></span>' +
                		'</a>'+
                		'<ul class="sub-menu uptd_' + uptd[i].id_uptd +  '">'+
                		'</ul>' +
                	 '</li>';
            $('.map-sidemenu .sub-menu-kendaraan').append(el); 
		}

		//return;

		for(var i in k){
			var c = k[i];
			var addedMarker = _.find(map_obj.vhc_marker, {marker_id: c.gps_device_id});
			var checked="";
			if(addedMarker){
				checked="checked";
			}

			var el = '<li class="nav-item">' +
                		'<a href="javascript:;" class="nav-link ">'+
                    	'<label><input type="checkbox" class="icheck chk-kendaraan" ' + checked + ' value="' + c.gps_device_id + '">' + c.plateNumber + "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + c.vhcName + '</label>' +  
                		'</a></li>';
			//$('.map-sidemenu .sub-menu-kendaraan').append(el);   
			$('.map-sidemenu .sub-menu-kendaraan .uptd_' + c.id_uptd).append(el);

		}
		$('.map-sidemenu .sub-menu-kendaraan input').iCheck({
			checkboxClass:'icheckbox_minimal-orange'
		}).on('ifChecked', function(event){
			var key = $(this).val();
			if(key.substr(0,4)=="uptd"){
				var child = $('.sub-menu.'+key).find('input');
				$(child).iCheck('check'); 
				return;
			}
            var deviceId = key;
            var vehicleData = _.find(tracking_obj.vhc_list, {gps_device_id:deviceId});

            if(!vehicleData) return;

            tracking_obj.f_subscribeSocket(deviceId, true);
            var opt = vehicleData;
            opt.id = deviceId;
            opt.icon = base_url.replace('index.php','') + 'assets/marker/dumptruck.png';
            //console.log(opt);
    		
    		map_obj.f_addVhcMarker(opt);

            tracking_obj.f_getLastPosition(deviceId, function(res){
            	if(res){
            		if(res.latitude>0) res.latitude= res.latitude*-1;
            		map_obj.f_setMarkerPos(map_obj.vhc_marker, deviceId, {lat: res.latitude, lng:res.longitude});
            	}
            });
        }).on('ifUnchecked', function(event){
        	var key = $(this).val();
			if(key.substr(0,4)=="uptd"){
				var child = $('.sub-menu.'+key).find('input');
				$(child).iCheck('uncheck'); 
				return;
			}
            var deviceId = key;
            tracking_obj.f_subscribeSocket(deviceId, false);
            map_obj.f_removeMarker(map_obj.vhc_marker, deviceId);
        });
	},
	f_subscribeSocket: function(deviceId, onof){
		var subscribe = onof?'subscribe':'unsubscribe';
		if(this.socket_connected){		
			this.socket.emit(subscribe, {deviceId:deviceId});			
		}else{
			alert('Connection Error', "Web Socket Not Connected,<br/>Please contact your administrator",'error');
		}
	},
	f_getLastPosition: function(deviceId, callback){
		if(!deviceId){
			callback([]);
			return;
		}
		var url = this.tracking_url + '/api/gpshst/lastpos?deviceId=' + deviceId + "&j_token=" + this.token;
		$.get(url, function(res){
			if(res.status==0){
				callback();
				return;
			}
			if(callback){
				if(res.data[0].length>0){
				callback(res.data[0][0]);
				}else{
					callback();	
				}	
			}
		});

	},
	f_addHistoryTab: function(marker_id){
	 	var isExist = _.find(map_obj.map_list, {map_id:marker_id});
        if(isExist){
            $('.map-container .map_tabs a[href="#hst_tab' + marker_id + '"]').tab('show');
            return;
        }		

        var vhcData = _.find(this.vhc_list, {gps_device_id: marker_id});

		var elTabNav = '<li>'+
                         '<a href="#hst_tab' + marker_id + '" data-toggle="tab" aria-expanded="true">' +
                           vhcData.plateNumber +'</a></li>';
		$('.map-container .map_tabs').append(elTabNav);

		var elBodyTab = '<div class="tab-pane active" id="hst_tab' + marker_id + '">'+
							//'<div id="mapheader' + marker_id + '" style="min-height:50px;width:100%"></div>' +
    						'<div id="map' + marker_id + '" style="min-height:600px;width:100%"></div>' +
						'</div>';
		$('.map-container .tab-content').append(elBodyTab);
		$('.map-container .map_tabs a[href="#hst_tab' + marker_id + '"]').tab('show');

		map_obj.f_addMap('map' + marker_id, marker_id);

		var newMap = _.find(map_obj.map_list,{map_id: marker_id});
		  var centerControlDiv = document.createElement('div');
        var centerControl = new MapControl(centerControlDiv, marker_id);

        centerControlDiv.index = 1;
		 
		newMap.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
		setTimeout(function(){
			$('.showhide' + marker_id).on('click', function(){
	        	$('.filter-date'+marker_id).toggle();
	        });
	        $('.tdate').daterangepicker({
	        		"timePicker24Hour": true,
	        		timePicker: true,
			        timePickerIncrement: 5,
			        locale: {
			            format: 'YYYY-MM-DD HH:mm:ss'
			        }
	        });
		},500);
		
	},
	f_filterHistory: function(marker_id){
		var filterEl = $('.filter-date'+marker_id);
		//var from = filterEl.find('#fdate');
		var to = filterEl.find('.tdate')
		/*if(from.val().trim()=='' || to.val().trim()==''){
			alert('Silahkan pilih tanggal.');
			return;
		}*/
		filterEl.find('.loader').show();
		to.prop('disabled', true);
		//from.prop('disabled', true);
		filterEl.find('button').prop('disabled', true);
		filterEl.find('button').prop('disabled', false);
		var drp = to.data('daterangepicker');
		var fromTime = drp.startDate.format("YYYY-MM-DD HH:mm:ss");
		var toTime = drp.endDate.format("YYYY-MM-DD HH:mm:ss");
		console.log(fromTime, toTime, marker_id);
		
		var data = {
			deviceId: marker_id,
			startTime: fromTime,
			endTime:toTime,
			j_token: tracking_obj.token
		}

		$.ajax({
			url:tracking_obj.tracking_url + "/api/gpshst", 
			method: "POST",
			data:data,
			success:function(res){
				
				if(res.status==0){
					alert("Get data error.");
					return;
				}
				var trdata = res.data[0];
				if(trdata.length>0){
					var thismap = _.find(map_obj.map_list, {map_id:marker_id});
					map_obj.f_renderPath(thismap,marker_id, trdata);
				}else{
					alert("No track data found.");
				}
				filterEl.find('.loader').hide();
				to.prop('disabled', false);
			}
		});

		
		
	}

}

function MapControl(controlDiv, id) {

        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        /*controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '3px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';*/
        controlUI.style.marginTop = '10px';
        controlUI.title = 'Klik untuk filter history';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        /*controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';*/
        controlText.innerHTML = '' +
        '<button class="btn btn-primary showhide' + id + '">Filter</button>' +
                '<div class="portlet box filter-date' + id + '">' + 
                    '<div class="portlet-body">' +
                    	'<div class="loader" style="display:none">' +
                    	'<img src="' + base_url.replace('index.php','') + '/assets/global/img/loading-spinner-blue.gif"> Loading...' +
                    	'</div>' +
                        /*'<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">' +
                            '<span class="input-group-addon">' +
                            'Dari </span> ' +
                            '<input type="text" class="form-control" id="fdate" name="from">' +
                            '<span class="input-group-addon">'+
                            's/d </span>'+
                            '<input type="text" class="form-control" id="tdate" name="to">'+
                        '</div>'+*/
                        '<input type="text" style="width:300px" class="form-control tdate" name="to">'+
                        '<button style="margin-top:5px" onclick="tracking_obj.f_filterHistory(\'' + id + '\')" class="btn btn-primary">Submit</button>'+
                        '<button style="margin-top:5px" class="btn btn-warning showhide' + id + '">Batal</button>'+
                    '</div>'+
                '</div>';

        controlUI.appendChild(controlText);

        
        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          
        });
}