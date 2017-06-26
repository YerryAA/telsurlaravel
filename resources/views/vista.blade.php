<h1>Hola PDF</h1>

<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
		</tr>
	</thead>
	<tbody>
		@foreach($empleados as $emp)
		<tr>
			<td>{{ $emp->idempleado}}</td>
			<td>{{ $emp->empleado_nombre}}</td>
		</tr>

		@endforeach
	</tbody>
</table>