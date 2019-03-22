<?php
include_once ("func_Conn.php");



$Types = $_POST['Types'];
$Q = mysqli_real_escape_string($connect, $_POST['Q']);
$A = mysqli_real_escape_string($connect, $_POST['A']);
	
	
$sql = "INSERT INTO test(Types,Mark_Git,Q, A) VALUES  ('$Types' , 1, '$Q','$A')";


if (mysqli_query($connect, $sql)) {
header('Location: /index.php');
die();

}
?>


