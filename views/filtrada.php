<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Pesquisa</title>
</head>
<body>
    
<nav class="navbar" style="background-color:#232F3E"> 
        <div class="container">
          <a class="navbar-brand text-white" href="#">
            <img src="../img/amazon-icon-c.png" alt="" width="60" height="50" class="d-inline-block align-text-top"> 
            <h2 class="d-inline-block align-text-top">Amazon</h2>
          </a>
        </div>
    </nav>
</body>
</html>

<?php

$filtro = $_POST['filtro'];
$achou = false;

$code_html = "</div>
<div class='container'>
    <div class='row'>";

if (str_contains(strtolower("Fire TV Stick"),strtolower($filtro))) {
    $code_html = $code_html . "<div class='col-4 pb-3'>
    <div class='card' style='width: 18rem;'>
        <img src='https://m.media-amazon.com/images/I/61rK6en2IdL._AC_SX679_.jpg' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Fire TV Stick</h5>
          <p class='fs-5'><strong>R$    236.55</strong></p>
          <p class='card-text'>Fire TV com Alexa: aproveite streaming rápido e em Full HD. Vem com o novo Controle Remoto Lite por Voz com Alexa (sem controles de TV).</p>
          <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
            <input type='text' name='nome' value='Fire TV Stick' hidden>
            <input type='numer' name='valor' value='236.55' hidden>
            <label class='mr-sm-2 sr-only'>Quantidade: </label>
            <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
              <option value='1'>Um</option>
              <option value='2'>Dois</option>
              <option value='3'>Três</option>
            </select>
            <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
          </form>
          
        </div>
    </div>
</div>";
$achou = true;
}

if (str_contains(strtolower("Echo Dot (4ª Geração)"),strtolower($filtro))) {
    $code_html = $code_html . "
    <div class='col-4 pb-3'>
    <div class='card' style='width: 18rem;'>
        <img src='https://m.media-amazon.com/images/I/61gufBsGK7L._AC_SL1000_.jpg' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Echo Dot (4ª Geração)</h5>
          <p class='fs-5'><strong>R$ 359.00</strong></p>
          <p class='card-text'>Controle músicas apenas com sua voz. Ouça músicas do Amazon Music, Apple Music, Spotify, Deezer e outros por toda sua casa com o recurso música multiambiente</p>
          <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
            <input type='text' name='nome' value='Echo Dot (4ª Geração)' hidden>
            <input type='numer' name='valor' value='359.00' hidden>
            <label class='mr-sm-2 sr-only'>Quantidade: </label>
            <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
              <option value='1'>Um</option>
              <option value='2'>Dois</option>
              <option value='3'>Três</option>
            </select>
            <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
          </form>
          
        </div>
    </div>
</div>";
$achou = true;
}

if (str_contains(strtolower("Echo Show 5"),strtolower($filtro))) {
    $code_html = $code_html . "<div class='col-4 pb-3'>
    <div class='card' style='width: 18rem;'>
        <img src='https://m.media-amazon.com/images/I/71C+1YtQkrL._AC_SY355_.jpg' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Echo Show 5</h5>
          <p class='fs-5'><strong>R$ 999.00</strong></p>
          <p class='card-text'>defina alarmes e timers, cheque seu calendário ou as notícias, faça chamadas de vídeo com a câmera de 2 MP para amigos e familiares que tenham o aplicativo Alexa</p>
          <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
            <input type='text' name='nome' value='Echo Show 5' hidden>
            <input type='numer' name='valor' value='999.00' hidden>
            <label class='mr-sm-2 sr-only'>Quantidade: </label>
            <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
              <option value='1'>Um</option>
              <option value='2'>Dois</option>
              <option value='3'>Três</option>
            </select>
            <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
          </form>
          
        </div>
    </div>
</div>";
$achou = true;

}
if (str_contains(strtolower("Echo Show 5"),strtolower($filtro))) {
    $code_html = $code_html . "<div class='col-4 pb-3'>
    <div class='card' style='width: 18rem;'>
        <img src='https://m.media-amazon.com/images/I/61mezkgozjL._AC_SY355_.jpg' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>Echo Buds</h5>
          <p class='fs-5'><strong>R$ 164.90</strong></p>
          <p class='card-text'>Áudio dinâmico e cancelamento de ruído ativo (ANC): os speakers premium oferecem um som nítido e equilibrado. O design intra-auricular de encaixe firme e o ANC limitam o ruído de fundo.</p>
          <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
            <input type='text' name='nome' value='Echo Buds' hidden>
            <input type='numer' name='valor' value='164.00' hidden>
            <label class='mr-sm-2 sr-only'>Quantidade: </label>
            <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
              <option value='1'>Um</option>
              <option value='2'>Dois</option>
              <option value='3'>Três</option>
            </select>
            <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
          </form>                      
          
        </div>
    </div>
</div>";
$achou = true;
}

