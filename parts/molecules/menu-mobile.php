<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<nav class="menu-mobile menu <?php echo $class; ?>">
	<ul class="menu__list">
		<?php for ( $i = 1; $i < 10; $i++ ) : ?>
		<li class="menu__item">
			<a href="#" class="menu__link">Item <?php echo $i; ?></a>
		</li>
		<?php endfor; ?>
	</ul>
</nav>
<?php unset( $class ); ?>
