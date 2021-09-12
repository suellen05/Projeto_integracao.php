<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa Goyard</title>
    <link rel="shortcut icon" href="imagens/bolsalog-1.jpg">

    <link rel="stylesheet" href="css/bolsa1.css" type="text/css">
    <link href="lightbox2-dev/dist/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <header class="header">
        <nav class="menu">
            <ul>
                <a href="formulario-clientes-inserir.php">Minha Conta / Cadastre-se</a>
                <a href="#">ATÉ 6X SEM JUROS</a>
                <a href="formulario-carrinhocompras.php">Carrinho de Compra</a>
                <div class="buscar">
                    <label for="Buscar">Buscar</label> <input type="" buscar="button" id="buscar">
                    <img src="imagens/search.png">
                </div>
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


    <ul>
        <li class="lista">
            <strong>
                <a title="Acessórios" href="acessórios" class="_db"> ACESSÓRIOS </a>
                <a title="Bolsas" href="bolsas" class="_db"> BOLSAS</a>
                <a title="Mais vendidas" href="#" class="_db"> MAIS VENDIDAS </a>
                <a title="Promoção" href="#" class="_db"> PROMOÇÕES </a>
                <a title="Carteira" href="#" class="_db"> CARTEIRAS </a>
            </strong>
        </li>
        <hr>
    </ul>
    <br>
    <br>
    <br>

    <br>
    <br>
    <?php
    include "conexao.php";
    $sql = $pdo->prepare("SELECT * FROM tb_produtos WHERE id = ?");
    $sql->execute([$_GET['id']]);
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        $fotos = explode(',', $resultado['fotos']);
    }
    ?>

    <div class="galeria">
        <a href="imagens/bolsa-manhattan-grande.jpeg" class="fotobolsas1" data-lightbox="bolsas" data-title="Bolsa Frente">
            <img src="<?php echo $fotos[0]?>" alt="bolsa frente">
        </a>

        <a class="bolsa-oculta" href="imagens/bolsa-manhattan-fundo.jpeg" data-lightbox="bolsas" data-title="fundo">
            <img src="<?php echo $fotos[1]?>">
        </a>
        <a class="bolsa-oculta" href="imagens/bolsa-manhattan-lado.jpeg" data-lightbox="bolsas" data-title="de lado">
            <img src="<?php echo $fotos[2]?>">
        </a>
    </div>


    <h2 Class="fotobolsas"><?=$resultado['nome']?></h2>
    <br>

    <h4>
        <p> Marca: <?=$resultado['marca']?></p>
    </h4>

    <p>Modelo: <?=$resultado['modelo']?></p>

    <p>Disponibilidade: Em estoque</p>

    <p>
    <h2>R$ <?php echo number_format($resultado['preco'], 2,',', '.')?></h2>
    </p>
    <br>
    <div class="tamanho-produto">
        <p>Tamanho</p>
        <br>

        <button type="button" class="btn btn-outline-danger">M</button>
        <button type="button" class="btn btn-outline-danger">G</button>
    </div>

    <div class="campo">
        <form action= 'carrinho.php ' method='post'>
            <label for="Quantidade"> Qtd:</label>
            <input type="text" id="Quantidade" name="quantidade" placeholder="1" required>
            <input type="hidden" name="id_produto" value="<?=$resultado['id']?>">
            <div class="container">   
                <input type="submit" value="COMPRAR" name="compra" class="btn btn-outline-danger">
            </div>
        </form>

        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <h4>Produtos Relacionados</h4>
        <br>

        <a href="#" class="compras">
            <img src="imagens/chanel-calfskin.jpg" alt="bolsa-7">
            <br>
            <br>
            <p> BOLSA CHANEL</p>
        </a>
        <a href="#" class="compras">
            <img src="imagens/vuitton-manhattan.jpeg" alt="bolsa-4">
            <br>
            <br>
            <p> BOLSA LOUIS VUITTON</p>
        </a>

        <a href="#" class="compras">
            <img src="imagens/vuitton-neverfull.jpg" alt="bolsa-5">
            <br>
            <br>
            <p>BOLSA LOUIS NEVERFULL</p>
        </a>


        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="lightbox2-dev/dist/js/lightbox.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>