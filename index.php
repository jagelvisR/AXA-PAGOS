<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago</title>
</head>
<body>
<!-- ----------------------------------- Resumen ------------------------- -->
		<div class="grid-container">
			<div class="flex-container">

				<div style="text-align: left">
					<!--Destino-->
		            <label for="">Destino</label>
		            <br>
		            <select name="">
		                <option value="(EU)Europa">(EU)Europa</option>
		                <option value="Norte América">Norte Américaa</option>
		                <option value="Caribe-México">Caribe-México</option>
		                <option value="Sudamerica">Sudamerica</option>
		                <option value="África">África</option>
		                <option value="Asia">Asia</option>
		                <option value="Oceanía">Oceanía</option>
		            	<option value="Miltidestino">Miltidestino</option>
		            </select>
	        	</div>
	        	<!--Salida-->
	        	<div style="text-align: left">
	              	<label for="">Salida</label>
	              	<br>
	              	<input type="date" name="">
	        	</div>
	        	<!--Retorno-->
	        	<div style="text-align: left">
	              	<label for="">Retorno</label>
	              	<br>
	              	<input type="date" name="">
	        	</div>
				<!--Opciones-->
	        	<div style="text-align: left">
	              <input type="checkbox" name="" value="Opcion 1">Opcion 1
	              <br>
	              <input type="checkbox" name="" value="Opcion 2">Opcion 2   
	              <br>
	              <input type="checkbox" name="" value="Opcion 3">Opcion 3
	        	</div>
	        	<!--Pasajeros-->
	              <div>
	              	<div class="grid-container">   
	              	<div class="item1">
	                	<label for="">Pasajeros</label>
	             	</div>
	              	<br>
	              	<div class="item3">
	                	<label for=""> < 65 </label>
	                	<br>
	                	<input type="text" size="02" maxlength="2">
	              	</div>
	              	<div class="item4">
	                	<label for=""> 65-85</label>
	                	<br>
	                	<input type="text" size="02" maxlength="2">
	             	</div>  
	            </div>
	                
	              </div>  
	        	<!--Btn Cotizar-->
	        	<div>
	              <button>Cotizar</button>
	        	</div>
			</div>	
		</div>

<!-- ----------------------------------- Fin Resumen --------------------------- -->

<!-- ----------------------------------- Producto Elegido --------------------------- -->
		<div style="text-align: left">
			<h3>Producto Elegido</h3>
		</div>

		<div class="grid-container">
			<div class="flex-container">

				<div style="text-align: center">
				<!--Nombre del Producto-->
		            <label for="">Nombre del Producto</label>
		            <br>
					<h4>Producto</h4>
	        	</div>
	        	<!--Salida-->
	        	<div style="text-align: left">
	              	<label for="">Salida</label>
	              	<br>
	              	<input type="date" name="">
	        	</div>
	        	<!--Precio-->
	            <div>
	              	<div class="grid-container">   
		              	<div class="item1">
		                	<label for="">Precio</label>
		             	</div>
	              		<br>
		              	<div class="item3">
		                	<label for=""> < 65 </label>
		                	<input type="text" size="02" maxlength="2">
		                	<br>
		                	<br>
		                	<input type="text" size="02" maxlength="2">
			            </div>
		              	<div class="item4">
		              		<label for=""> 65-85</label>
		                	<input type="text" size="02" maxlength="2">
		                	<br>
		                	<br>
		                	<input type="text" size="02" maxlength="2">	
		             	</div>	             	  
	            	</div>    
	            </div>
	            <!--Precio Total-->
	        	<div style="text-align: left">
	              	<label for="">Precio Total</label>
	              	<br>
	              	<input type="text" name="" size="8" maxlength="12" disabled value="USD 0000.00">
	        	</div>  
			</div>	
		</div>


<!-- ----------------------------------- Fin Producto Elegido --------------------------- -->

<!-- --------------------------------  Pasajeros ------------------------- -->

		<div style="text-align: left">
			<h3>Pasajeros</h3>
		</div>

		<div>
			<div class="section">
				<!--Pasajeros n -->
				<div class="col grid_1_of_4" style="text-align: center">
	                <br>
	                <h4>Nombre del Producto 1</h4>
	                <br>
	                <br>
	                <h4>Nombre del Producto n</h4>
				</div>
				<!--col 2-->
				<div class="col grid_1_of_4">
					<!--< 65-->
					<br>
					<br>					
					<br>				
					<div>         
		                <label for=""> < 65 </label>
	      			</div>
	      			<br>
					<br>
					<br>
					<br>
					<!--65 - 85-->
					<div>         
		                <label for="">65 - 85</label>
	      			</div>
	      			<br>
				</div>

				<div class="col grid_1_of_4">
					<!--Nombres-->
					<div>         
		                <label for="">Nombres</label>
		                <br>
		                <input type="text" name="">
	      			</div>
	      			<br>
					<!--Nombres-->
					<div>         
		                <label for="">Nombres</label>
		                <br>
		                <input type="text" name="">
	      			</div>
	      			<br>
					<br>  
					<!--Nombres-->
					<div>         
		                <label for="">Nombres</label>
		                <br>
		                <input type="text" name="">
	      			</div>
	      			<br>					  
				</div>
				<div class="col grid_1_of_4">
				 	<!--Apellidos-->
					<div>         
		                <label for="">Apellidos</label>
		                <br>
		                <input type="text" name="">
	      			</div>
					<br>
				 	<!--Apellidos-->
					<div>         
		                <label for="">Apellidos</label>
		                <br>
		                <input type="text" name="">
	      			</div>
					<br>
					<br>
				 	<!--Apellidos-->
					<div>         
		                <label for="">Apellidos</label>
		                <br>
		                <input type="text" name="">
	      			</div> 					    					                	                 	
				</div>
			</div>
		</div>
