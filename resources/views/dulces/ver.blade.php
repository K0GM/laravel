<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="antialiased">
	<a href="/dulces">Ver listado de dulces</a>
	<h2>Ver dulces<h2>
	<div>
		<p> Nombre: {{ $dulces->nombre}}</p>
		<p> Categoría: {{ $dulces->categoría}}</p>
		<p> Precio: {{ $dulces->precio}}</p>
		<p> Caducidad: {{ $dulces->caducidad}}</p>
</body>
</html>