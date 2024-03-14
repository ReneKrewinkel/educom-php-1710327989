<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
<?php
    $txt = "Hello World";
    echo $txt; 
    echo "<br>";

    $x = 10;
    $y = 5;
    $z = 0;
    echo $x + $y;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump($txt);
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";

    $a = $b = $c = "Fruit"; //all three variables are declared as "Fruit"
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;

    function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    function thisTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    thisTest();

    echo "<p>Variable x outside function is: $x</p>";

    function thatTest() {
        global $x, $y, $z;
        $z = $x + $y;
    }
      
    thatTest();
    echo $z; // outputs 15
    echo "<br>";

    function hisTest() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    hisTest();
    echo $z;
    echo "<br>";
    
    function herTest() {
        static $x = 0; //use static to save a local variable
        echo $x;
        $x++;
      }
      
      herTest();
      echo "<br>";
      herTest();
      echo "<br>";
      herTest();
      echo "<br>";
?>
</body>
</html>

