<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mostrar usuarios</title>
</head>

<body>
	<h1>Usuarios</h1>
	<ul>
		@foreach ($usuarios as $usuario)
		<li>{{$usuario->name}}</li>
		@endforeach
	</ul>
</body>

</html>