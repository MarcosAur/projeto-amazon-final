<?php
if (!isset($_SESSION)) {
    echo '<script>alert("Sessão não iniciada. Você deve realizar login para finalizar a compra")</script>';
    $url = '../views/tela_login.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;   
}
?>
