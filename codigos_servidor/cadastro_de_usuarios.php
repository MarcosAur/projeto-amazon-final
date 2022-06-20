<?php
include_once ("conexao.php");

$quantidade = verificarExistenciaUsuario($_POST['login'],$_POST['email']);

if ($quantidade > 0){
    echo("<script>alert('Usuário já existe. Favor tentar novamente');</script>");
    $url = '../views/tela_cadastro.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}else {
    adicionarUsuario($_POST['login'],$_POST['senha'],$_POST['email']);
    echo("<script>alert('Usuário cadastrado com sucesso');</script>");
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}



?>