<?php
session_start();
include '../../../../db/connection/connection.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $get_clients = mysqli_query($connection, "SELECT * FROM brandname_tb_admins WHERE login = '$login' AND password = '$password' ");
    $row_clientes = mysqli_num_rows($get_clients);
    if ($row_clientes == 1) {

        $_SESSION['logged'] = true;
        $_SESSION["user"] = $_POST['login'];
        header("Location:../../home/index.php");
        exit();
    } else {
        header("Location:../index.php");

        exit();
        ?>
        <!-- <script>
            alert("Usuário ou senha inválida");
        </script> -->
        <?php
}
}

mysqli_close($connection);
