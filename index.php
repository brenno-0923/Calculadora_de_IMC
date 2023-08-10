<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="style1.css">

    <title>Calculadora de IMC</title>
</head>
<body>

<div class="bt-cima">
        <img src="img/Logo.png" alt="logo" class="logo">
        <h1 class="br-logo-title"> Calculadora de IMC </h1>
    </div>
  <br>

<p class="bt-texto">

<img src="img/personalizar.png" width="700px"> <br> <br>
Uma calculadora de IMC (Índice de Massa Corporal) é uma ferramenta simples e útil usada para estimar a proporção entre o peso e a altura de uma pessoa. 
O IMC é frequentemente utilizado como uma medida inicial para <b> avaliar se um indivíduo está em um peso considerado saudável em relação à sua altura. </b>


<h1 class="bt-titulo"> Como funciona </h1> </b> 
<p class="bt-texto">
O cálculo do IMC é baseado em uma fórmula matemática que relaciona o peso corporal em quilogramas à altura em metros. 
O valor resultante do cálculo é uma medida numérica que pode ser categorizada em faixas que representam diferentes níveis de peso, como abaixo do peso, peso normal, sobrepeso ou obesidade.<p>

<p class="bt-texto">

<h1 class="bt-titulo">Fórmula</h1>
<div class="image-container">
    <img src="img/formula.png" class="bt-demostra1">
</div>
<div class="image-container1">
    <img src="img/personalizar1.png" width="700px" class="bt-demostra1">
</div>>

<p>
<h1 class="bt-titulo"> Modo de uso</h1> </b>
<p class="bt-texto">
Em uma calculadora de IMC, o<b> usuário fornece seu peso e altura </b> e, ao pressionar o botão de cálculo, a calculadora realiza automaticamente a divisão do peso pela altura ao quadrado, obtendo assim o valor do IMC. 
O resultado é então exibido na tela, geralmente com duas casas decimais, fornecendo ao usuário uma estimativa do seu estado atual de peso corporal. <P>


<h1 class="bt-titulo"> Calculadora </h1> </b>

<form class="bt-form" action="index.php" method="POST">   
<i class="bi bi-person-badge-fill"></i> 
<select>
<option value="Masculino">Masculino</option>   
<option value="Feminino">Feminino</option>   
</select> <p>
Peso: <input type="number" name="peso" step="0.1" placeholder="EX: 54.7"> <p>

Altura: <input type="number" name="altura" step="0.01" placeholder="EX: 1.80"><p>
<input type="submit" value="Calcular">
<p>


<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){

    if (isset($_POST["peso"]) && !empty($_POST["peso"]) && isset($_POST["altura"]) && !empty($_POST["altura"])) {   


$peso = $_POST ['peso'];
$altura = $_POST ['altura'];

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($imc, 2) ." Kg/m ";
}
}

?>

</form> 
<br>
<h1 class="bt-titulo">Tabela de peso</h1>
<div class="image-container1">
    <img src="img/IMC TABELA.png" width="700px" class="bt-demostra1">
</div>


</body>
</html>