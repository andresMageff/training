<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Primer Ejercicio Forcontu</title>
</head>
<body>
<!--
<?php
$str="abcdef";
echo strlen($str);
?>
-->
<?php


$cadena1="abcdefg";
$cadena2="abc";

if (strlen($cadena1)>strlen($cadena2)){
	echo "La cadena 1 es mayor que la  cadena 2 en "." ";
	echo strlen($cadena1)-strlen($cadena2)." caracteres"."<br>";

	echo "la cadena 2 es menor que la cadena 1 en"." ";
	echo strlen($cadena1)-strlen($cadena2)." caracteres"."<br>";
} 
else if(strlen($cadena2)>strlen($cadena1)){
	echo "La cadena 2 es mayor que la  cadena 1 en "." ";
	echo strlen($cadena2)-strlen($cadena1)."caracteres";

	echo "la cadena 2 es menor que la cadena 1 en"." ";
	echo strlen($cadena1)-strlen($cadena2)." caracteres"."<br>";


}
else{
	echo "las cadenas son iguales";
}
?>

</body>
</html>