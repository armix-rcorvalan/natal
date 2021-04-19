<?php
define( 'TD', __DIR__ );
if ( substr( $_SERVER['HTTP_HOST'], 0, 9 ) === 'localhost' ) {
	define( 'TDU', '//localhost/natal' );
} else {
	define( 'TDU', '//armix.com.ar/staging/natal' );
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Farmacias Natal</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>
<?php require TD . '/parts/organisms/header.php'; ?>