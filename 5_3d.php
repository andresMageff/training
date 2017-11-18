<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<?php


	$employees = [
	13 => [
	'firstname' => 'Mark',
	'lastname'  => 'Gil',
	'salary'     => 900
	],
	3 => [
	'firstname' => 'Frank',
	'lastname'  => 'Williams',
	'salary'     => 2700
	],
	42 => [
	'firstname' => 'Saul',
	'lastname'  => 'Goodman',
	'salary'     => 1800
	]
	];

	?>

	<!--el primer foreach recorre los indices de los valores-->
	<!--el segundo va y saca los valores del arreglo-->

	<?php
	$mayor=0;
	?>

	
	<?php foreach ($employees as $indices => $value):?>	
		
		<ul>
			<?php foreach ($value as $key => $data):?>
				
				<?php
				if ($key=='salary') {
					if ($data>$mayor) {
						$mayor=$data;

					}
				}

				?>
				
				<?php 
				switch($key=='salary'){
					case $data<1000:
					echo $data."bajo";
					break;

					case $data>1000 && $data <2000:
					echo $data."medio";
					break;

					case $data>2000:
					echo $data."alto";

				}

				?>


				<?php
				

				?>

				<li>
					<?php 
					?></li>
					
					
					
					

				<?php endforeach?>
			</ul>
		<?php endforeach?>
		<?php
		echo $mayor;
		?>
	</body>
	</html>