<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<nav class="menu-categories menu <?php echo $class; ?>">
	<ul class="menu__list">
		<li class="menu__item">
			<a href="#" class="menu__link">Item 1</a>
		</li>
		<li class="menu__item">
			<a href="#" class="menu__link">Item 2</a>
		</li>
		<li class="menu__item">
			<a href="#" class="menu__link">Item 3</a>
		</li>
		<li class="menu__item">
			<a href="#" class="menu__link">Item 4</a>
		</li>
		<li class="menu__item">
			<a href="#" class="menu__link">Item 5</a>
		</li>
	</ul>
</nav>
<?php unset( $class ); ?>