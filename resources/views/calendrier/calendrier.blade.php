<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/cal.css')}}"></head>
<body>
<form id="eventsForm" action="{{ route('ajouter-evenements') }}" method="post">
   @csrf
    
<div id='external-events'>
  

  <div class='fc-event fc-h-eventres fc-daygrid-event fc-daygrid-block-event' data-title="réservé">
    <div class='fc-event-main 'data-title="réservé">réservé</div>
  </div>
  <div class='fc-event fc-h-eventindis  fc-daygrid-event fc-daygrid-block-event' data-title="indisponible  ">
    <div class='fc-event-main' data-title="indisponible">indisponible</div>
  </div>
  <input type="hidden" name="events" id="eventsInput">
    <button type="submit" id="validate-button">Valider les événements</button>
</input>
<button id="my-button">Obtenir la date du calendrier</button>
</div>

<div id='calendar-container'>
  <div id='calendar'></div>
</div>
</form>
<!-- Cloudflare Pages Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "dc4641f860664c6e824b093274f50291"}'></script><!-- Cloudflare Pages Analytics -->  



<script src="{{asset('js/script_cal.js')}}"></script>
</body>
</html>