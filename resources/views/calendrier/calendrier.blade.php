<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>  
  <link rel="stylesheet" type="text/css" href="{{asset('css/cal.css')}}">
</head>
<body>

<div id='external-events'>
  

  <div class='fc-event fc-h-eventres fc-daygrid-event fc-daygrid-block-event' data-title="réservé">
    <div class='fc-event-main 'data-title="réservé">réservé</div>
  </div>
  <div class='fc-event fc-h-eventindis  fc-daygrid-event fc-daygrid-block-event' data-title="indisponible  ">
    <div class='fc-event-main' data-title="indisponible">indisponible</div>
  </div>
  <button id="validate-button">Valider</button>


</div>

<div id='calendar-container'>
  <div id='calendar'></div>
</div>

<!-- Cloudflare Pages Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "dc4641f860664c6e824b093274f50291"}'></script><!-- Cloudflare Pages Analytics -->  



<script src="{{asset('js/script_cal.js')}}"></script>
</body>
</html>