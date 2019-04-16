<!DOCTYPE html>
<html>
<head>
	<title>Ambientes No Propietarios </title>
</head>
<body>
	<h1>
		matriz 
	</h1>
	<?php 

		$usuarios = array(
			'Carlos' => array('Granda', 32), 
			'Juan' => array('Martinez', 31),
			'Maria' => array('Jimenez', 22)
		);
		
 	?>

 	<table border="1">
 		
 		<tr>
 			<th>Nombre</th>
 			<th>Apellido</th>
 			<th>Edad</th>
 		</tr>

 		<?php 

			foreach ($usuarios as $nombres => $datos) {
				# code...
				echo '<tr>';
				echo '<td>'.$nombres.'</td>';
					foreach ($datos as $apellido_edad){
						echo '<td>';
						echo $apellido_edad;
						echo '</td>';

					}
				echo '</tr>';
			}
		
	 ?>

 	</table>

</body>
</html>


