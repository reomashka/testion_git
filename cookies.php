<?php

$name = $_COOKIE["userName"];

if (isset($_POST["test"])){
    setcookie("userName", "");
    header("Location: http://phpmysql/");
    exit();
}

if (isset($_GET["name"])){
    setcookie("userName", $_GET["name"]);
    header("Location: http://phpmysql/");
    exit();
s
}
werrr
