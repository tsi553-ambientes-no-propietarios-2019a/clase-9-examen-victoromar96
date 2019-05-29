<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['name'])  && isset($_POST['type']) && isset($_POST['username']) && isset($_POST['password1'])  && isset($_POST['password2'])  &&  !empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['username']) &&  !empty($_POST['password1']) && !empty($_POST['password2']) && ($_POST['password1']==$_POST['password2'])) {
		$name = $_POST['name'];
		$type = $_POST['type'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		$sql_insert = "INSERT INTO user
		( name,type,username, password)
		VALUES ('$name','$type','$username', MD5('$password'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registro.php');
}