<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array foreach</title>
    <style>
    table, th, td{
        border: 1px solid black;
        margin: auto;
    }
    </style>
</head>
<body>
<?php
$arreglo=array(

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

         [
          'identificador'=>5,
	  'titulo'=>'el consuelo',
	  'director'=>'Miguel Guevara',
	  'año'=>'2015',
	  'duracion'=>4
         ],
);

?>

<table>
<tr>
<th>identificador</th>
<th>titulo</th>
<th>director</th>
<th>duracion</th>
<th>año</th>
</tr>
<tr>
<?php foreach ($arreglo as $key => $value): ?>
   </tr>
   <tr>
   <?php foreach ($value as $valores): ?>
       
       <td><?php echo $valores?></td>
       
<?php endforeach?>
</tr>
<?php endforeach?>

   
</table>
</body>
</html>
