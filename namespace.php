<?php 
namespace abid\abid2;
//header('Location:namespace2.php');

/**
* 
*/
class coolclass
{
	
	function __construct()
	{
		echo "coolclass is here";
	}
}
class coolclass2
{
	
	function __construct()
	{
		echo "coolclass is here";
	}
}

echo $_POST['n1'];


 ?>

 <a href="index.php">BACK</a>

  <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="namespace.php">GO!</a>
	<form action="cl.php" method="post">
		<input type="text" name="n1">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php  ?>
	<h1><?php
	$cool = "cccc1c"; ?></h1>
	<h1>Hello</h1>

</body>
</html>