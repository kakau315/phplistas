<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
    form { background-color: #fff; padding: 20px; border-radius: 8px; max-width: 400px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    label, select, input { display: block; margin-bottom: 10px; }
    input[type="submit"] { background-color: #009688; color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; }
    input[type="submit"]:hover { background-color: #00796b; }
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex5</title>
</head>
<body>

	<form action="" method="post">
		
		<label>Digite seu consumo de energia: </label>
		<input type="number" name="txtEnergia">
		<br/><br/>
		<select name="slOp">
			<option>Selecione uma bandeira</option>
			<option value="1">Bandeira verde</option>
			<option value="2">Bandeira amarela</option>
			<option value="3">Bandeira vermelha</option>
		</select>
		<br/><br/>
		<input type="submit" name="btnCalc" value="Calcular">
	</form>
<?php

	$cons = $_POST['txtEnergia'];
	$Op = $_POST['slOp'];

	if ($Op == 1) {
		
		$vc = $cons * 0.60;
		echo "<br> O valor a pagar é: $vc";
	}

	else if ($Op == 2) {
		
		$vc = $cons * 0.65;
		echo "<br> O valor a pagar é: $vc";
	}

	else if ($Op == 3) {
		
		$vc = $cons * 0.70;
		echo "<br> O valor a pagar é: $vc";
	}

	else {
		
		$Op == 0;
		echo "<br> Selecione uma opção primeiro";
	}


  ?>
</body>
</html>