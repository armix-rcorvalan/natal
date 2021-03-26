<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<div class="products-list-heading <?php echo $class; ?>">
	<h3 class="products-list-heading__title"><?php echo $products_list_name; ?></h3>
	<a href="#" class="products-list-heading__more">
		<span class="products-list-heading__more-text">ver todas</span>
		<img src="<?php echo TDU; ?>/images/icon-arrow-right.svg" class="products-list-heading__more-icon">
	</a>
</div>
<?php unset( $class ); ?>