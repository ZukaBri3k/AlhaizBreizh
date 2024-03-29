document.addEventListener('DOMContentLoaded', function() {
  var Calendar = FullCalendar.Calendar;
  var Draggable = FullCalendar.Draggable;
  var containerEl = document.getElementById('external-events');
  var calendarEl = document.getElementById('calendar');
  var validateButton = document.getElementById('validate-button');
  var eventsArray = []  ;  

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
        info.el.style.backgroundColor = '#EC3B53';
        info.el.style.color = 'white';
      } else if (info.event.title === 'indisponible') {
        info.el.style.backgroundColor = 'gray';
        info.el.style.color = 'white';
      }
    },
  });
  
    $("#validate-button").on("click", function() {
      var events = calendar.getEvents();
      console.log("Événements récupérés:", events);

      if (events.length > 0) {
          var startDate = events[0].start;
          console.log("Date de début:", startDate);

          if (startDate) {
              console.log("Test de startDate:", startDate);
              var date = startDate.toString();
              console.log("Date à envoyer:", date);
              
              console.log("Événements à envoyer:", date);
              data=date;
              console.log("Date à envoyer:", data);
              
              $.ajax({
                url: "  {{ route('ajouter-evenements') }}",  // Utilisation de la fonction route() de Laravel pour générer l'URL
                type: "POST",
                dataType: 'string',
                contentType: 'application/json',
                data: date,  
                success: function(response) {
                    console.log("Réponse du serveur:", response);
                    alert(response.message);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Erreur AJAX:", textStatus, errorThrown);
                    console.log("Réponse du serveur :", jqXHR.responseText);
                }
            });
            } else {
              console.log("La date de début n'est pas définie dans le premier événement.");
          }
      } else {
          console.log("Aucun événement à envoyer.");
      }
  });
calendar.render();  
    });   

       