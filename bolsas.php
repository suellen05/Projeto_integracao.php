<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsas</title>
    <link rel="shortcut icon" href="imagens/bolsalog-1.jpg">
</head>
<body>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>

<body>

    <header class="header">
        <nav class="menu">
            <ul>
                <a href="formulario-clientes-inserir.php">Minha Conta / Cadastre-se</a></a>
                <a href="#">ATÉ 6X SEM JUROS</a>
                <a href="carrinhocompras.php">Carrinho de Compra</a>
                <div class="buscar">
                    <label for="Buscar">Buscar</label> <input type="text" buscar="buscar" id="buscar">
                    <img src="imagens/search.png">
            </ul>
        </nav>
    </header>

       <div class="site">
        <a href="index.php" title="Fabi-correia" class="_db">
        <img class="logo-empresa" src="imagens/fab.jpg" alt="imagem logo">
        </a>
    
        <h1 class="nome"><em>Fabi Bolsas e Acessórios</em></h1>
        <br>
    </div>

<strong>
    <ul>
        <li class="lista">
            <a title="Acessórios" href="#" class="_db"> ACESSÓRIOS </a>
            <a title="Bolsas" href="index.html" class="_db"> BOLSAS</a>
            <a title="Mais vendidas" href="#" class="_db"> MAIS VENDIDAS </a>
            <a title="Promoção" href="#" class="_db"> PROMOÇÕES </a>
            <a title="Carteira" href="#" class="_db"> CARTEIRAS </a>
        </strong>
        </li>
    </ul>
    <section class="zoom">
    <?php 
        include "conexao.php";
        $sql = $pdo->prepare("SELECT * FROM tb_produtos");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($resultado as $produto){
            $fotos = explode(',', $produto['fotos']); ?>
            <a href="bolsa.php?id=<?=$produto['id']?>" class="compras">
                <img src="<?=$fotos[0]?>">
                <p><?=$produto['nome']?></p>
                <p><?=$produto['preco']?></p>
            </a>
        <?php
        }
        ?>
            <br>
    
</body>
</html>