<?php
include_once ('conexao.php');

$quantidade = validarLogin($_POST['login'],$_POST['senha']);

if ($quantidade > 0) {
    session_start();
    $_SESSION['nome_usuario'] = $_POST['login'];
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;


}else {
    echo "<script>alert('Login mal sucedido, favor tente novamente');</script>";
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}

?>