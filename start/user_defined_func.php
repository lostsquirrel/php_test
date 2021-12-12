<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    
<h2>Simple Function</h2>
<?php
function sayHi() {
  echo "Hello world!";
}

sayhi(); // 调用函数
?>
<hr>

<h2>Function parameter</h2>
<?php
function familyName($fname) {
  echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");
?>
<hr>
<h2>Multiply parameters</h2>
<?php
function nameAndBirthday($fname,$year) {
  echo "$fname Zhang. Born in $year <br>";
}

nameAndBirthday("Li","1975");
nameAndBirthday("Hong","1978");
nameAndBirthday("Tao","1983");
?>
<hr>
<h2>Parameter default value</h2>
<?php
function setHeight($minheight=50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 将使用默认值 50
setHeight(135);
setHeight(80);
?>
<hr>
<h2>return value</h2>
<?php
function sum($x,$y) {
  $z=$x+$y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>