<!DOCTYPE html>
<html lang="en">
<head>
    <title> questão 4</title>
</head>
<body>
<form action= 'home.php' method="get">
    Nota1: <input type="text" name="num1"><br>
    Nota2: <input type="text" name="num2"><br>
    Nota3: <input type="text" name="num3"><br>
    <input type="submit">
</form>

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$media = ($num1 + $num2 + $num3)/3;

echo "Média : $media";
?>
</body>
</html>