if (str_contains(strtolower("Echo Show 5"),strtolower($filtro))) {
    $code_html = $code_html . "<div class='card' style='width: 18rem;'>
    <img src='https://m.media-amazon.com/images/I/61lIhZlkROL._AC_SY355_.jpg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h5 class='card-title'>Echo Studio</h5>
      <p class='fs-5'><strong>R$ 1.614.05</strong></p>
      <p class='card-text'>Som imersivo: 5 alto-falantes que produzem graves potentes, mid-range dinâmico e agudos nítidos. A tecnologia Dolby Atmos proporciona percepção de espaço, clareza e profundidade.</p>
      <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
        <input type='text' name='nome' value='Echo Studio' hidden>
        <input type='numer' name='valor' value='1614.05' hidden>
        <label class='mr-sm-2 sr-only'>Quantidade: </label>
        <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
          <option value='1'>Um</option>
          <option value='2'>Dois</option>
          <option value='3'>Três</option>
        </select>
        <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
      </form>
      
    </div>
</div>";
$achou = true;
}

if (str_contains(strtolower("Echo Show 10"),strtolower($filtro))) {
  $code_html = $code_html . "<div class='col-4 pb-3'>
                <div class='card' style='width: 18rem;'>
                    <img src='https://m.media-amazon.com/images/I/61B62jqg+7L._AC_SY355_.jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>Echo Show 10</h5>
                      <p class='fs-5'><strong>R$ 1.804.05</strong></p>
                      <p class='card-text'>Desenvolvido para se mover com você: com um display HD de 10,1' que se move automaticamente, as chamadas de vídeo, as receitas e os filmes e séries estarão sempre à vista</p>
                      <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
                        <input type='text' name='nome' value='Echo Show 10' hidden>
                        <input type='numer' name='valor' value='1804.05' hidden>
                        <label class='mr-sm-2 sr-only'>Quantidade: </label>
                        <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
                          <option value='1'>Um</option>
                          <option value='2'>Dois</option>
                          <option value='3'>Três</option>
                        </select>
                        <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
                      </form>
                      
                    </div>
                </div>
            </div>
        </div>";
        $achou = true;
}

if (str_contains(strtolower("Harry Potter e o prisioneiro de Azkaban"),strtolower($filtro))) {
  $code_html = $code_html . "<div class='col-4 pb-3'>
  <div class='card' style='width: 18rem;'>
      <img src='https://images-na.ssl-images-amazon.com/images/I/81u+ljPVifL.jpg' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>Harry Potter e o prisioneiro de Azkaban</h5>
        <p class='fs-5'><strong>R$ 41.00</strong></p>
        <p class='card-text'>As aulas estão de volta à Hogwarts e Harry Potter não vê a hora de embarcar no expresso a vapor que o levará de volta à escola de bruxaria. Mais uma vez suas férias na rua dos Alfeneiros foi triste e solitária.</p>
        <form class='form-row align-items-center' action='./codigos_servidor/adicionarAoCarrinho.php' method='POST'>
          <input type='text' name='nome' value='Harry Potter e o prisioneiro de Azkaban' hidden>
          <input type='numer' name='valor' value='41.00' hidden>
          <label class='mr-sm-2 sr-only'>Quantidade: </label>
          <select name='qtd' class='custom-select mr-sm-2 mb-2 quantidade' id='inlineFormCustomSelect'>
            <option value='1'>Um</option>
            <option value='2'>Dois</option>
            <option value='3'>Três</option>
          </select>
          <button type='submit' class='btn btn-primary'>Adicionar ao Carrinho</button>
        </form>
      </div>
  </div>
</div>";
$achou = true;
}


$code_html = $code_html . "</div></div></div>";


if (!$achou){
  $code_html = "<center><h1>Busca não encontrada</h1></center>";
}

echo $code_html;


?>
