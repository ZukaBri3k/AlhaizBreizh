document.addEventListener('DOMContentLoaded', function() {
  var Calendar = FullCalendar.Calendar;
  var Draggable = FullCalendar.Draggable;

  var containerEl = document.getElementById('external-events');
  var calendarEl = document.getElementById('calendar');
  var checkbox = document.getElementById('drop-remove');
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
  validateButton.addEventListener('click', function() {
    // Récupérer tous les événements du calendrier
    var allEvents = calendar.getEvents();

    // Convertir les dates en format ISO8601
    var formattedEvents = allEvents.map(function(event) {
      return {
        start_date: event.start.toISOString(),
        end_date: event.end ? event.end.toISOString() : null,
      };
    });

    // Envoyer les données au serveur Laravel via Ajax
    $.ajax({
      url: '/votre-route-laravel',  // Remplacez '/votre-route-laravel' par l'URL de votre route Laravel
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify({ events: formattedEvents }),
      success: function(response) {
        console.log('Données envoyées avec succès !', response);
      },
      error: function(error) {
        console.error('Erreur lors de l\'envoi des données :', error);
      }
    });
  });

  
  calendar.render();  
    });   