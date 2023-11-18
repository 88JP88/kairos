document.getElementById("lectorEvento").addEventListener("click", function() {
  var eventName = document.getElementById("eventName").value;
  var dateStart = document.getElementById("dateStart").value;
  var dateEnd = document.getElementById("dateEnd").value;
  var url = document.getElementById("url").value;
  var state = document.getElementById("state").value;
  
  addNewEvent(eventName, dateStart, dateEnd, url,state);
});

var calendar; // Declarar calendar fuera de la función

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  calendar = new FullCalendar.Calendar(calendarEl, {
	initialView: 'dayGridMonth',
	locale: "es",
	headerToolbar: {
  	left: 'prev,next today',
  	center: 'title',
  	right: 'dayGridMonth,timeGridWeek,listWeek'
	},
  //funcion para borrar evento
  eventClick: function(arg) {
    if (confirm('Are you sure you want to delete this event?')) {
      arg.event.remove()
    }
  }
  });
  calendar.render();
});

function addNewEvent(eventName, dateStart, dateEnd, url, state) {
  calendar.addEvent({
	title: eventName,
	start: dateStart,
	end: dateEnd,
	url: url,
  className: state,
  editable:'true'
  });
}

function getCalendarEvents() {
  var events = calendar.getEvents();
  console.log(events);
}

//LLAMAR LISTA ROOMS  DISPONIBLES
async function getClientRoomsList() {

  var reposSelect = document.getElementById("list-clientroom");
  while (reposSelect.firstChild) {
    reposSelect.removeChild(reposSelect.firstChild);
  }




	fetch('https://dev-kairosGateway.lugma.tech/kairosGateway/apiCompanies/v1/getClientRooms/UfbHdZaJ 6WclAmsaP9H7SR2WmpDbl1OL9/4e6baba0/all')
  .then(response => response.json())
  .then(data => {
    data.clientRoom.forEach(info => {
      const option = document.createElement("option");
      option.value = info.roomId;
      option.text = info.comments;
      reposSelect.add(option);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });

 }

/*
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
	initialView: 'dayGridMonth',
	locale: "es",
	headerToolbar: {
  	left: 'prev,next today',
  	center: 'title',
  	right: 'dayGridMonth,timeGridWeek,listWeek'
	},
	dayClick: function(info) {
  	$('#modalEvent').modal('show');
	}
  });
  calendar.render();
});

/*

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      events:[
        {
          title:'event name',
          start:'2023-11-16',
          end:'2023-11-19 24:00:00',
          url:'https://www.google.com'
        }
      ]
    });
    calendar.render();
  });
 

calendar.getEvents()


*/



/**EVENTO PARA LLAMAR UN MODAL POR DIA 
 * dateClick:function(info){
        $("#modalEvent").modal("show");
      } 
      
      
        events:[
          {
            title:'event name',
            start:'2023-11-16',
            end:'2023-11-18',
          }
        ]
      */

