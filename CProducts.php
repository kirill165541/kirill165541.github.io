<?
class CProducts
{
	public function zap_tabl($ogr_vivod)
	{
		include('config.php');
		
		$results=mysqli_query($link,"SELECT DATE_CREATE, hidd,	ID,	PRODUCT_ARTICLE,	PRODUCT_ID,	PRODUCT_NAME,	PRODUCT_PRICE,	PRODUCT_QUANTITY FROM `products` where hidd<>0  ORDER BY `products`.`DATE_CREATE` ASC limit ".$ogr_vivod);
		while($rows=mysqli_fetch_array($results))
		{
	    	echo "<tr>";
			$result=mysqli_query($link,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'products' AND TABLE_NAME = 'products'; ");
			while($row=mysqli_fetch_array($result))
			{			
			    echo "<td>";
			    echo $rows[$row['COLUMN_NAME']];
				if ('PRODUCT_QUANTITY' == $row['COLUMN_NAME']) 
				{
					echo "\t<button onclick='countss(".$rows['ID'].", \"+\");'>+</button>";
					echo "<button onclick='countss_(".$rows['ID'].", \"-\");'>-</button>";
				}
				echo "</td>";
			}
			echo "<td>";
			echo "<button onclick='hidd_tovar(".$rows['ID'].");'>Скрыть</button>";
			echo "</td>";
			echo "</tr>";
		}
		mysqli_close($link);
	}


	public function zap_header()
	{
		include('config.php');
		$result=mysqli_query($link,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'products' AND TABLE_NAME = 'products';");
		while($row=mysqli_fetch_array($result))
		{			
		    echo "<th>";
		    echo $row['COLUMN_NAME'];
			echo "</th>";
		}
		mysqli_close($link);
	}
}
?>