<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Peso Ideal</title>

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
<form action='' method='post'>
<label>Selecione o seu sexo:</label>
<select name='slSexo'>
<option value='0'>Selecione o seu sexo</option>
<option value='1'>Feminino</option>
<option value='2'>Masculino</option>
</select>
<label>Digite sua altura:</label>
<input type='text' name='Altura'>
<input type='submit' name='btnEnviar' value='Calcular'>
</form>
<?php
$Op = $_POST['slSexo'];
$alt = $_POST['Altura'];
if($Op==1){
$Res = (62.1*$alt)-44.7;
echo "<p>O peso ideal para sua altura é: $Res</p>";
}
else if ($Op==2){
$Res = (72.7 * $alt)-58;
echo "<p>O peso ideal para sua altura é: $Res</p>";
}
else {
echo "<p>É preciso selecionar o seu sexo!</p>";
}
?>
</body>
</html>