<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária RELAPSOS</title>
    <link rel = "stylesheet" href="style.css" type = "text/css">
    <script language="JavaScript" src="js/funcoes.js"></script>
</head>
<body>
    <?php include '../../components/navbar/index.php'?>
    <div class = "header-2">
            <ul>
            <li><img src="../../assets/images/logo-relaps.png"></li>
            <li style = "margin-left:800px;"><a href = "cliente.php">VOLTAR</a></li>
            </ul>
    </div>
    <div class="contact-content-container">
      <h2>Contatos:</h2>
      <p>telefone: (11) 4590-4545</p>
    </div>

</body>
<?php include '../../components/footer/index.php'?>
</html>