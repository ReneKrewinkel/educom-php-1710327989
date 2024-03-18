<?php
// pre- and post increments
$x = 10;
$y = 10;	
echo ++$x;
echo "<br/>";
echo $y++;
echo "<br/>";

// comparisons
$a = 10;
$b = 15;
$c = 10;
$d = "10";

echo var_dump($a === $d);
echo "<br/>";
echo $a <=> $b;
echo "<br/>";
echo $a <=> $c;
echo "<br/>";
echo $b <=> $c;
echo "<br/>";

// Stongs operators
$txt1 = "Hello";
$txt2 = " World";
$txt3 = "Hello";

echo $txt1.$txt2;
echo "<br/>";
$txt3.= $txt2;
echo $txt3;
echo "<br/>";
?>