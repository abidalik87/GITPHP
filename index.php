<?php 

include 'thegreat.php';
//include 'namespace.php';
use abid\abid2\coolclass;

$nnn = 1;
//include 'cl.php';

echo "Hello its php oop";
class MakeStatic
{
	public static function Method1()
	{
		echo "MakeStatic";
	}
}

//MakeStatic::Method1();

class MakeOther extends MakeStatic
{
	public $var= "OUT";
	public $name = "abidhaiDo";
	public static function Call()
	{
		self::Method1();


	}

	public static function Method1()
	{
		
		echo "MakeOther";
		//echo $var;
		
	}

	public static  function Nor()
	{
		$var = "IN";
		//$this->var = "Out";
		//echo $this->var;
		echo $var;
	}

	public function A()
	{
		$this->name = "DODODODODD";
		echo "wait";
//		echo $nnn;
		
	}




	
}





//$ab = new out();
//out::abid();
$me = new MakeOther();
$me->A();
echo $me->name;
$me->Call();
$me->Nor();

//$cc = new coolclass();
//$ccc = new \coolclass2();

$a = new A();

echo "<br>";
function arraycall($arr)
{
	for ($i = 0; $i < 2;$i++) {
	
		echo $arr['a']['name'];
	}

	echo $arr['a']['name'];

}
arraycall([ 'a'=>['name'=>'abid']]);
//arraycall([['name'=>'abid'],['name'=>'ali']]);


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="namespace.php">GO!</a>
	<form action="namespace.php" method="post">
		<input type="text" name="n1">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php  ?>
	<h1><?php
	$cool = "cccc1c"; ?></h1>
	<h1>Hello</h1>

</body>
</html>