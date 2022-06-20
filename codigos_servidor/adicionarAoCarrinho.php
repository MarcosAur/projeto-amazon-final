<?php
include_once './conexao.php';

$valor = $_POST['valor'];
$nome = $_POST['nome'];
$quant = $_POST['qtd'];

$produtoExiste = validarExistenciaDoProduto($nome);
if ($produtoExiste) {
    echo "<script>alert('Produto Existente');</script>";
    updateQuantidadeProduto($nome, $quant);
}else{
    adicionarAoCarrinho($nome, $valor, $quant);
    echo "<script>alert('Adicionado ao Carrinho');</script>";
}
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
?>