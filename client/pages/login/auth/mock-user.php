<?php
session_start();

$login = array("Relapso1", "Relaps2");
$senha = array("rel123", "rel321");

$lengthArray = count($login);
$msg = false;

for ($i = 0; $i < $lengthArray; $i++) {
    if ($_POST["login"] == $login[$i] && $_POST["senha"] == $senha[$i]) {
        $msg = true;
        break;
    }
}

include '';

if ($msg) {
    $_SESSION["logado"] == true;
    $_SESSION["user"] == $_POST["login"];
    header("Location:../../renter/cliente.php");
} else {
    header("Location:../index.php");
}
