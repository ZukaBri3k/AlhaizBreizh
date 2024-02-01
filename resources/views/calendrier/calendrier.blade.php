
<!DOCTYPE html>

<html lang="en">
<head>
 
  Vary: Origin
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="/chemin/vers/favicon.ico" type="image/x-icon">
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/cal.css')}}"></head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <x-Navbar></x-Navbar>
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
</div>

<div id='calendar-container'>
  <div id='calendar'></div>
</div>
</form>
<x-FooterClient></x-FooterClient>
<!-- Cloudflare Pages Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "dc4641f860664c6e824b093274f50291"}'></script><!-- Cloudflare Pages Analytics -->  



<script src="{{asset('js/script_cal.js')}}"></script>
</body>
</html>