<?php 

try {
	$db = new PDO('mysql:host=localhost;dbname=db_shop;charset=utf8','root','');

$names = $db->prepare("SELECT * FROM tbl_brand where brandName = ?");
$namess = array('abid','IPHONE','abid');
foreach ($namess as $name) {
	# code...
	
$names->bindValue(1,$name);
$names->execute();

while ($row = $names->fetch(PDO::FETCH_ASSOC)) {
	echo var_dump($row);
	echo "<br>";
}

}


	
} catch (Exception $e) {
	echo $e->getMessage();
}


$n1 = 'abidhai';
for ($i=0; $i < 5; $i++) { 
	# code...
	$n1 = 'fahad';
	echo $n1."<br>";

}

echo $n1;




 ?>