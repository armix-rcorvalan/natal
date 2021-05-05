<div class="checkout">
	<div class="checkout__inner global-inner">

		<div class="recetas__col-left">

			<div class="checkout__box">

				<div class="input-box">

					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">1. Datos de Contacto</h2>
					
					<div class="input-group">
						<div class="input-wrapper">
							<label class="input-label input-label--row">Email</label>
							<input type="email" class="input-text input-text--row" placeholder="Email">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">Teléfono</label>
							<input type="phone" class="input-text input-text--row" placeholder="Código de área + número">
						</div>
					</div>

					<div class="input-group">
						<h3>Escoge el tipo de despacho</h3>
						<div class="input-wrapper">
							<div class="input-radio input-radio--dark">
								<input name="radio-a" type="radio" id="radio-a1" checked>
								<label for="radio-a1">
									<span><b>Envio a domicilio</b><br>Te lo llevamos a tu casa</span>	
								</label>
							</div>
							<div class="input-radio input-radio--dark">
								<input name="radio-a" type="radio" id="radio-a2">
								<label for="radio-a2">
									<span><b>Retiro en sucursal</b></span>
								</label>
							</div>
						</div>
					</div>

					<div class="input-group">
						<h3>Selecciona sucursal a retirar</h3>
						<div class="input-wrapper">
							<div class="input-radio input-radio--dark">
								<input name="radio-b" type="radio" id="radio-b1" checked>
								<label for="radio-b1">
									<span><b>Natal 0</b><br>Olascoaga 2799, Ciudad. Teléfono: 423-4080.<br> Lunes a Viernes 8 a 24. Sábados 9 a 24. Domingos y Feriados 10 a 14 y 18 a 22 horas.</span>	
								</label>
							</div>
							<div class="input-radio input-radio--dark">
								<input name="radio-b" type="radio" id="radio-b2">
								<label for="radio-b2">
									<span><b>Natal 1</b><br>Olascoaga 2799, Ciudad. Teléfono: 423-4080.<br> Lunes a Viernes 8 a 24. Sábados 9 a 24. Domingos y Feriados 10 a 14 y 18 a 22 horas.</span>	
								</label>
							</div>
						</div>
					</div>

					<div class="input-group">
						<h3>Escoge la forma de pago</h3>
						<div class="input-wrapper">
							<div class="input-radio input-radio--dark">
								<input name="radio-c" type="radio" id="radio-c1" checked>
								<label for="radio-c1">
									<span><b>Pago con todas las tarjetas</b><br>(a través de Mercado Pago)</span>	
								</label>
							</div>
						</div>
					</div>
				</div>

				<table class="table-preview">
					<tr>
						<th>Email</th>
						<td>email@email.com</td>
					</tr>
					<tr>
						<th>Teléfono</th>
						<td>12345678</td>
					</tr>
					<tr>
						<th>Tipo de entrega</th>
						<td>Retiro en sucursal</td>
					</tr>
					<tr>
						<th>Sucursal de Retiro</th>
						<td>Sarmiento</td>
					</tr>
					<tr>
						<th>Forma de pago</th>
						<td>Pago con todas las tarjetas</td>
					</tr>
				</table>

				<div class="input-group input-group--center">
					<button class="button">Siguiente</button>
				</div>

			</div>

			<div class="checkout__box">

				<div class="input-box">

					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">2. Resumen</h2>

					<div class="input-group">
						<div class="input-wrapper">
							<label class="input-label input-label--row">Nombre y apellido</label>
							<input type="text" class="input-text input-text--row" placeholder="Nombre y apellido">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">Nro. Socio Club Natal</label>
							<input type="text" class="input-text input-text--row" placeholder="Nro. Socio Club Natal">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">Domicilio (si requiere envío) (opcional)</label>
							<input type="text" class="input-text input-text--row" placeholder="Domicilio">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">¿Tienes algún comentario?</label>
							<textarea class="input-textarea input-textarea--row" placeholder="Comentario"></textarea>
						</div>
					</div>

					<div class="input-group">
						<h3>Términos y condiciones</h3>
						<div class="input-wrapper">
							<div class="input-checkbox">
								<input type="checkbox" id="checkbox-1">
								<label for="checkbox-1">Acepto los <a href="">Términos y condiciones</a></label>
							</div>
						</div>
					</div>

					<div class="input-group input-group--center">
						<button class="button">Siguiente</button>
					</div>

				</div>

			</div>

			<div class="checkout__box">

				<div class="input-box">

					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">3. Pagar</h2>

				</div>
			</div>

		</div>

		<div class="recetas__col-right">
			
			<div class="checkout__box">
				
				<div class="input-box">
					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">Resumen</h2>
				</div>

				<div class="checkout__cart-list">
					<?php
					$class = 'checkout__cart-item';
					require TD . '/parts/molecules/cart-item.php';
					$class = 'checkout__cart-item';
					require TD . '/parts/molecules/cart-item.php';
					?>
				</div>

				<div class="checkout__subtotal">
					<div class="checkout__subtotal-item">
						<div class="checkout__subtotal-name">Subtotal</div>
						<div class="checkout__subtotal-value">$5000</div>
					</div>
					<div class="checkout__subtotal-item">
						<div class="checkout__subtotal-name">Envio Gratis!</div>
						<div class="checkout__subtotal-value">$0</div>
					</div>
				</div>

				<div class="checkout__total">
					<div class="checkout__total-text">
						<div class="checkout__total-title">Total</div>
						<div class="checkout__total-iva">IVA incluído</div>
					</div>
					<div class="checkout__total-number">$8.500</div>
				</div>

			</div>

		</div>
	</div>
</div>