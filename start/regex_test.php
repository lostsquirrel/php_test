
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Tests</title>
</head>
<body>
<?php
$str = "foo bar";
$pattern = "/bar/i";
echo preg_match($pattern, $str); // Outputs 1
?>
<hr>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>
<hr>

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "10086", $str); // Outputs "Visit 10086!"
?>
</body>
</html>