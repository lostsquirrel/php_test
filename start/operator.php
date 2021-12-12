<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>






<h2>Array Operator</h2>
<?php
$x = array("a" => "apple", "b" => "banana"); 
$y = array("c" => "orange", "d" => "peach"); 
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
?>
<hr>


    
<h2>Compare Operator</h2>
<?php
$x=17; 
$y="17";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=17;
$b=8;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
<hr>



<h2>++-- </h2>
<?php
$x=17; 
echo ++$x; // 输出 18
echo "<br />";
$y=17; 
echo $y++; // 输出 17
echo "<br />";
$z=17;
echo --$z; // 输出 16
echo "<br />";
$i=17;
echo $i--; // 输出 17
?>
<hr>


<h2>string concat </h2>
<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出 Hello world!
echo "<br />";

$x="Hello";
$x .= " world!";
echo $x; // 输出 Hello world!
?>
<hr>



<h2>Assign</h2>
<?php 
$x=17; 
echo "{$x} =";
echo $x; // 输出 17
echo "<br />";
$y=17; 
$y += 8;
echo $y; // 输出 25
echo "<br />";
$z=17;
$z -= 8;
echo $z; // 输出 9
echo "<br />";
$i=17;
$i *= 8;
echo $i; // 输出 136
echo "<br />";
$j=17;
$j /= 8;
echo $j; // 输出 2.125
echo "<br />";
$k=17;
$k %= 8;
echo $k; // 输出 1
?>
<hr>


<h2>Math Operator</h2>
<?php 
$x=17; 
$y=8;
echo "{$x} + {$y} = " . ($x + $y); // 输出 25
echo "<br />";
echo "{$x} - {$y} = " . ($x - $y); // 输出 9
echo "<br />";
echo "{$x} * {$y} = " . ($x * $y); // 输出 136
echo "<br />";
echo "{$x} / {$y} = " . ($x / $y); // 输出 2.125
echo "<br />";
echo "{$x} % {$y} = " . ($x % $y); // 输出 1
?>
<hr>

</body>
</html>