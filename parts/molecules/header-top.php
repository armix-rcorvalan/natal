<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<div class="header-top <?php echo $class; ?>">
	<div class="header-top__inner global-inner">
		<?php
		$class = 'header-top__logo';
		require TD . '/parts/atoms/logo.php';
		$class = 'header-top__iso';
		require TD . '/parts/atoms/iso.php';
		$class = 'header-top__search-form';
		require TD . '/parts/molecules/search-form.php';
		?>
		<div class="header-top__button-prescription">
			<a href="#" class="header-top__button button">Recetas</a>
		</div>
		<div class="header-top__button-store">
			<a href="#" class="header-top__button button">Tienda Online</a>
		</div>
		<?php
		$class = 'header-top__cart-icon';
		require TD . '/parts/atoms/cart-icon.php';
		$class = 'header-top__menu-icon';
		require TD . '/parts/atoms/menu-icon.php';
		?>
	</div>
</div>
<?php unset( $class ); ?>