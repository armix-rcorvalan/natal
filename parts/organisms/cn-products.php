<div class="cn-products">
	<div class="cn-products__inner global-inner">
		<?php require TD . '/parts/molecules/cn-menu.php'; ?>
		<?php require TD . '/parts/molecules/cn-filter-bar.php'; ?>
		<div class="cn-products__loop">
			<?php
			for ( $i = 1; $i <= 12; $i++ ) {
				require TD . '/parts/molecules/cn-products-item.php';
			}
			?>
		</div>
		<nav class="cn-products__pagination pagination">
			<ul class="pagination__list">
				<li class="pagination__item pagination__item--active">
					<a href="#" class="pagination__link">1</a>
				</li>
				<li class="pagination__item">
					<a href="#" class="pagination__link">2</a>
				</li>
				<li class="pagination__item pagination__item--dots">...</li>
				<li class="pagination__item">
					<a href="#" class="pagination__link">5</a>
				</li>
				<li class="pagination__item">
					<a href="#" class="pagination__link">6</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
