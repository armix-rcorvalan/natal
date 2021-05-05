<div class="cart">
	<div class="cart__inner global-inner">
		<h4 class="cart__title">Resumen</h4>
		<div class="cart__list">
			<?php
			$class = 'cart__item cart-item--grow'; 
			require TD . '/parts/molecules/cart-item.php';
			$class = 'cart__item cart-item--grow'; 
			require TD . '/parts/molecules/cart-item.php';
			?>
		</div>
		<div class="cart__total">
			<div class="cart__total-text">
				<div class="cart__total-title">Total</div>
				<div class="cart__total-iva">IVA incluído</div>
			</div>
			<div class="cart__total-number">$8.500</div>
		</div>
		<div class="cart__continue">
			<a href="" class="button cart__continue-button">CONTINUAR CON LA COMPRA</a>
			<div class="cart__legend">
				<img src="<?php echo TDU; ?>/images/icon-legend.svg" class="cart__legend-icon">
				<span class="cart__legend-text">Medios de pagos y cuotas. Ver <a href="">Promociones bancarias</a>.</span>
			</div>
		</div>
	</div>
</div>