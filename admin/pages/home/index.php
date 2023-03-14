<?php
session_start();
include '../login/auth/login-admin-check.php';
include '../../../db/connection/connection.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href="style.css" type ="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
    </head>
    <body>
    <?php include '../../components/navbar-home/index.php'?>
            <main>
            <center><h1>Bem-Vindo Administrador!</h1><center>
            <p class = "primeiro-parag">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nesse site é possível gerenciar várias opções sobre a imobiliária. Dentre elas estão a consulta de clientes, cadastro de clientes, cadastro de imóveis e etc. Espero que use esse site com sabedoria.</p>

            <p class = "segundo-parag">O símbolo de </p>
            <section class="info-icon">
            <img alt="" src="../../assets/images/list-client-home-icon.svg">
            <p class = "segundo-parag">é o símbolo de <b>LISTA DE CLIENTES</b>, aqui podemos visualizar a lista de todos os nossos clientes</p>
            </section>

            <section class="info-icon">
            <img alt="" src="../../assets/images/add-client-home-icon.svg">
            <p class = "segundo-parag">é o símbolo <b>ADICIONAR CLIENTES</b>, o propósitop desse símbolo é de realizar novos cadastros de clientes</p>
            </section>

            <section class="info-icon">
            <img alt="" src="../../assets/images/delete-client-home-icon.svg">
            <p class = "segundo-parag">é o símbolo <b>REMOVER CLIENTES</b>, o propósitop desse símbolo é de realizar a remoção de um cliente de acordo com a sua ID</p>
            </section>

            <section class="info-icon">
            <img alt="" src="../../assets/images/edit-client-home-icon.svg">
            <p class = "segundo-parag">é o símbolo <b>EDITAR CLIENTES</b>, o propósitop desse símbolo é de alterar as informações de um cliente de acordo com a sua ID</p>
            </section>

            <section class="info-icon">
            <img alt="" src="../../assets/images/generate-token-home-icon.svg">
            <p class = "segundo-parag">é o símbolo <b>GERAR NOVO TOKEN</b>, o propósitop desse símbolo é de alterar o token gerado automaticamente do usuário criando outro token.</p>
            </section>

            <section class="info-icon">
            <img alt="" src="../../assets/images/find-client-by-id-home-icon.svg">
            <p class = "segundo-parag">é o símbolo <b>BUSCA POR ID</b>, o propósitop desse símbolo é de realizar uma busca no BD de acordo com o ID do cliente</p>
            </section>
        </main>

<?php
mysqli_close($connection);
?>