<?php

function mandarEmail($mensagem, $destinatario){
    $usuario = $_COOKIE['user_name'];
    $horaDaCompra = time();
    $mensagem = "Itens:$mensagem\nHorario da compra: $horaDaCompra\nUsuário: $usuario";
    $assunto = "Compra aprovada na Amazon";

    mail($destinatatio, $assunto, $mensagem);
}


?>