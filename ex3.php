<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcelas</title>

</head>
<body>

	<h2>Calculadora de parcelas</h2>

	<form action="" method="post">
		<label>Digite o valor do produto</label>
		<input type="number" name="vprod">
		<br>
		<input type="submit" name="btnCalc" value="Calcular">
	</form>
	<br>

	<?php  

		$prod = $_POST['vprod'];
		$vf = $parc = $prod+($prod*0.16); 
		$parc = $vf/16;

		echo"<div class=texto>O valor final da compra é:<br> $vf <br> Parcelando em 16x: <br> $parc</div>";

	?>
</body>
</html>