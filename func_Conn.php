<?php
$host = 'localhost';
$db_name = 'id6959668_bd';
$db_user = 'id6959668_kiril';
$db_pass = '12345678';

$connect = new mysqli($host , $db_user, $db_pass, $db_name );
$connect->query("SET NAMES 'utf8' ");