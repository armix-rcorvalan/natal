<div class="home-slider">
	<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
	<div class="home-slider__slide">
		<picture class="home-slider__picture">
			<source srcset="images/home-slider-l.jpg" media="(min-width: 1280px)">
			<source srcset="images/home-slider-m.jpg" media="(min-width: 640px)">
			<img src="images/home-slider-s.jpg" class="home-slider__image" />
		</picture>
	</div>
	<?php endfor; ?>
</div>