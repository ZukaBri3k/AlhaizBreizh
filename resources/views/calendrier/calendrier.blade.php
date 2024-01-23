<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
  var Calendar = FullCalendar.Calendar;
  var Draggable = FullCalendar.Draggable;

  var containerEl = document.getElementById('external-events');
  var calendarEl = document.getElementById('calendar');
  var checkbox = document.getElementById('drop-remove');

  // initialize the external events
  // -----------------------------------------------------------------

  new Draggable(containerEl, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText
      };
    }
  });

  // initialize the calendar
  // -----------------------------------------------------------------

  var calendar = new Calendar(calendarEl, {
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    eventOverlap: false,
    eventResizableFromStart: true,  
    eventClick: function(info) {
      console.log("Event Clicked:", info.event);

      if (confirm("Voulez-vous vraiment supprimer cet événement?")) {
        console.log("User confirmed deletion");

        info.event.remove(); // Supprime l'événement du calendrier

        // Supprimer l'événement du tableau
        var index = eventsArray.findIndex(function(event) {
          return event.id === info.event.id;
        });

        if (index !== -1) {
          eventsArray.splice(index, 1);
        }

        console.log("After removal:", eventsArray);
      }
    },
    eventReceive: function(info) {
      // Ajouter l'événement au tableau lorsque reçu
      eventsArray.push(info.event);
      console.log("Event received and added to array:", info.event);
      console.log("Current array:", eventsArray);
    },
    eventDidMount: function(info) {
      // Appliquer des styles spécifiques après le rendu
      if (info.event.title === 'réservé') {
        info.el.style.backgroundColor = 'red';
        info.el.style.color = 'white';
      } else if (info.event.title === 'indisponible') {
        info.el.style.backgroundColor = 'gray';
        info.el.style.color = 'white';
      }
    },
  });

  calendar.render();  
    });
    </script>   
</head>
<body>

<div id='external-events'>
  <p>
    <strong>Draggable Events</strong>
  </p>

  <div class='fc-event fc-h-eventres fc-daygrid-event fc-daygrid-block-event' data-title="réservé">
    <div class='fc-event-main 'data-title="réservé">réservé</div>
  </div>
  <div class='fc-event fc-h-eventindis  fc-daygrid-event fc-daygrid-block-event' data-title="indisponible  ">
    <div class='fc-event-main' data-title="indisponible">indisponible</div>
  </div>

</div>

<div id='calendar-container'>
  <div id='calendar'></div>
</div>

<!-- Cloudflare Pages Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "dc4641f860664c6e824b093274f50291"}'></script><!-- Cloudflare Pages Analytics -->  
<style>
  html, body {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
}

#external-events {
  position: fixed;
  z-index: 2;
  top: 20px;
  left: 20px;
  width: 150px;
  padding: 0 10px;
  border: 1px solid #ccc;
  background: beige;
}

#external-events .fc-event {
  cursor: move;
  margin: 3px 0;
}

#calendar-container {
  position: relative;
  z-index: 1;
  margin-left: 200px;
}

#calendar {
  max-width: 1100px;
  margin: 20px auto;
}

.fc-h-event .fc-event-main  {
  color: black; 
  font-size: large;
  font-style: italic;
}

  /* Style pour un événement spécifique (par exemple, réservé) */
  .fc-event-draggable.fc-event[data-title="réservé"] {
    background-color: red !important;
    color: white !important;
  }

  /* Style pour un autre événement spécifique (par exemple, indisponible) */
  .fc-event-draggable.fc-event[data-title="indisponible"] {
    background-color: gray !important;
    color: white !important;
  }
  .fc-h-eventindis{
  background-color: gray !important;
  color: black; 
  font-size: large;
  font-style: italic;
 }
 .fc-h-eventres{
  background-color: red !important;
  color: black; 
  font-size: large;
  font-style: italic;
 }
  </style>


  
</body>
</html>