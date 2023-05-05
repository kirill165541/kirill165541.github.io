<?
include('CProducts.php');
?>

<!DOCTYPE html>
<html>
<head>
	<script src="/js/hidden.js"></script>
	<meta charset="utf-8">
	<title>ТЕСТОВОЕ ЗАДАНИЕ</title>
</head>
<body>




<center><h2>Таблица товаров</h2>
	<table border="1">
   		<tr>
    	<?
    		//CProducts->zap_header();
    		CProducts::zap_header();

    	?>
   		</tr>
	   	<?
    		CProducts::zap_tabl(1000);
	   	?>
  </table>
</center>
</body>
</html>