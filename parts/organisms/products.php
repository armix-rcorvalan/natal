<div class="products">
	<div class="products__inner global-inner">
		<div class="products__mobile">
			<?php require TD . '/parts/molecules/products-mobile.php'; ?>
		</div>
		<div class="products__bar">
			<?php require TD . '/parts/molecules/products-bar.php'; ?>
		</div>
		<div class="products__sidebar">
			<div class="products__filter-button-wrapper products__filter-button-wrapper--top">
				<a href="" class="products__apply-filter button button--white">Aplicar Filtros</a>
			</div>
			<?php require TD . '/parts/molecules/products-filters.php'; ?>
			<div class="products__filter-button-wrapper products__filter-button-wrapper--bottom">
				<a href="" class="products__apply-filter button">Aplicar Filtros</a>
			</div>
		</div>
		<div class="products__content">
			<?php require TD . '/parts/organisms/products-loop.php'; ?>
			<div class="products__more">
				<a href="#" class="button button--large button--wide">Ver Más</a>
			</div>
		</div>
	</div>
</div>