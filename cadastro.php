<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <img src="imagens/logo.png" class="logo">
    <hr>
    <h1> Cadastro de Animais</h1>
    <hr>
    <form method="post" class="cadastro" action="cadastra-animais.php">
    <p> <label for="nome">Nome:</label> <input type="text" name="nome"  size="30" maxlenght="35" placeholder="Digite o nome do Animal"/> </p>
    <p> <label for="nomeCientifico">Nome Científico:</label> <input type="text" name="nomeCientifico" size="30" maxlenght="35" placeholder="Digite o nome Científico do Animal"/> </p>
    <p> <label for="especie">Espécie:</label> <input type="text" name="especie"  size="20" maxlenght="35" placeholder="Digite a espécie do animal"/> </p>
    <p> <label for="qtd">Qtd:</label> <input type="int" name="qtd"   maxlenght="40" placeholder="Digite a quantidade de animais"/> </p>
    <p> <label for="peso">Peso:</label> <input type="int" name="peso"   maxlenght="35" placeholder="Digite o peso do animal"/> </p>
    <p> <label for="alimentacao">Alimentação:</label> <input type="text" name="alimentacao"  size="35" maxlenght="45" placeholder="Digite o tipo de Alimentação do animal"/> </p>
    <br>
    <hr>
    <input type="submit" value="C a d a s t r a r">
    <hr>
    </form>
</body>
</html>