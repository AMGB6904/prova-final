<!DOCTYPE html>
<html lang="en">
<head>
    <title> questao 1</title>
</head>
<body>
<form action='home.php' method="get">

numero 1: <input type ="text" name="num"><br>
<input type="submit">
</form>

<?php
$raio = GET['num'];

echo "Raio: $raio<br />";

echo "Perímetro", 2*M_PI*$raio, "<br />";

echo "Área: ", M_PI*$raio*$raio, "<br />";
?>
</body>
</html>