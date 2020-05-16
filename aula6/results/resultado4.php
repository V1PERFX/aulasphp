<?php
switch($_POST["operacao"]){
    case "a" : 
       echo $_POST["valor1"] + $_POST["valor2"];
    break;
    case "s" : 
       echo $_POST["valor1"] - $_POST["valor2"];
    break;
    case "m" : 
       echo $_POST["valor1"] * $_POST["valor2"];
    break;
    case "d" : 
       echo $_POST["valor1"] / $_POST["valor2"];
    break;
    default : 
    echo "Escolha uma operação";
}

?>
<br/>
<a href="../index4.php">Voltar</a>