<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<form action="" class="search-form <?php echo $class; ?>">
	<div class="search-form__wrapper">
		<input type="search" class="search-form__input" placeholder="¿Qué estás buscando?" />
		<button type="submit" class="search-form__submit">
			<img src="<?php echo TDU; ?>/images/icon-search.svg" class="search-form__icon-search">
		</button>
	</div>
</form>
<?php unset( $class ); ?>