<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;/*separadores |*/
}
    </style>
</head>
<body>
    <?php
    //arreglo multidimensional, va a ser de 5 columnas por 4 filas
    //con arreglo asociativo
    $arreglosAso = array(
    	[
    	'identificador' =>1, 
    	'titulo'=>"la magia de tus ojos", 
    	'director'=>'andres guevara', 
    	'año'=>'2016',
    	'duracion'=>2
    	],

    	[
    	'identificador' =>2, 
    	'titulo'=>"eu quero bosse", 
    	'director'=>'dayana hernandez', 
    	'año'=>'2017',
    	'duracion'=>2
    	],

    	[
    	'identificador' =>3, 
    	'titulo'=>"tra tra", 
    	'director'=>'johana gutierrez', 
    	'año'=>'2017',
    	'duracion'=>3
    	],

    	[
    	'identificador' =>4, 
    	'titulo'=>"tra tra", 
    	'director'=>'Carolina Hernandez', 
    	'año'=>'2017',
    	'duracion'=>1
    	],
    );

    ?>
    <table>
<tr>
    <th>identificador</th>
    <th>titulo</th>
    <th>director</th>
    <th>año</th>
    <th>duracion</th>
   
 </tr>

 <tr>
	<td><?php echo $arreglosAso[0]['identificador']; ?></td>
	<td><?php echo $arreglosAso[0]["titulo"]; ?></td>
	<td><?php echo $arreglosAso[0]["director"]; ?></td>
	<td><?php echo $arreglosAso[0]["año"]; ?></td>
	<td><?php echo $arreglosAso[0]["duracion"]; ?></td>
	<?php echo "<br>" ?>

</tr>

<tr>
	<td><?php echo $arreglosAso[1]['identificador']; ?></td>
	<td><?php echo $arreglosAso[1]["titulo"]; ?></td>
	<td><?php echo $arreglosAso[1]["director"]; ?></td>
	<td><?php echo $arreglosAso[1]["año"]; ?></td>
	<td><?php echo $arreglosAso[1]["duracion"]; ?></td>
	<?php echo "<br>" ?>
</tr>

<tr>
	<td><?php echo $arreglosAso[2]['identificador']; ?></td>
	<td><?php echo $arreglosAso[2]["titulo"]; ?></td>
	<td><?php echo $arreglosAso[2]["director"]; ?></td>
	<td><?php echo $arreglosAso[2]["año"]; ?></td>
	<td><?php echo $arreglosAso[2]["duracion"]; ?></td>
	<?php echo "<br>" ?>
</tr>

<tr>
	<td><?php echo $arreglosAso[3]['identificador']; ?></td>
	<td><?php echo $arreglosAso[3]["titulo"]; ?></td>
	<td><?php echo $arreglosAso[3]["director"]; ?></td>
	<td><?php echo $arreglosAso[3]["año"]; ?></td>
	<td><?php echo $arreglosAso[3]["duracion"]; ?></td>
	<?php echo "<br>" ?>
</tr>
</table>
</body>
</html>
