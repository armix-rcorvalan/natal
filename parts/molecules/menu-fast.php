<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<nav class="menu-fast <?php echo $class; ?>">
	<ul class="menu-fast__list">
		<li class="menu-fast__item">
			<a href="#" class="menu-fast__link">Item 1</a>
		</li>
		<li class="menu-fast__item">
			<a href="#" class="menu-fast__link">Item 2</a>
		</li>
		<li class="menu-fast__item">
			<a href="#" class="menu-fast__link">Item 3</a>
		</li>
		<li class="menu-fast__item">
			<a href="#" class="menu-fast__link">Item 4</a>
		</li>
		<li class="menu-fast__item">
			<a href="#" class="menu-fast__link">Item 5</a>
		</li>
	</ul>
</nav>
<?php unset( $class ); ?>