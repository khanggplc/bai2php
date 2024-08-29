<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//bai4
$strBai4 = "Hello World";
echo(strpos($strBai4,"e"));
?>
<br>
<?php
//Bai7
$strBai7 = "Hello world";
echo(strtoupper($strBai7)."\n");
//Bai9
$strBai9 = "Hello world!";
echo(ucwords($strBai9)."\n");
// Bai14
$strBai14 = ["Hello", "World", "!"];
$strBai14Print = implode($strBai14);
echo $strBai14Print;
//Bai 18
$strBai18 = "Hello world";
$strBai18_replace = "/world/i";
echo preg_replace($strBai18_replace, 'Khang', $strBai18);
// Bai 17
$strBai17 = "Hello world!";
echo strstr($strBai17, "world");
// Bai 16
$strBai16 = "Hello world, I'm Khang";
echo strrchr($strBai16, "Khang");
?>
</body>
</html>