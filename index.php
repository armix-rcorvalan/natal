<?php
require 'head.php';

require TD . '/parts/organisms/home-slider.php';

$shortcuts = array(
	'style' => 1,
	'items' => array(
		array(
			'title'   => 'Recetas',
			'content' => 'Cotizá tus recetas con nosotros. Explicado paso a paso.',
			'icon'    => 'icon-recetas.svg',
		),
		array(
			'title'   => 'Categorías',
			'content' => 'Buscá nuestros productos por categoría.',
			'icon'    => 'icon-cat.svg',
		),
	),
);
require TD . '/parts/organisms/shortcuts.php';

$products_list_name   = 'Ofertas';
$products_list_button = 'Ver más ofertas';

$products_list = array(
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort Sec Mediano 8 unidades mas contenido',
		'badge'   => 'red',
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => false,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
);
require TD . '/parts/organisms/products-list.php';

require TD . '/parts/organisms/banner-club-natal.php';

$shortcuts = array(
	'style' => 2,
	'items' => array(
		array(
			'title' => 'Bebé',
			'icon'  => 'icon-bebe.svg',
		),
		array(
			'title' => 'Maquillaje',
			'icon'  => 'icon-maquillaje.svg',
		),
		array(
			'title' => 'Cuidado Personal',
			'icon'  => 'icon-cuidado.svg',
		),
	),
);
require TD . '/parts/organisms/shortcuts.php';



$products_list_name   = 'Destacados';
$products_list_button = 'Ir a la tienda';

$products_list = array(
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort Sec Mediano 8 unidades mas contenido',
		'badge'   => 'red',
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => false,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort Sec Mediano 8 unidades mas contenido',
		'badge'   => 'red',
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers Confort',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => true,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
	array(
		'image'   => 'products-example.png',
		'title'   => 'Pañales Pampers',
		'badge'   => false,
		'offer'   => '$2.500',
		'regular' => '$2.750',
	),
);
require TD . '/parts/organisms/products-list.php';



require 'foot.php';
