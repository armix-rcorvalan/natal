<?php
require 'head.php';
require TD . '/parts/organisms/products-single.php';

$products_list_name   = 'También puede interesarte';
$products_list_button = 'Ver todos';

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

require 'foot.php';
