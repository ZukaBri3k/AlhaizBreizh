<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>  
  
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


<script src="{{asset('js/script_cal.js')}}"></script>
</body>
</html>