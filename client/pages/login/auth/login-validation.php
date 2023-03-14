<?php
session_start();
include '../../../../db/connection/connection.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $get_renters = mysqli_query($connection, "SELECT * FROM brandname_tb_renters WHERE login = '$login' AND password = '$password' ");
    $row_renters = mysqli_num_rows($get_renters);

    if ($row_renters == 1) {
        $_SESSION['logged'] = true;
        $_SESSION["user"] = $_POST['login'];
        header("Location:../../clients/renters/index.php");
        exit();

    } else {
        $get_owners = mysqli_query($connection, "SELECT * FROM brandname_tb_owners  WHERE login = '$login' AND password = '$password' ");
        $row_owners = mysqli_num_rows($get_owners);

        if ($row_owners == 1) {
            $_SESSION['logged'] = true;
            $_SESSION["user"] = $_POST['login'];
            header("Location:../../clients/owners/index.php");
            exit();
        } else {
            header("Location:../index.php");
            exit();
        }
    }
}

mysqli_close($connection);
