<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		<div>
			<label>Name</label>
			<input type="text" name="name" required="required">
		</div>
		<div>
			<label>Role</label>
			<select name="type" required="required">
				<option value="">Seleccione...</option>
				<option value="Administrador">Administrador</option>
				<option value="Cliente">Cliente</option>
			</select>
		</div>

		<div>
			<label>Username</label>
			<input type="text" name="username" required="required">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password1" required="required">
		</div>

		<div>
			<label>Confirmar Contraseña</label>
			<input type="password" name="password2" required="required">
		</div>
		<div>
			<button>Registrarme!</button>
		</div>

		<div>
			<a href="index.php">Salir</a>
		</div>
	</form>
</body>
</html>