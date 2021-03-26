<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<a href="#" class="products-item <?php echo $class; ?>">
	<span class="products-item__top">
		<img src="<?php echo TDU; ?>/images/<?php echo $product['image']; ?>" class="products-item__image" />
		<?php if ( $product['badge'] ) : ?>
		<span class="products-item__badge <?php if ( 'red' === $product['badge'] ) : ?>products-item__badge--red<?php endif; ?>">-30%</span>
		<?php endif; ?>
	</span>
	<span class="products-item__middle">
		<h4 class="products-item__title"><?php echo $product['title']; ?></h4>
	</span>
	<span class="products-item__bottom">
		<span class="products-item__price">
			<span class="products-item__price-offer"><?php echo $product['offer']; ?></span>
			<span class="products-item__price-regular"><?php echo $product['regular']; ?></span>
		</span>
	</span>
</a>
<?php unset( $class ); ?>