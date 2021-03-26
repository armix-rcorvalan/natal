<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<div class="header-bottom <?php echo $class; ?>">
	<div class="header-bottom__inner global-inner">
		<?php
		$class = 'header-bottom__categories-icon';
		require TD . '/parts/atoms/categories-icon.php';
		$class = 'header-bottom__menu-categories';
		require TD . '/parts/molecules/menu-categories.php';
		$class = 'header-bottom__menu-fast';
		require TD . '/parts/molecules/menu-fast.php';
		$class = 'header-bottom__club-icon-text';
		require TD . '/parts/atoms/club-icon-text.php';
		$class = 'header-bottom__cart-icon-text';
		require TD . '/parts/atoms/cart-icon-text.php';
		?>
	</div>
</div>
<?php unset( $class ); ?>
