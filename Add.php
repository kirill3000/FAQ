<?php
include_once ("func_Conn.php");



$Types = $_POST['Types'];
$Q = mysqli_real_escape_string($connect, $_POST['Q']);
$A = mysqli_real_escape_string($connect, $_POST['A']);
	
	
/*$sql = "INSERT INTO test(Types,Mark_Git,Q, A) VALUES  ('$Types' , 1, '$Q','$A')";*/
$sql = "load data infile '/storage/ssd5/668/6959668/public_html/c6.csv' INTO TABLE `t2` FIELDS TERMINATED BY '|' ENCLOSED BY '\"' ESCAPED BY '\\' LINES TERMINATED BY '\n';";

if (mysqli_query($connect, $sql)) {
header('Location: /index.php');
die();

}
?>


