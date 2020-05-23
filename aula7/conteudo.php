<?php

$p = $_GET["pagina"];

switch($p){
    case "incio":
        include "inicio.php";
    break;
    case "empresa":
        include "empresa.php";
    break;
    default:
    include "inicio.php";
}

?>