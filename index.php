<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fabi Bolsas e Acessórios</title>
     <link rel="shortcut icon" href="imagens/bolsalog-1.jpg">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">

    
</head>

<body>

    <header class="header">
        <nav class="menu">
            <ul>
                <a href="cadastro.php">Minha Conta / Cadastre-se</a></a>
                <a href="#">ATÉ 6X SEM JUROS</a>
                <a href="carrinho.php">Carrinho de Compra</a>
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
            <a title="Acessórios" href="acessórios" class="_db"> ACESSÓRIOS </a>
            <a title="Bolsas" href="bolsas.html" class="_db"> BOLSAS</a>
            <a title="Mais vendidas" href="#" class="_db"> MAIS VENDIDAS </a>
            <a title="Promoção" href="#" class="_db"> PROMOÇÕES </a>
            <a title="Carteira" href="#" class="_db"> CARTEIRAS </a>
        </strong>
        </li>
    </ul>
    <br>
    <div class="banner">
        <img src="" alt="" class="imagem-banner">
        <br>
        
        <span class="leganda"> </span>
        <br>
        <button id="btfoto1"> <img src= ""></button>
        <button id="btfoto2"> <img src= ""></button>
        <button id="btfoto3"> <img src= ""></button>
 
    </div>
        <script src="js/funcoes.js"></script>

       
    <br>
    <h1 class="nome"><em>DESTAQUES</em></h1>

   

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
    </section>

    <hr>
    <div class="servicos">
        <img class="acesso seguro" src="imagens/acesso-seguro.png" title="Acesso Seguro">
        <img class="acesso seguro" src="imagens/selodequalidade.png" title="Selo Qualidade">
        <img class="acesso seguro" src="imagens/botao-online.png" title="Atendimento OnLine">
        <img class="acesso seguro" src="imagens/pagseguro.png" title="Atendimento OnLine">
    </div>

    <footer class="rodape">
        <div class="coluna">
          <h5>INFORMAÇÕES</h5>
          <a href="SobreFabi.html">
          Sobre Fabi
          </a>
        </div>
        <div class="coluna">
          <h5>SERVIÇOS AO CLIENTE</h5>
          <a href="#">
          Solicitar Devolução<br>
          Mapa Site<br>
          <a href="entreemcontato.html"> Entre em Contato
        </div>
    </a>
     
        <div class="coluna">
        <h5>MINHA CONTA</h5>
        <a href="minhaconta.index.html">
       Minha conta<br>
       Historico de pedidos<br>
       Lista de Desejos
        </a>
      </div>
      </footer>

      <hr>
      <br>
      <h6> Desenvolvido por Suellen Sant' Ana<h/6>
</body>

</html>