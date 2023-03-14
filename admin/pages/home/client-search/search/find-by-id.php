<?php
session_start();
?>
<?php
include '../../../login/auth/login-admin-check.php';
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-find-by-id.css" type="text/css" />
    <script src="find-by-id-events.js"></script>
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
    <title>Imobiliária - Consultar cliente</title>
  </head>
  <body>
    <?php include '../../../../../db/connection/connection.php';?>
    <?php include '../../../../components/navbar-back/index.php';?>
    <main>
      <h1>Consultar Cliente</h1>
      <div class="renter-container">
      <form class="form-buttons-query-by-id"
        name="form"
        method="post"
        action="">
        <p>Digite o id do locatário</p>
        <input
          class="text-query-by-id"
          type="number"
          name="id"
          id="searchRenterId"
          value=""
          maxlength="32"
        />
        <input
          type="button"
          name="searchAction"
          id="searchAction"
          onclick="getSearchRenterValue()"
          value="Pesquisar"
        />
        <input
          type="button"
          name="searchAction"
          id="cancelAction"
          onclick="getCancelValue()"
          value="Cancelar"
        />
      </form>
      <table style="border:1px solid rgb(23, 127, 135)" class = "tabela-clientes" align=center width=80%>
      <?php include '../../../../../db/tables/find-by-id/index.php'?>

      </table>
      </div>

      <div class="owner-container">
      <form class="form-buttons-query-by-id"
        name="form"
        method="post"
        action="">
        <p>Digite o id do proprietário</p>
        <input
          class="text-query-by-id"
          type="number"
          name="id"
          id="searchOwnerId"
          value=""
          maxlength="32"
        />
        <input
          type="button"
          name="searchAction"
          id="searchAction"
          onclick="getSearchOwnerValue()"
          value="Pesquisar"
        />
        <input
          type="button"
          name="searchAction"
          id="cancelAction"
          onclick="<?php include '../../../../../db/queries/admin/find-by-id/find-owner-by-id-db.php'?>"
          value="Cancelar"
        />
      </form>
      <table style="border:1px solid rgb(23, 127, 135)" class = "tabela-clientes" align=center width=80%>
      <?php include '../../../../../db/tables/find-by-id/index.php'?>

      </table>
      </div>
    </main>
  </body>
</html>
<?php
mysqli_close($connection);
?>
