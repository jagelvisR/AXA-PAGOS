<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
      <input size="2" data-culqi="card[exp_month]" id="card[exp_month]">
      <span>/</span>
      <input size="4" data-culqi="card[exp_year]" id="card[exp_year]">
    </label>
  </div>
  <button type="submit">pagar</button>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Incluyendo .js de Culqi JS -->
<script src="https://checkout.culqi.com/v2"></script>

<script>
		// Configura tu llave pública
		Culqi.publicKey = 'pk_test_NKvGxcfJs5mq7UMm';
		// inicia tu Culqi Checkout
		Culqi.init();
</script>		


<script>
		function culqi() {
				if (Culqi.token) { // ¡Objeto Token creado exitosamente!
					var token = Culqi.token.id;
					alert('Se ha creado un token:' + token);
			} else { // ¡Hubo algún problema!
				// Mostramos JSON de objeto error en consola
				console.log(Culqi.error);
				alert(Culqi.error.user_message);
			}
		};

		$('#buyButton').on('click', function(e) {
			// Crea el objeto Token con Culqi JS
			Culqi.createToken();
			e.preventDefault();
		});

		
	</script>

</body>
</html>