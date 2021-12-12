<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Case 1</h2>

<?php 
$x=1; 

while($x<=5) {
  echo "这个数字是：$x <br>";
  $x++;
} 
?>
<hr>

<h2>Case 2</h2>
<?php 
$x=1; 

do {
  echo "这个数字是：$x <br>";
  $x++;
} while ($x<=5);
?>
<hr>
<h2>Case 3</h2>
<?php 
$x=6;

do {
  echo "这个数字是：$x <br>";
  $x++;
} while ($x<=5);
?>





</body>
</html>