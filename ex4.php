<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex4</title>
</head>
<body>

	<form action="" method="post">

		<label>Insira o valor do produto:</label>
		<input type="number" name="txtProd">
		<br/><br/>

		<select name="slOp">
			<option> Selecione uma opção de desconto </option>
			<option value="1"> 5% </option>
			<option value="2"> 10% </option>
			<option value="3"> 15% </option>
		</select>
		<br/>
		<input type="submit" name="btnCalc" value="Calcular">

	</form>

	<?php  

		$prod = $_POST['txtProd'];
		$Op = $_POST['slOp'];

		if ($Op == 1) {
			
			$vf = $prod-($prod * 0.05);
			echo "<br> O valor do seu produto: $vf";
		}
		else if ($Op == 2) {
			
			$vf = $prod-($prod * 0.10);
			echo "<br> O valor do seu produto: $vf";
		}
		else if ($Op == 3) {
			
			$vf = $prod-($prod * 0.15);
			echo "<br> O valor do seu produto: $vf";
		}

		else {
			$Op == 0;
			echo"Selecione uma opção";
		}

	?>

</body>
</html>