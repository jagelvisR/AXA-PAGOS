<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion Fechas</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <form>
        <div>
          <label>
            <span>Fecha Salida</span>
            <input type="date" id="salida">
          </label>
        </div>
        <div>
          <label>
            <span>Fecha Retorno</span>
            <input type="date" id="regreso">
          </label>
        </div>
        
        <button class="button" id="validateButton">COTIZAR</button>
      </form>
</body>

<script>
  let today = new Date();
  let dd = today.getDate();
  let mm = today.getMonth()+1; //January is 0!
  let yyyy = today.getFullYear();
  if(dd<10){
          dd='0'+dd
      } 
      if(mm<10){
          mm='0'+mm
      } 
  //today = yyyy+'-'+mm+'-'+dd;
  let diaAnterior = yyyy+'-'+mm+'-'+(dd + 1);
  let diaDespues = yyyy+'-'+mm+'-'+(dd + 2); 
  document.getElementById("salida").setAttribute("min", diaAnterior);
  document.getElementById("regreso").setAttribute("min", diaDespues);
</script>
</html>
<?php //echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+1 days"));
// cambiar type text a date ?>