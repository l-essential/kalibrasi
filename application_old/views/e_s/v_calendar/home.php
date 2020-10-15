<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default" onclick="adddata()">Add Data </button>
                        <button type="button" class="btn btn-sm btn-default" onclick="ToController('e_s/Calendar/home_table  ', '')">Data Table</button>
                      </div>
                   </h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-like">Masuk Kerja</div>
                    <div class="external-event bg-primary">Ganti Hari</div>
                    <div class="external-event bg-warning">Pemilihan Presiden</div>
                    <div class="external-event bg-info">Libur Hari Peringantan</div>
                    <div class="external-event bg-danger">Hari Libur</div>
                    
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
   url_add = '<?php echo $url_add; ?>';
  $(function () {
     var get_data        = '<?php echo $get_data; ?>';
    /* initialize the external events
     -----------------------------------------------------------------*/
    // function ini_events(ele) {
    //   ele.each(function () {

    //     // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
    //     // it doesn't need to have a start or end
    //     var eventObject = {
    //       title: $.trim($(this).text()) // use the element's text as the event title
    //     }

    //     // store the Event Object in the DOM element so we can get to it later
    //     $(this).data('eventObject', eventObject)

    //     // make the event draggable using jQuery UI
    //     $(this).draggable({
    //       zIndex        : 1070,
    //       revert        : true, // will cause the event to go back to its
    //       revertDuration: 0  //  original position after the drag
    //     })

    //   })
    // }

    // ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    // new Draggable(containerEl, {
    //   itemSelector: '.external-event',
    //   eventData: function(eventEl) {
    //     console.log(eventEl);
    //     return {
    //       title: eventEl.innerText,
    //       backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
    //       borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
    //       textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
    //     };
    //   }
    // });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      //Random default events
       select: function(start, end) {
                    $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                    $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                    $('#create_modal').modal('show');
                    save();
                    $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element)
                {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
      events: JSON.parse(get_data),
      // events    : [
      //   {
      //     title          : 'All Day Event',
      //     start          : new Date(y, m, 1),
      //     backgroundColor: '#f56954', //red
      //     borderColor    : '#f56954' //red
      //   },
      //   {
      //     title          : 'Long Event',
      //     start          : new Date(y, m, d - 5),
      //     end            : new Date(y, m, d - 2),
      //     backgroundColor: '#f39c12', //yellow
      //     borderColor    : '#f39c12' //yellow
      //   },
      //   {
      //     title          : 'Meeting',
      //     start          : new Date(y, m, d, 10, 30),
      //     allDay         : false,
      //     backgroundColor: '#0073b7', //Blue
      //     borderColor    : '#0073b7' //Blue
      //   },
      //   {
      //     title          : 'Lunch',
      //     start          : new Date(y, m, d, 12, 0),
      //     end            : new Date(y, m, d, 14, 0),
      //     allDay         : false,
      //     backgroundColor: '#00c0ef', //Info (aqua)
      //     borderColor    : '#00c0ef' //Info (aqua)
      //   },
      //   {
      //     title          : 'Birthday Party',
      //     start          : new Date(y, m, d + 1, 19, 0),
      //     end            : new Date(y, m, d + 1, 22, 30),
      //     allDay         : false,
      //     backgroundColor: '#00a65a', //Success (green)
      //     borderColor    : '#00a65a' //Success (green)
      //   },
      //   {
      //     title          : 'Click for Google',
      //     start          : new Date(y, m, 28),
      //     end            : new Date(y, m, 29),
      //     url            : 'http://google.com/',
      //     backgroundColor: '#3c8dbc', //Primary (light-blue)
      //     borderColor    : '#3c8dbc' //Primary (light-blue)
      //   }
      // ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    // var currColor = '#3c8dbc' //Red by default
    // //Color chooser button
    // var colorChooser = $('#color-chooser-btn')
    // $('#color-chooser > li > a').click(function (e) {
    //   e.preventDefault()
    //   //Save color
    //   currColor = $(this).css('color')
    //   //Add color effect to button
    //   $('#add-new-event').css({
    //     'background-color': currColor,
    //     'border-color'    : currColor
    //   })
    // })
    // $('#add-new-event').click(function (e) {
    //   e.preventDefault()
    //   //Get value and make sure it is not null
    //   var val = $('#new-event').val()
    //   if (val.length == 0) {
    //     return
    //   }

    //   //Create events
    //   var event = $('<div />')
    //   event.css({
    //     'background-color': currColor,
    //     'border-color'    : currColor,
    //     'color'           : '#fff'
    //   }).addClass('external-event')
    //   event.html(val)
    //   $('#external-events').prepend(event)

    //   //Add draggable funtionality
    //   ini_events(event)

    //   //Remove event from text input
    //   $('#new-event').val('')
    // })
  })
</script>