<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions </title>
</head>
<body>


<h2>str_replace()</h2>
<?php
echo str_replace("world", "Kitty", "Hello world!"); // 输出 Hello Kitty!
?>
<hr>

<h2>strpos()</h2>
<?php
echo strpos("Hello world!","world");
?>
<hr>

<h2>strrev()</h2>
<?php
echo strrev("Hello world!"); // 输出 !dlrow olleH
?>
<hr>

<h2>str_word_count()</h2>
<?php
echo str_word_count("Hello world!"); // 输出 2
?>
<hr>

<h2>strlen()</h2>
<?php
echo strlen("123456789");
?>
<hr>
</body>
</html>