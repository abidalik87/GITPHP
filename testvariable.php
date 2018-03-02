<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		if(isset($_POST['submit']))
		{

			echo $_POST["se"];
		}
	}

	 ?>
	
<form action="" method="post">
<select name ="se">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<input type="submit" name="submit" value="submit">
</form>


</body>
</html>


<?php 

/**
* 
*/
class Main
{
	public $flag = true;
	function MA()
	{
		
		//$this->flag = !$this->flag;
		$val1 = "ABID";
		$val2 = "A";
		if ($val2 == "A") {
			$val3 = "B";
			echo "EQUAL" ;
			
		}
		if(!$this->flag)
		{
			echo $this->flag;
			echo "true";
		}


		echo $val3;
	}	

}

$obj = new Main();
$obj->MA();
 ?>