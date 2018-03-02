<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=db_shop;charset=utf8','root','');

$names = $db->prepare("SELECT * FROM tbl_brand where brandName = :fname");
$namess = array('abid','IPHONE','abid');
foreach ($namess as $name) {
	# code...
	
$names->bindValue(':fname',$name,PDO::PARAM_BOOL);
$names->execute();

while ($row = $names->fetch(PDO::FETCH_ASSOC)) {
	echo var_dump($row);
	echo "<br>";
}

}


	
} catch (Exception $e) {
	echo $e->getMessage();
}





 ?>