<!-- --------------------------------  Fin Pasajeros------------------------- -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Incluyendo .js de Culqi JS -->
<script src="https://checkout.culqi.com/v2"></script>

<script>
		// Configura tu llave pública
		Culqi.publicKey = 'pk_test_NKvGxcfJs5mq7UMm';
		// inicia tu Culqi Checkout
		Culqi.init();
</script>		

<!-- --------------------------------  Datos de la tarjeta ------------------------- -->		
	<form action="">
		<div style="text-align: left;" class="section">
			<h3>Datos de la Tarjeta</h3>
		</div>

		<div>
			<div class="section">

				<div class="col grid_2_of_4" style="text-align: left">
				 	<!--Nro. Tarjeta-->
					 <div>         
		                <label for="">Nro. Tarjeta</label>
		                <br>
		                <input type="text" name="" required size="20" data-culqi="card[number]" id="card[number]">
	      			</div>
					<br>
				 	<!--Fecha Cad.-->
					<div style="grid-gap: 0px;padding: -2px 0; display: grid; grid-template-columns: 200px auto auto;">
					 	<div class="item3">        
							<label for="">Fecha Cad.</label>
							<br>
							<input size="4" data-culqi="card[exp_month]" id="card[exp_month]">
							<span>/</span>
							<input size="4" data-culqi="card[exp_year]" id="card[exp_year]">
						</div>
						<div class="item4">
						<!--Cod. Seguridad-->					          
							<label for="">Cod. Seg</label>
							<br>
							<input type="text" name="" size="4" maxlength="4" required size="20" data-culqi="card[number]" id="card[number]">
						</div>
					</div>
					<br>
				 	<!--Nombres y Apellidos-->
					 <div>         
		                <label for="">Nombres y Apellidos</label>
		                <br>
		                <input type="text" name="" size="20" required>
	      			</div>
					<br>  
				 	<!-- Correo Electronico -->
					<div>         
		                <label for="">Correo Electronico </label>
		                <br>
		                <input type="email" name="" required size="50" >
					</div>
					<br>  
				 	<!--Aceptar terminis y condiciones-->
					<div style="grid-gap: 0px;padding: -2px 0; display: grid; grid-template-columns: 500px auto auto;">
						<div class="item3">         
							<input type="checkbox" name="" required>He leído y acepto las Condiciones y Términos del servicio</input>
						</div>
						<div class="item3">
							<!--Pagar-->
							<button class="button" type="submit" id="buyButton">Pagar</button>
						</div>
					</div>
					  					  					  						  										
				</div>
			</div>
		</div>
	</form>
<!-- --------------------------------  Fin Datos de la tarjeta ------------------------- -->		
	
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

		<style>
			.button {
				background-color: #f44336; /* Red */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				}
			/* Section */
			.section {
			  clear: both;
			  margin: 0px;
			  padding: 0px;
			}
			/* Column */
			.col {
			  /*background: #eee;*/
			  display: block;
			  float:left;
			  margin: 1% 0 1% 2%;
			}
			.col:first-child { margin-left: 0 !important; }

			/* Row */
			.row:before,
			.row:after { content:""; display:table; }
			.row:after { clear:both;}
			.row { zoom:1; /* For IE 6/7 */ }

			/* Grid */
			.grid_1_of_4{ width: 23.5% }
			.grid_2_of_4{ width: 49% }
			.grid_3_of_4{ width: 74.5% }
			.grid_4_of_4{ width: 100% }


			/* Full Width below 768 pixels */
			@media only screen and (max-width: 768px) {
			  .col {  margin: 1% 0 1% 0%; }
			  [class*='grid_'] { width: 100%; }
			}

			/*GRID*/
			
		    .grid-container {
		      display: grid;
		      grid-template-columns: auto auto auto;

		      grid-gap: 10px;
		      padding: 0px;
		    }

		    .grid-container > div {
		      text-align: center;
		      padding: 1px 0;
		      font-size: 15px;
		    }

		    .item1 {
		      grid-column-start: 1;
		      grid-column-end: 3;
		    }

		    	
		    /*FLEX*/

		    .flex-container {
		      display: flex;
		    }

		    .flex-container > div {
		      margin: 10px;
		      padding: 5px;
		      font-size: 15px;
		    } 
		</style>
	</body>
</html>