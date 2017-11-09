<?php
//array values
$sortvalue = array("7", "4", "5","4","8", "10");
//sorting function in php, here used reverse sort
rsort($sortvalue);
//used to count the value of array
$arraylength = count($sortvalue);

//condition loop runs until the value of $i is less than the arraylength
for($i=0;$i<$arraylength;$i++)
{
   //print the sorted value in screen
    echo $sortvalue[$i];
    echo"</br>";
}

//just echo-ing the value in the screen
echo 'the following the array' .$arraylength. 'this';

?>
