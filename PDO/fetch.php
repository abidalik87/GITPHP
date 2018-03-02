<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=db_shop;charset=utf8','root','');
	$names = $db->query("SELECT * FROM tbl_brand");
	//$row = $names->fetchall();
while ($row = $names->fetch(PDO::FETCH_ASSOC)) {
	echo $row['brandName'];
}

	
} catch (Exception $e) {
	echo $e->getMessage();
}





 ?>