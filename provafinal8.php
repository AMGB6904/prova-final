<!DOCTYPE html>
<html lang="en">
<head>
    <title> questão 8 </title>
</head>
<body>
    <form action='provafinal.php' method="get">
        Temperatura em Celsius: <input type"text" name="C"><br>
        <input type+"submit">
</form>

<?php
$C =_GET['C'];
$F = (9/5)*$C +32;
echo "Em Farenheit: $F <br /><br />";
?>

</body>
</html>