<?php
$family=array('name'=>"Fred");
print_r($family) ;

$family[]="Wilma";
print_r($family) ;
echo "br";
echo $family[0];
echo "<br>";

echo count($family);


 $paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;
foreach ($paper as $item)
{
    echo "$j: $item<br>";
    ++$j;
}
?>
