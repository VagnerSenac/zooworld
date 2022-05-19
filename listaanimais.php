<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais Cadastrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<img src="imagens/logo.png" class="logo">
    <hr>
    <h1> Lista de Animais Cadastrados</h1>
    <hr>
    <div class="cadastro">
<?php
$conexao = mysqli_connect("localhost","root", "", "zooworld");
$sql_pesquisar = "select * from tabanimais";
$resultado = mysqli_query($conexao, $sql_pesquisar);

While($linha = mysqli_fetch_assoc($resultado)) {

    echo "Código: {$linha['codAnimais']}";
    echo "<br>";
    echo "Nome: {$linha['nome']}";
    echo "<br>";
    echo "Nome Científico: {$linha['nomeCientifico']}";
    echo "<br>";
    echo "Espécie: {$linha['especie']}";
    echo "<br>";
    echo "QTD: {$linha['qtd']}";
    echo "<br>";
    echo "Peso: {$linha['peso']} Kg";
    echo "<br>";
    echo "Alimentação: {$linha['alimentacao']}";
    echo "<br>";
    echo "<br>";
}
mysqli_close($conexao);
?>
</div>
<br>
<hr>



</body>
</html>