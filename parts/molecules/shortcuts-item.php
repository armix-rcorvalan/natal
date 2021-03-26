<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<a href="#" class="shortcuts-item <?php echo $class; ?> shortcuts-item--style-<?php echo $shortcuts['style']; ?>">
	<img src="<?php echo TDU . '/images/' . $item['icon']; ?>" class="shortcuts-item__icon">
	<span class="shortcuts-item__text-content">
		<h3 class="shortcuts-item__title"><?php echo $item['title']; ?></h3>
		<?php if ( isset( $item['content'] ) && $item['content'] ) : ?>
		<p class="shortcuts-item__content"><?php echo $item['content']; ?></p>
		<?php endif; ?>
	</span>
</a>
<?php unset( $class ); ?>
