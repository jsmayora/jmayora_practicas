<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>js2</title>
	<?php include_once "heard/header.php" ?>
</head>
<body>
	
	<div class="contanier" id="container">

		<div class="row " id="row-pracita">
			<!-- columna de relleno -->
			<div class="col-sm-3" id="colmna1" style="border: blue 2px solid;"></div>

			<div class="col-sm-3 align-self-center" id="columna2">
				

				<div id="celebs" class="" style="border: red 2px solid;">
					

					<!-- inicio de la tavla -->
					<!-- class="thead-dark" -->
					<!-- table-hover -->
					<table class="table  datos">
						<thead >
							<tr>
								<th>Nombre</th><th>Edad</th>

							</tr>
						</thead>
						<tbody>

							<tr>
								<td>Albert</td> <td>15</td>
							</tr>
							<tr>
								<td>Luisa</td> <td>17</td>
							</tr>
							<tr>
								<td>Pedro</td> <td>11</td>
							</tr>
							<tr>
								<td>Marlon</td> <td>14</td>
							</tr>
							<tr>
								<td>Mireya</td> <td>13</td>
							</tr>

						</tbody>
					</table>
					<!-- fin  de la tavla -->
				</div>

			</div>

			<!-- columna de relleno -->
			<div class="col-sm-3" id="columna3" style="border: blueviolet 2px solid;"></div>
			<!--  fin columna de relleno -->
		</div>

	</div>
</div>


<?php include_once "footer/footer.php" ?>

<!-- script de la pagina -->
</body>
</html>