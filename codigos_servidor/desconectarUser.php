<?php
if (isset($_SESSION)) {
    session_unset();
}
echo "<script>alert('Login mal sucedido, favor tente novamente');</script>";
$url = '../index.html';  
echo("<script>history.replaceState({},'','$url');</script>");
include $url;
?>