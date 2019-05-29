<?php 
include('../common/utils.php');
$rol = getValidacion($conn);

if($_POST) {
	if (isset($_POST['name']) && isset($_POST['price']) && !empty($_POST['name']) && !empty($_POST['price'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];


		foreach ($rol as $r) {
			# code...
			$idCliente =$r['id'];

		}

		$sql_insert = "INSERT INTO productos
		(name, price)
		VALUES ('$name','$price')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../admin.php');
		}
	} else {
		redirect('../admin.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../admin.php');
}