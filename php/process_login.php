<?php 
include('../common/utils.php');
$rol = getValidacion($conn);
if($_POST) {
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM user
		WHERE username='$username'
		AND password=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'name' => $row['name'],
						'type' => $row['type'],
						'username' => $row['username'],
						'password' => $row['password'],
						'id' => $row['id']
					];

					foreach ($rol as $r) {

						# code...
						$tipoRol = $r['type'];
					}


					if ($tipoRol == 'Administrador') {
						# code...
						redirect('../admin.php');
					}elseif ($tipoRol == 'Cliente') {
						# code...
						redirect('../cliente.php');
					}else{
						redirect('../index.php');
					}
					
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}


	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');
}