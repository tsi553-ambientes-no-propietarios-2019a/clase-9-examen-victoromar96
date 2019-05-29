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
	<title>Admin</title>
</head>
<body>
	<h1>Registro de Productos</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_newProduct.php" method="post">
		<div>
			<label>Nombre de Producto</label>
			<input type="text" name="name" required="required">
		</div>
		<div>
			<label>Precio por Unidad</label>
			<input type="numeric" name="price" required="required">
		</div>
		<div>
			<button>Registrar</button>

		</div>
	</form>


	<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>
	</table>

	<table>
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Total a pagar</th>
			</tr>
		</thead>

	</table>

	<a href="index.php">Salir</a>

</body>
</html>