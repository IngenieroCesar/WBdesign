@extends('admin.templates.admin')
@section('title', 'Crear Tareas')
@section('css')

<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="{{ asset('WBplataform/plugins/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('WBplataform/plugins/fullcalendar/fullcalendar.print.css') }}" media="print">
<link rel="stylesheet" href="{{ asset('Plugins/Chosen/chosen.css') }}">

@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendario
        <small>Actividades Empleados</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Calendario de la vida</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Actividades</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <div class="external-event bg-green">Evento 1</div>
                <div class="external-event bg-yellow">Evento 2</div>
                <div class="checkbox">
                  <label for="drop-remove">
                    <input type="checkbox" id="drop-remove">
                    Remover despues de uso
                  </label>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Evento</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Titulo Evento">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat ion-plus-circled"></button>
                </div>
                <!-- /btn-group -->
              </div><br/><br/>
              <!-- /input-group -->
              {!! Form::open(['route'=> ['agregarActividad'], 'method' => 'POST', 'id' =>'form-calendario']) !!}
              {!! Form::close() !!}
            </div>
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('js')

  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('WBplataform/dist/js/demo.js') }}"></script>
  <!-- fullCalendar 2.2.5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="{{ asset('WBplataform/plugins/fullcalendar/fullcalendar.js') }}"></script>
	<!-- Chosen -->
	<script src="{{ asset('Plugins/Chosen/chosen.jquery.js')}}"></script>

	<script>
			$('.select-tag').chosen({
					placeholder_text_multiple: 'Seleccione un maximo de 10 empleados',
					max_selected_options: 10,
					search_contains:true,
					no_results_text: 'No se encontraron estas estiquetas'
			});
	</script>

  <!-- Page specific script -->
  <script>
    $(function () {
      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {
          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          };


          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject);


          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          });


        });
      }


      ini_events($('#external-events div.external-event'));


      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
          m = date.getMonth(),
          y = date.getFullYear();
    //while(reload==false){
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'hoy',
          month: 'mes',
          week: 'semana',
          day: 'dia'
        },

        events: { url:"actividades/cargaEventos"},

        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!


        drop: function (date, allDay) { // this function is called when something is dropped
          // retrieve the dropped element's stored Event Object
          var originalEventObject = $(this).data('eventObject');
          // we need to copy it, so that multiple events don't have a reference to the same object
          var copiedEventObject = $.extend({}, originalEventObject);
          allDay=true;
          // assign it the date that was reported
          copiedEventObject.start = date;
          copiedEventObject.allDay = allDay;
          copiedEventObject.backgroundColor = $(this).css("background-color");
          copiedEventObject.borderColor = $(this).css("border-color");


          // render the event on the calendar
          //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
          // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
          }
          //Guardamos el evento creado en base de datos
          var title=copiedEventObject.title;
          var start=copiedEventObject.start.format("YYYY-MM-DD HH:mm");
          var back=copiedEventObject.backgroundColor;


          crsfToken = document.getElementsByName("_token")[0].value;
          $.ajax({
               url: 'actividades/agregarEvento',
               data: 'title='+ title+'&start='+ start+'&allday='+allDay+'&background='+back,
               type: "POST",
               headers: {
                      "X-CSRF-TOKEN": crsfToken
                  },
                success: function(events) {
                  console.log('Evento creado');
                  $('#calendar').fullCalendar('refetchEvents' );
                },
                error: function(json){
                  console.log("Error al crear evento");
                }
          });
        },

        eventResize: function(event) {
        var start = event.start.format("YYYY-MM-DD HH:mm");
        var back=event.backgroundColor;
        var allDay=event.allDay;
        if(event.end){
          var end = event.end.format("YYYY-MM-DD HH:mm");
        }else{var end="NULL";
        }
        crsfToken = document.getElementsByName("_token")[0].value;
          $.ajax({
            url: 'actividades/actualizaEventos',
            data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id+'&background='+back+'&allday='+allDay,
            type: "POST",
            headers: {
                  "X-CSRF-TOKEN": crsfToken
              },
              success: function(json) {
                console.log("Se actualizo la hora del evento");
              },
              error: function(json){
                console.log("Error al actualizar evento");
              }
          });
        }, //end event resize

        eventDrop: function(event, delta) {
        var start = event.start.format("YYYY-MM-DD HH:mm");
        if(event.end){
          var end = event.end.format("YYYY-MM-DD HH:mm");
        }else{var end="NULL";
        }
        var back=event.backgroundColor;
        var allDay=event.allDay;
        crsfToken = document.getElementsByName("_token")[0].value;


          $.ajax({
            url: 'actividades/actualizaEventos',
            data: 'title='+ event.title+'&start='+ start +'&end='+ end+'&id='+ event.id+'&background='+back+'&allday='+allDay ,
            type: "POST",
            headers: {
              "X-CSRF-TOKEN": crsfToken
            },
            success: function(json) {
              console.log("Actualización día del evento Exítosa");
            },
            error: function(json){
              console.log("Error al actualizar eventdrop");
            }
          });
      }, //end event drop


      eventMouseover: function( event, jsEvent, view ) {
        var start = (event.start.format("HH:mm"));
        var back=event.backgroundColor;
        if(event.end){
            var end = event.end.format("HH:mm");
        }else{var end="No definido";
        }
        if(event.allDay){
            var allDay = "Si";
        }else{var allDay="No";
        }
        var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center>'+'Todo el dia: '+allDay+'<br>'+ 'Inicio: '+start+'<br>'+ 'Fin: '+ end +'</div>';
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });
      }, //end event mouseover

      eventMouseout: function(calEvent, jsEvent) {
       $(this).css('z-index', 8);
       $('.tooltipevent').remove();
     }, //end event mouseout

     dayClick: function(date, jsEvent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      }, //end event dayClick

      eventClick: function (event, jsEvent, view) {
        crsfToken = document.getElementsByName("_token")[0].value;
        var con=confirm("Esta seguro que desea eliminar el evento");
        if(con){
            $.ajax({
               url: 'actividades/eliminaEvento',
               data: 'id=' + event.id,
               headers: {
                  "X-CSRF-TOKEN": crsfToken
                },
               type: "POST",
               success: function () {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    console.log("Evento eliminado");
                }
            });
        }else{
           console.log("Cancelado");
        }
      } //end event Click

      });


      /* AGREGANDO EVENTOS AL PANEL */
      var currColor = "#3c8dbc"; //Red by default
      //Color chooser button
      var colorChooser = $("#color-chooser-btn");
      $("#color-chooser > li > a").click(function (e) {
        e.preventDefault();
        //Save color
        currColor = $(this).css("color");
        //Add color effect to button
        $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
      });
      $("#add-new-event").click(function (e) {
        e.preventDefault();
        //Get value and make sure it is not null
        var val = $("#new-event").val();
        if (val.length == 0) {
          return;
        }


        //Create events
        var event = $("<div />");
        event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
        event.html(val);
        $('#external-events').prepend(event);


        //Add draggable funtionality
        ini_events(event);


        //Remove event from text input
        $("#new-event").val("");
      });
    });
  </script>




@endsection
</body>
</html>
