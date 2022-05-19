<?php
$conexao = mysqli_connect("localhost","root", "", "zooworld");

$nome = $_POST['nome'];
$nomeCientifico = $_POST['nomeCientifico'];
$especie = $_POST['especie'];
$qtd = $_POST['qtd'];
$peso = $_POST['peso'];
$alimentacao = $_POST['alimentacao'];

echo "{$nome} - {$nomeCientifico} - {$especie} - {$qtd} - {$peso} - {$alimentacao}";

$sql_inserir = "insert into tabanimais(nome,nomeCientifico,especie,qtd,peso,alimentacao) values ('{$nome}' , '{$nomeCientifico}' , '{$especie}' , {$qtd} , {$peso} , '{$alimentacao}')";

mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>
