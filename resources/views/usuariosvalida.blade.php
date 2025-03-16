<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enviar usuario</title>
</head>

<body>
	<h1>Enviar usuario</h1>
	<form action="{{route('usuarios.store')}}" method="post">
		@csrf
		<label for="name">Nombre:</label>
		<input type="text" name="name" id="name">
		<br>

		<label for="email">Email:</label>
		<input type="text" name="email" id="email">
		<br>

		<button type="submit">Crear usuario</button>
	</form>
	<script>
	document.querySelector('form').addEventListener('submit', function(event) {
		let name = document.getElementById('name').value.trim();
		let email = document.getElementById('email').value.trim();

		if (name === "" || email === "") {
			console.log("Los campos name y email son obligatorios.")
			event.preventDefault();
		}
	})
	</script>
</body>

</html>