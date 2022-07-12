<!DOCTYPE html>
<html lang="zxx">

<head>	
	<style>
		body {
			margin: auto;
			padding: 50px;
		}
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
	</style>
</head>

<body class="antialiased">

	<a href="/dulces">Ver listado de dulces</a>

	<h2>Nuevo dulce</h2>

	<form action="/dulces/crear" method ="POST">
		@csrf
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Su nombre">
		<label>Categoría:</label>
		<input type="text" name="categoría" placeholder="Categoría">
		<label>Precio:</label>
		<input type="text" name="precio" placeholder="$">
		<label>Caducidad:</label>
		<input type="text" name="caducidad" placeholder="Caducidad">
		<input type="submit" value="Guardar">
	</form>
</body>
</html>

























