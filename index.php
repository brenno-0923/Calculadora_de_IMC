<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){

    if (isset($_POST["peso"]) && !empty($_POST["peso"]) && isset($_POST["altura"]) && !empty($_POST["altura"])) {   


$peso = $_POST ['peso'];
$altura = $_POST ['altura'];

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($imc, 2);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
<h1>Calculadora de IMC (Índice de Massa Corporal)</h1> <p>


<form action="index.php" method="POST">   
Peso:<input type="number" name="peso"  step="00.1"> <p>
Altura:<input type="number" name="altura" step="00.1"><p>
<input type="submit">
</form> 
    
</body>
</html>