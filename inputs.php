<?php require 'head.php'; ?>

<div class="inputs">
	<div class="inputs__inner global-inner">

		<input type="text" class="input-text" placeholder="Nombre">
		<input type="text" class="input-text input-text--large" placeholder="Nombre">
		
		<input type="email" class="input-text" placeholder="Email">
		<input type="email" class="input-text input-text--large" placeholder="Email">
		
		<input type="phone" class="input-text" placeholder="Teléfono">
		<input type="phone" class="input-text input-text--large" placeholder="Teléfono">
		
		<input type="phone" class="input-text" placeholder="Disabled" disabled>
		<input type="phone" class="input-text input-text--large" placeholder="Disabled" disabled>

		<textarea class="input-textarea" placeholder="Textarea"></textarea>
		<textarea class="input-textarea input-text--large" placeholder="Textarea"></textarea>

		<input type="number" class="input-number" value="1">
		<input type="number" class="input-number input-text--large" value="1">

		
		<select class="input-select">
			<option value="1">Opcion 1</option>
			<option value="2">Opcion 2</option>
			<option value="3">Opcion 3</option>
		</select>

		<select class="input-select input-select--large">
			<option value="1">Opcion 1</option>
			<option value="2">Opcion 2</option>
			<option value="3">Opcion 3</option>
		</select>

		<div>
			<div class="input-checkbox">
				<input type="checkbox" id="checkbox-1">
				<label for="checkbox-1">Square</label>
			</div>
			<div class="input-checkbox">
				<input type="checkbox" id="checkbox-2" checked>
				<label for="checkbox-2">Square Checked</label>
			</div>
			<div class="input-checkbox">
				<input type="checkbox" id="checkbox-3" disabled>
				<label for="checkbox-3">Square Disabled</label>
			</div>
		</div>

		<div>
			<div class="input-checkbox input-checkbox--circle">
				<input type="checkbox" id="checkbox-4">
				<label for="checkbox-4">Circle</label>
			</div>
			<div class="input-checkbox input-checkbox--circle">
				<input type="checkbox" id="checkbox-5" checked>
				<label for="checkbox-5">Circle Checked</label>
			</div>
			<div class="input-checkbox input-checkbox--circle">
				<input type="checkbox" id="checkbox-6" disabled>
				<label for="checkbox-6">Circle Disabled</label>
			</div>
		</div>

		<div>
			<div class="input-radio">
				<input name="radio-a" type="radio" id="radio-1" checked>
				<label for="radio-1">Radio 1</label>
			</div>
			<div class="input-radio">
				<input name="radio-a" type="radio" id="radio-2">
				<label for="radio-2">Radio 2</label>
			</div>
			<div class="input-radio">
				<input name="radio-a" type="radio" id="radio-3">
				<label for="radio-3">Radio 3</label>
			</div>
		</div>

		<div class="input-range">
			<input class="input-range__input" type="hidden" value="25,75">
			<div class="input-range__ranges">
				<div class="input-range__range">
					<div class="input-range__range-text">desde</div>
					<div class="input-range__range-value">$1500</div>
				</div>
				<div class="input-range__range">
					<div class="input-range__range-text">hasta</div>
					<div class="input-range__range-value">$5000</div>
				</div>
			</div>
		</div>

		<div class="tags">
			<a href="#" class="tag">Bebé</a>
			<a href="#" class="tag">Pañales</a>
			<a href="#" class="tag">Pampers</a>
			<a href="#" class="tag">Huggies</a>
			<a href="#" class="tag">Otro 1</a>
			<a href="#" class="tag">Otro 2</a>
		</div>

	</div>
</div>

<?php require 'foot.php'; ?>
