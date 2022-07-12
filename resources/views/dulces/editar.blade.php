<!DOCTYPE html>
<html lang="zxx">

<head>	
	
</head>

<body class="antialiased">
	<form action="/dulces/editar/{{ $dulces->id}}" method ="POST">
		@csrf
		{{ method_field('PUT') }}
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Su nombre" value="{{ $dulces->nombre}}">
		<label>Categoría:</label>
		<input type="text" name="categoría" placeholder="Su categoría" value="{{ $dulces->categoría}}">
		<label>Precio:</label>
		<input type="text" name="precio" placeholder="Su precio" value="{{ $dulces->precio}}">
		<label>Caducidad:</label>
		<input type="text" name="caducidad" placeholder="Su caducidad" value="{{ $dulces->caducidad}}">
		<input type="submit" value="Guardar">
	</form>
</body>
</html>