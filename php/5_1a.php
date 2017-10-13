<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <?php
     
     $num1=41;
     $num2=2.1;

    $suma=$num1+$num2;
    $resta=$num1-$num2;
    $multiplicacion=$num1*$num2;
    $division=$num1/$num2;

    echo "el resultado de sumar 41 y 2.1 es"." ".$suma."<br>";
    echo "el resultado de restar 41 y 2.1 es"." ".$resta."<br>";
    echo "el resultado de multiplicar 41 y 2.1 es"." ".$multiplicacion."<br>";
    echo "el resultado de dividir 41 y 2.1 es"." ".$division."<br>";
?>
</body>
</html>