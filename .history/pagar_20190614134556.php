<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago Culqui</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Incluyendo .js de Culqi JS -->
    <script src="https://checkout.culqi.com/js/v3"></script>
    <form>
        <div>
            <label>
      <span>Correo Electrónico</span>
      <input type="text" size="50" data-culqi="card[email]" id="card[email]">
    </label>
        </div>
        <div>
            <label>
      <span>Número de tarjeta</span>
      <input type="text" size="20" data-culqi="card[number]" id="card[number]">
    </label>
        </div>
        <div>
            <label>
      <span>CVV</span>
      <input type="text" size="4" data-culqi="card[cvv]" id="card[cvv]">
    </label>
        </div>
        <div>
            <label>
      <span>Fecha expiración (MM/YYYY)</span>
      <input size="2" data-culqi="card[exp_month]" id="card[exp_month]" placeholder="MM">
      <span>/</span>
      <input size="4" data-culqi="card[exp_year]" id="card[exp_year]" placeholder="YYYY">
    </label>
        </div>
        <button class="button" id="buyButton" data-paquete="1" data-precio="50">Pagar</button>
    </form>
    <script>
        // Configura tu llave pública
        Culqi.publicKey = 'pk_test_8wleaCihW75H9zHX';
        
        // Usa la funcion Culqi.open() en el evento que desees
        $('#buyButton').on('click', function(e) {

            let paqueteN = $(this).attr('data-paquete');
            let precioTotal = $(this).attr('data-precio');
            // Configura tu Culqi Checkout
            Culqi.settings({
                title: paqueteN,
                currency: 'PEN',
                description: 'Polo Culqi lover',
                amount: precioTotal // monto
            });
            // Abre el formulario con las opciones de Culqi.settings
            Culqi.open();
            e.preventDefault();
        });
    </script>

    <style>
        .button {
            background-color: #f44336;
            /* Red */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</body>

</html>
<?php 
//recibir parametros


?>