<div class="shortcuts shortcuts--count-<?php echo count( $shortcuts['items'] ); ?>">
	<div class="shortcuts__inner global-inner">
		<?php foreach ( $shortcuts['items'] as $item ) : ?>
			<?php $class = 'shortcuts__item'; ?>
			<?php require TD . '/parts/molecules/shortcuts-item.php'; ?>
		<?php endforeach ?>
	</div>
</div>
<?php unset( $shortcuts ); ?>
