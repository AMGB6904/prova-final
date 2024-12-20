<!DOCTYPE html>
<html lang="en">
<head>
    <title> questão 9</title>
</head>
<body>
    <form action='provafinal.php' method="get">
        Temperatura em Farenheit: <input type"text" name="F"><br>
        <input type+"submit">
</form>

<?php
$F =_GET['F'];
$C = ($F-32)*5/9;
echo "Em Celsius: $C <br /><br />";
?>

</body>
</html>