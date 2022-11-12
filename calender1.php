<!DOCTYPE html>
<?php require "cabecariopro.php";?>
<html>
<head>
<meta charset='utf-8' />
<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/core/locales/pt-br.js'></script>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locales: 'pt-br',
      plugins: [ 'interaction', 'dayGrid' ],
      //defaultDate: '2019-04-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2022-10-24'
        },
        {
          title: 'Long Event',
          start: '2022-10-24',
          end: '2019-04-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-24T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2022-10-24T16:00:00'
        },
        {
          title: 'Conference',
          start: '2022-10-24',
          end: '2019-04-13'
        },
        {
          title: 'Meeting',
          start: '2022-10-24T10:30:00',
          end: '2019-04-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2022-10-24T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2022-10-24T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2022-10-24T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2022-10-24T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2022-10-24T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2022-10-24'
        }
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
