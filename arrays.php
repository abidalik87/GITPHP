 
<?php 


// giving names to arrays will leads you to not giving permisson to use the index ex:0 , 1 ,2 
$toys = array(
array("Mechanical Cars","pull back"),
array("Jigsaw","puzzles"),
array("name"=>"HiTech Cars","category"=>"remote"),
array("name"=>"Teddy Bears","category"=>"soft"),
array("name"=>"Baby pillow","category"=>"soft"),
array("name"=>"Chinese Checker","category"=>"puzzles"),
array("name"=>"Jumbo Helicopter","category"=>"remote"));
$a = array(1);
//$a[0] = 2;
//$a[1] = 3;

echo $a[0];


$toy = array(array(array(array('ABID','FA')),
	array('FAHAD')),array(array('ABID2')));


$arr  = array('a1' => array('abidali'));
$arr[0] = "aaa00";
$arr2  = ['a1'=>['a2'=>'abidalikhan']];


//echo $arr.length();
echo $arr[0];
echo $arr['a1'][0]."<br/>";

echo $toy[0][0][0][1][1];
echo $toys[2]["category"];
//echo $toys['name'][];

$array = [2];
$array[0]="B";
$array[1]="A";
echo $array[0];
echo $array[1];
echo $array[2];

$shop = array(array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   )
             );



echo "<ul>";
for ( $layer = 0; $layer < 3; $layer++ )
{
    echo "<li>The layer number $layer";
    echo "<ul>";
   
    for ( $row = 0; $row < 3; $row++ ) 
    {
       echo "<li>The row number $row";
       echo "<ul>";
     
        for ( $col = 0; $col < 3; $col++ )
        {
            echo "<li>".$shop[$layer][$row][$col]."</li>";
        } 
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}   
echo "</ul>";

echo var_dump($shop);

 ?>