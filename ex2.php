<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Imposto de Renda</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
  }
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    max-width: 400px;
    margin: auto;
  }
  label, select, input {
    display: block;
    margin-bottom: 10px;
    width: 100%;
  }
  input[type='submit'] {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 4px;
  }
  input[type='submit']:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<h2>Cálculo do imposto de renda</h2>
<form action='' method='post'>
<label>Digite o seu salário:</label>
<input type='number' name='salario'>
<input type='submit' name='btnCalc' value='Calcular'>
</form>
<?php
$salariol = $_POST['salario'];
if ($salariol > 4664.68) {
$desc = $salariol*0.275;
$salariof = $salariol - $desc;
echo "<p>O desconto a pagar é: $desc<br>Seu salário final será: $salariof</p>";
}
else if (($salariol > 3751.05)&&($salariol <=4664.68 )){
$desc = $salariol*0.225;
$salariof = $salariol - $desc;
echo "<p>O desconto a pagar é: $desc<br>Seu salário final será: $salariof</p>";
}
else if (($salariol > 2826.65)&&($salariol <=3751.05 )){
$desc = $salariol*0.15;
$salariof = $salariol - $desc;
echo "<p>O desconto a pagar é: $desc<br>Seu salário final será: $salariof</p>";
}
else if (($salariol > 2112)&&($salariol <=2826.65 )){
$desc = $salariol*0.075;
$salariof = $salariol - $desc;
echo "<p>O desconto a pagar é: $desc<br>Seu salário final será: $salariof</p>";
}
else {
echo "<p>Isento de pagar o imposto</p>";
}
?>
</body>
</html>