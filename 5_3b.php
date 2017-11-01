<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>numeros impares menores a 1000</title>
</head>
<body>
  <?php
 $contando=0;
 $terminar=35;
 
 while($contando<=$terminar){
    
    
     if($contando%2!=0){
        if($contando!=1){
            echo ',';
        }
        echo $contando;
     }
     $contando++;
     }
 
   ?>
</body>
</html>