<?php
include '../../../db/connection/connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária - Recuperar senha</title>
    <link rel = "stylesheet" href="style.css" type = "text/css">
</head>
<body>
    <?php include '../../components/navbar/index.php'?>
    <?php include '../../components/header/index.php';?>
    <div class ="inserir-token" style="background-color:rgb(23,127,135);width: 100%;align-items: center;display: flex;flex-direction: column;padding:40px;">
    <h1 style="color:white;">Entre com o seu Token de Segurança</h1><br><br>
    <form  style = "color:rgb(23,127,135);" name="rec" method="post" action="../../../db/queries/client/recover-password.php">
    <input type="text" name="token" value="" placeholder="Token" style="padding:20px;border:1px solid white;outline:none;width:400px;border-radius: 20px;"><br><br>
    <input type="submit" value="ENVIAR" style="margin-left: 175px;padding:10px;border:1px solid white;border-radius: 20px;outline:none;cursor:pointer;">
  </form>
            </div>

</body>
<?php include '../../components/footer/index.php'?>
</html>



<?php
mysqli_close($connection);
?>