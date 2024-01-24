document.addEventListener('DOMContentLoaded', function() {
  var Calendar = FullCalendar.Calendar;
  var Draggable = FullCalendar.Draggable;

  var containerEl = document.getElementById('external-events');
  var calendarEl = document.getElementById('calendar');
  var validateButton = document.getElementById('validate-button');


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
  validateButton.addEventListener('click', function() {
    // Récupérer tous les événements du calendrier
    var allEvents = calendar.getEvents();

    // Convertir les dates en format ISO8601
    validateButton.addEventListener('click', function() {
        // Récupérer tous les événements du calendrier
        var allEvents = calendar.getEvents();
    
        // Récupérer le jour sélectionné dans le calendrier
        var selectedDate = null;
        if (allEvents.length > 0) {
            selectedDate = allEvents[0].start.toDateString();
        }
    
        // Ajouter le champ "date" avec la valeur du jour sélectionné
        var form = document.getElementById('eventForm');
        var dateInput = document.createElement('input');
        dateInput.type = 'hidden';
        dateInput.name = 'date';
        dateInput.value = selectedDate;
        form.appendChild(dateInput);
    
        // Soumettre le formulaire
        form.submit();
    });
    
  
  calendar.render();  
    });   

});