<!DOCTYPE html>
<html lang="pt-br">
   <?php require "cabecariopro.php";
   require_once('config/conn.php');
   
   $cod = $_SESSION['idOng'];
   $sql= ("SELECT * FROM agendamento WHERE  codOng = $cod ");
    $result = mysqli_query($conexao, $sql);
	?>


  
	<head>
		<link href="http://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet" type="text/css"/>

		<!-- Custom styles for this template (imports bootstrap from LESS) -->
		<link href="css/style.css" rel="stylesheet">
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
       <?php while($linha = mysqli_fetch_assoc($result)){
        ?>{ 
            
         id: '<?php echo $linha['codAge'];?>',
         title: '<?php  $nome = $linha['nomeUs']; echo $nome;?>',
         start: '<?php $data = $linha['dataAge']; echo $data;?>',
        },<?php
       }?>
      ],
     
        eventClick: function(info) {
        window.location = 'agendamento.php?nomeUs=' + info.event.title +'&dataAge='+ info.event.start.toLocaleString();

    }

    // change the border color just for fun
   
        
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  
    <body>
      
		
  <div id='calendar'></div>
    
   </div> <!-- /container -->
 
<!-- Modal -->

  
		<?php require "rodape.php";?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
  </body>
</html>
