<div class="recetas">
	<div class="recetas__inner global-inner">

		<div class="recetas__col-left">

			<div class="recetas__box">

				<div class="input-box">

					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">1. Receta</h2>

					<p>Cargar la foto de la receta que deseas cotizar. Asegúrate de que todos los datos sean visibles, incluyendo el sello del médico. La foto debe ser de la receta completa, incluyendo el membrete de la misma</p>

					<div class="input-group">
						<a href="" class="input-upload">
							<img src="<?php echo TDU; ?>/images/camera.svg">
							<span>Arrastrá o hacé click para cargar la foto (JPG o PDF)</span>
						</a>
						<a href="" class="input-upload">
							<img src="<?php echo TDU; ?>/images/camera.svg">
							<span>file.png</span>
							<span>(Click para borrar)</span>
						</a>
					</div>

					<div class="input-group input-group--center">
						<button class="button">Siguiente</button>
					</div>

				</div>

			</div>

			<div class="recetas__box">

				<div class="input-box">

					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow"> 2. Carnet</h2>

					<p>Cargar la foto del carnet de socio de la Obra Social o Prepaga que corresponda a la receta. Asegúrate que todos los datos sean visibles, incluyendo el nro. de socio, plan y vencimiento. Esto servirá para aplicar los descuentos correspondientes.</p>

					<div class="input-group">
						<a href="" class="input-upload">
							<img src="<?php echo TDU; ?>/images/camera.svg">
							<span>Arrastrá o hacé click para cargar la foto (JPG o PDF)</span>
						</a>
						<a href="" class="input-upload">
							<img src="<?php echo TDU; ?>/images/camera.svg">
							<span>file.png</span>
							<span>(Click para borrar)</span>
						</a>
					</div>

					<div class="input-group input-group--center">
						<button class="button">Siguiente</button>
					</div>

				</div>

			</div>

			<div class="recetas__box">

				<div class="input-box">
					
					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow"> 3. Datos de Contacto</h2>

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
						<button class="button" disabled="disabled">Siguiente</button>
					</div>

				</div>
			</div>

			<div class="recetas__box">

				<div class="input-box">
					
					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow"> 4. Resumen</h2>

					<div class="input-group">
						<div class="input-wrapper">
							<label class="input-label input-label--row">Nombre y Apellido</label>
							<input type="text" class="input-text input-text--row" placeholder="Nombre y Apellido">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">Nro Socio Club Natal</label>
							<input type="text" class="input-text input-text--row" placeholder="Nro Socio Club Natal">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">Domicilio</label>
							<input type="text" class="input-text input-text--row" placeholder="Domicilio">
						</div>
						<div class="input-wrapper">
							<label class="input-label input-label--row">¿Tienes algún comentario?</label>
							<textarea class="input-textarea input-textarea--row" placeholder="Textarea">¿Tienes algún comentario?</textarea>
						</div>

					</div>

					<div class="input-group">
						<h3>Términos y condiciones</h3>
						<div class="input-wrapper">
							<div class="input-checkbox">
								<input type="checkbox" id="checkbox-1">
								<label for="checkbox-1">Acepto los Términos y condiciones</label>
							</div>
						</div>
					</div>

					<div class="input-group input-group--center">
						<button class="button" disabled="disabled">Siguiente</button>
					</div>

				</div>
			</div>

		</div>

		<div class="recetas__col-right">
			<div class="recetas__box box">
				<div class="recetas__steps-title">
					<h2><img src="<?php echo TDU; ?>/images/accordion-arrow-blue.png" class="arrow arrow--open">Paso a Paso</h2>
				</div>
				<div class="recetas__steps">
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-3.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>Toma fotos de la receta a cotizar y el carnet de socio de la Obra Social o Prepaga, luego cárgalas en el recuadro correspondiente</p>
						</div>
					</div>
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-5.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>Completa los datos de contacto</p>
						</div>
					</div>
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-2.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>Escoge la sucursal de retiro</p>
						</div>
					</div>
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-4.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>Recibirás un email donde se te informará que nuestros representantes están cotizando tu compra.</p>
						</div>
					</div>
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-4.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>En un nuevo email recibirás la cotización de la receta junto con la opción de CONFIRMAR o ANULAR la compra.</p>
						</div>
					</div>
					<div class="recetas__step">
						<div class="recetas__step-left">
							<img src="<?php echo TDU; ?>/images/icon-recetas-2.svg" class="recetas__step-icon">
						</div>
						<div class="recetas__step-right">
							<p>Si confirmas la compra, se informará mediante un email el día y la hora para que retires tu compra. Nuestro personal te esperará con tu compra lista en la sucursal seleccionada. Muestra tu receta, pagas y listo. Así de fácil!</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
