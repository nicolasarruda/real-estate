<?php
session_start();
?>
<?php
include '../../../login/auth/login-admin-check.php';
?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-add-form.css" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
  </head>
  <body>
<?php include '../../../../../db/connection/connection.php';?>
<?php include '../../../../components/navbar-back/index.php'?>
    <main>
      <center>
        <h1>Cadastro de Clientes</h1>
        <form class="form-insert-client" name="form-insert-client" method="post"
          action="../../../../../db/queries/admin/add-client-db.php"; required>
          <div class="form-input-insert-client-container">
            <p>Nome</p>
            <input type="text" name="name" value="" required />
            <p>Documento Nacional de Identificação</p>
            <input type="text" name="national_document" value="" required />
            <p>Selecione entre locatário ou proprietário</p>
            <div class="form-input-radio-client">
              <input type="radio" name="tipo_cliente" value="owner" required /> <label>Proprietário</label>
              <input type="radio" name="tipo_cliente" value="renter" required />
              <label>Locatário</label>
            </div>
            <p>Endereço</p>
            <input type="text" name="address" value=""required />
            <p>Telefone</p>
            <input type="text" name="phone" value="" required />
            <p>E-mail</p>
            <input type="email" name="email" value="" required />
            <p>Login</p>
            <input type="text" name="login" value="" required />
            <p>Senha</p>
            <input type="password" name="password" value="" required />
          </div>
          <div class="form-button-insert-client-container">
            <input type="submit" name="action" value="Cadastrar" />
            <input type="submit" name="action" value="Cancelar" />
          </div>
        </form>
      </center>

    </main>
  </body>
  <footer></footer>

