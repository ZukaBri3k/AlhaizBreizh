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

    // Vérifier si des événements existent
    if (allEvents.length > 0) {
        // Récupérer la date du mois actuel
        var currentDate = calendar.getDate();

        // Liste des jours du mois actuel
        var currentMonthDays = [];
        var currentMonthStart = currentDate.startOf('month');
        var currentMonthEnd = currentDate.endOf('month');
        var currentDay = currentMonthStart;

        // Remplir la liste des jours du mois
        while (currentDay.isSameOrBefore(currentMonthEnd, 'day')) {
            currentMonthDays.push(currentDay.format('YYYY-MM-DD'));
            currentDay.add(1, 'day');
        }

        // Convertir les dates en format ISO8601 et vérifier la disponibilité
        var formattedEvents = currentMonthDays.map(function(day) {
            // Vérifier si l'événement existe pour ce jour
            var eventForDay = allEvents.find(function(event) {
                return event.start.format('YYYY-MM-DD') === day;
            });

            return {
                start_date: eventForDay ? eventForDay.start.toISOString() : null,
                end_date: eventForDay ? (eventForDay.end ? eventForDay.end.toISOString() : null) : null,
                // Ajouter le champ "date" avec la valeur du jour vérifié
                date: day,
                statut: eventForDay ? ((eventForDay.title === 'réservé') ? 'reserve' : 'indisponible') : null,
            };
        });
    } else {
        // Aucun événement dans le calendrier
        var formattedEvents = [];
    }

    // Ajouter les champs au formulaire
    var form = document.getElementById('eventForm');
    var eventsInput = document.createElement('input');
    eventsInput.type = 'hidden';
    eventsInput.name = 'events';
    eventsInput.value = JSON.stringify(formattedEvents);
    form.appendChild(eventsInput);
    console.log(eventE1);
    // Soumettre le formulaire
    form.submit();
});

  
  calendar.render();  
    });   

       