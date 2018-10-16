<?php
$Types = $_POST['Types'];
$Git = $_POST['Git'];
$Q = $_POST['Q'];
$A = $_POST['A'];
if($_POST['add'])
{
$result =$connect->query("INSERT INTO test(Types,Mark_Git,Q, A) VALUES  ('$Types' ,'$Git','$Q','$A')");
header('Location: /index.php');
exit;
}