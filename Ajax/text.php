<?php 


define("host", "localhost");
define("name", "root");
define("password", "");
define("database", "db_shop");
define("id", $_POST['e']);


class database2
{
	public $host = host;
	public $name = name;
	public $password = password;
	public $database = database;
	public $id = id;
	public $con;
	function getconn()
	{
		$result = $this->con = new mysqli($this->host,$this->name,$this->password,$this->database);
		$query = $result->query("SELECT * FROM tbl_brand where brandId = '$this->id'");
		if(!$result)
		{
			echo "Unable to connect";
		}
		else
		{
			return $query;
		}

	}
}

$var = new database2();
$value = $var->getconn();

while ($v = $value->fetch_assoc()) {
	echo "<li>".$v['brandName']."</li>";
}






 ?>