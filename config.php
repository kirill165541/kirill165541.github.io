<?
$host = '127.0.0.1';
$name = 'mysql';
$password = 'mysql';
$db_name = 'products';

$link = mysqli_connect($host, $name, $password, $db_name);
if (!$link) {
	    die('Ошибка соединения: ' . mysql_error());
	}
?>