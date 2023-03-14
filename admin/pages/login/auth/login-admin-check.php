<?php

if (!isset($_SESSION["logged"]) || $_SESSION["logged"] != true) {
    header("Location:./index.php");
} else {

}
