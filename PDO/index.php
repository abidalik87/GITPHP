<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=db_shop;charset=utf8','root','');
	$names = $db->query("SELECT * FROM tbl_brand");
foreach ($names as $name) {
	# code...
	echo htmlentities($name['brandName']);
	echo '<br>';
}

	
} catch (Exception $e) {
	echo $e->getMessage();
}





 ?>