<html>

<body>

<h2>NULL</h2>
<?php
$x="Hello world!";
$x=null;
var_dump($x);
?>
<hr>


<h2>Object</h2>
<?php
class Dog
{
  var $color;
  function Dog($color="white") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}
var_dump(new Dog())
?>
<hr>

<h2>Array</h2>
<?php 
$letters=array("AAA","BBB","CCC");
var_dump($letters);
?>
<hr>

<h2>Boolean</h2>
<?php 
$x=true;
var_dump($x);
$y=false;
var_dump($y);
?>
<hr>

<h2>Float</h2>
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>

<hr>
<h2>Integer</h2>
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>
<hr>

<h2>String</h2>
<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
print $x;
?>
<hr />

</body>
</html>