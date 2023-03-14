<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária</title>
    <link rel = "stylesheet" href="css/style.css" type = "text/css">
    <script language="JavaScript" src="js/funcoes.js"></script>
</head>
<body>
    <header class = "header-1">
 <div class= "info">
        <ul>
            <li><img src="imagens\celularbranco.png"></li>
            <li><p>(11) 9 1234-5678</p></li>
            <li><img src="imagens\telefonebranco.png"></li>
            <li><p>(11) 4567-8901</p></li>
            <li style="margin-left:100px; font-size: 20px;"><?php include "checkLogin.php";?></li>
            <li style = "margin-left: 150px;"><a>|</a></li>
            <li style="margin-left:auto;"></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
    </ul>
    </div>
    </header>
    <div class = "header-2">
            <ul>
            <li><img src="imagens\relapsoslogo.png"></li>
            <li style = "margin-left:800px;"><a href = "cliente.php">VOLTAR</a></li>
            </ul>
        </div>
        <table class = "lista-imoveis" style = "margin-top:10px;width:80%;font-family: 'Book Antiqua'">
    <?php $link = "xml\imoveis.xml";
$xml = simplexml_load_file($link)->pasteis;
foreach ($xml->sabores as $aula) {
    echo "<tr style = ''>";
    echo "<th>";
    echo "<img style = 'max-width:300px;border:3px solid gray;'src=' " . $aula->imagem . " '></img><br/>";
    echo "</th>";
    echo "<th style = 'background-color:white;border:2px solid gray;text-align:left;padding-left:15px;'>";
    echo "<font color = 'gray' size = '6pt'>" . utf8_decode($aula->nome) . "</font><br/>";
    echo "<font color = '#177f87'> Descrição</font> <br/> <font color = 'gray'>" . utf8_decode($aula->descricao) . "</font><br>";
    echo "<font color = 'gray'>Comodos: </font><font color = '#177f87'>" . utf8_decode($aula->comodos) . " comodos </font><br>";
    echo "<font color = 'gray'>Preço: </font><font color = '#177f87'>" . utf8_decode($aula->preco) . "</font><br>";
    echo "<font color = 'gray'>Quartos: </font><font color = '#177f87'>" . utf8_decode($aula->quartos) . "</font><br>";
    echo "<font color = 'gray'>Endereço: </font><font color = '#177f87'>" . utf8_decode($aula->endereco) . "</font><br>";
    echo "</th>";
}
?>

</table>
</body>
<footer>
        <center>
            <br>
            <hr>
            <h3 class="">Contato:</h3><br>
            <a href="https://www.facebook.com/relapso.relapsus.5" target="_blank"><img src="imagens\logo_facebook.png"></a>
            <a href="https://www.instagram.com/liderrelapsos/" target="_blank"><img src="imagens\logo_instagram.png"></a>
            <a href="https://twitter.com/RelapsoR" target="_blank"><img src="imagens\logo_twitter.png"></a>
            <a href=""><img src="imagens\logo_whatsapp.png"></a>
            <br><br>
            <p>Endereço: Rua Relapsa número: 5</p>
            <p>CEP: 12345-123</p>
            <p>Bairro: Vila dos Relapsos</p>
        </center>
    </footer>
</html>


