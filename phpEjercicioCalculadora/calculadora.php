
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <style>
    label{
        font-family:verdana;
        font-size:12px;
        float:right;
        margin-right:4px;
    
    }
    form{
        width:170px;
        height:150px;
        background-color:rgba(12,40,55,0.9);
        margin:auto;
        border-radius:20px;
    }
    form:hover{
        background-color:rgba(12,40,55,0.7);
    }
    h2{
        text-align:center;
        background-color:rgba(3,11,105,0.1);
    }
    </style>
</head>
<body>
    <?php
      $numero1=41;
      $numero2=2.1;
      
      $suma=$numero1+$numero2;
      $resta=$numero1-$numero2;
      $multiplicacion=$numero1*$numero2;
      $division=$numero1/$numero2;

    ?>

    <form>
    <h2>Calculadora</h2>
    <label>suma:<?php echo $suma?></label><br>
    <label>resta:<?php echo $resta?></label><br>
    <label>multiplicacion:<?php echo $multiplicacion?></label><br>
    <label>division:<?php echo $division?></label><br>
    </form>     
</body>
</html>