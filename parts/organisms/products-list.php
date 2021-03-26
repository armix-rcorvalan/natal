<div class="products-list">
	<div class="products-list__inner global-inner">
		<?php $class = 'products-list__heading'; ?>
		<?php require TD . '/parts/molecules/products-list-heading.php'; ?>
		<div class="products-list__grid">
			<?php
			foreach ( $products_list as $product ) {
				require TD . '/parts/molecules/products-item.php';
			}
			?>
		</div>
		<div class="products-list__button-wrapper">
			<a href="#" class="products-list__button button button--large"><?php echo $products_list_button; ?></a>
		</div>
	</div>
</div>
