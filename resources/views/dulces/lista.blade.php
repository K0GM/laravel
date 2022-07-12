<!DOCTYPE html>
<html lang="zxx">

<head>	
	<style>
		body {
			margin: auto;
			padding: 50px;
		}
		table, td, th {
			border: 1px solid black;
		}
			table {
			border-collapse: collapse;
			width: 100%;
		}
		th {
			height: 70px;
		}
		td {
			height: 30px;
	}
	.button {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	</style>
</head>

<body class="antialiased">
	
	<h2>Listado de Dulces</h2>

	<table>
		<tr>
			<th>nombre</th>
			<th>categoría</th>
			<th>precio</th>
			<th>caducidad</th>
			<th>Acciones</th>
		</tr>

	@foreach ($dulces as $dulce)
		<tr>
			<td>{{ $dulce->nombre }}</td>
			<td>{{ $dulce->categoría }}</td>
			<td>{{ $dulce->precio }}</td>
			<td>{{ $dulce->caducidad }}</td>
			<td>
				<a href="/dulces/ver/{{$dulce->id}}">Ver</a>
				<a href="/dulces/editar/{{$dulce->id}}">Editar</a>
				<a href="/dulces/eliminar/{{$dulce->id}}" onclick="return eliminarDulces('Eliminar dulces')">Eliminar</a>
			</td>
		</tr>
	@endforeach
	</table>

	<a href="/dulces/crear">Nuevo Dulce</a>
</body>

<script>
	function eliminarDulces(value){
		action = confirm(value) ? true : event.preventDefault()
	}
</script>
</html>