<?php $class = ( isset( $class ) ) ? $class : ''; ?>
<div class="footer-top <?php echo $class; ?>">
	<div class="footer-top__inner global-inner">
		<?php
		$class = 'footer-top__logo';
		require TD . '/parts/atoms/logo.php';
		$class = 'footer-top__contact';
		require TD . '/parts/molecules/footer-contact.php';
		$class = 'footer-top__menu';
		require TD . '/parts/molecules/menu-footer.php';
		?>
	</div>
</div>
<?php unset( $class ); ?>