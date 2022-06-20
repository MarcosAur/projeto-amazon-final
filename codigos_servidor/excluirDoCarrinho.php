<?php

include './conexao.php';
$nome_do_Item = $_POST['row'];
excluirDoCarrinho($nome_do_Item);
echo '<script>alert("Registro excluído")</script>';
$url = '../index.html';  
echo("<script>history.replaceState({},'','$url');</script>");
include $url;


?>