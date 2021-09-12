<?php 
session_start();
include 'conexao.php';
if(isset($_POST['id_produto'], $_POST['quantidade']) && is_numeric($_POST['id_produto']) && is_numeric($_POST['quantidade'])){
    $id_produto= (int)$_POST['id_produto'];
    $quantidade= (int)$_POST['quantidade'];

    $sql= $pdo->prepare('SELECT * FROM tb_produtos WHERE id = ?'); 
    $sql->execute([$_POST['id_produto']]);
    $produto= $sql->fetch(PDO::FETCH_ASSOC);
    if($produto && $quantidade > 0){

        if(isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])){
            if(array_key_exists($id_produto,$_SESSION['carrinho'])){
                $_SESSION['carrinho'][$id_produto] += $quantidade;
            }
            else {
                $_SESSION['carrinho'][$id_produto] = $quantidade;

            }
        }
        else{
            $_SESSION['carrinho'] = array($id_produto => $quantidade);
        }
    } 
}

if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['carrinho']) && isset($_SESSION['carrinho'][$_GET['remove']])) {
    unset($_SESSION['carrinho'][$_GET['remove']]);
    
}

if(isset($_POST['atualizar']) && isset($_SESSION['carrinho'])){ 
    foreach($_POST as $k => $v) {
        if(strpos ($k, 'quantidade') !== false && is_numeric($v)){
            $id=str_replace('quantidade-', '',$k);
            $quantidade=(int)$v;
            if (is_numeric($id) && isset($_SESSION['carrinho'][$id]) && $quantidade > 0 ){

                $_SESSION['carrinho'][$id] = $quantidade;

            }
        }
    }
}

if(isset($_POST['compra']) && isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
    header('Location: carrinho.php');
    exit;
}

$produtos_no_carrinho= isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
$produtos = array();
$subtotal = 0.00;

if($produtos_no_carrinho){
    
 $array_to_question_marks = implode(',', array_fill(0, count($produtos_no_carrinho), '?'));
 $sql = $pdo->prepare('SELECT * FROM tb_produtos WHERE id in (' . $array_to_question_marks . ')');
 $sql->execute(array_keys($produtos_no_carrinho));
 $produtos = $sql->fetchAll(PDO::FETCH_ASSOC);
 
 foreach ($produtos as $produto){
     $subtotal += (float)$produto['preco'] * (int)$produtos_no_carrinho[$produto['id']]; 
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<table>
    <thead>
        <tr>
            <th colspan="2">Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php if(empty($produtos)): ?>
            <tr>
                <td colspan="4">Você ainda não adicionou nenhum produto ao carrinho.</td>
            </tr>
        <?php else: ?>
        <?php foreach($produtos as $produto): 
        $fotos = explode(',', $produto['fotos'])?>
        <tr>
            <td>
                <a href="bolsa.php?id=<?php echo $produto['id']?>">
                    <img src="<?php echo $fotos[0]?>" width="130">
                </a>
            </td>
            <td><a href="bolsa.php?id=<?=$produto['id']?>"><?=$produto['nome']?></a></td>
            <td></td>
            <td></td>

        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
Subtotal: R$ 

<input type="button" value="Atualizar" name="atualizar"><br>
<a href="finalizar.php">Finalizar compra</a>
</form>
</body>
</html>