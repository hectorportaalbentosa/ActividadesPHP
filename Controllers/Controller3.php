<?php
namespace Controllers;

class Controller3{
    function concat(){
        $var1 = $_GET["var1"];
        echo "<h1> Tabla de multiplicar del $var1 </h1>";
        for($i = 0; $i <= 10; $i++){
           echo "<h2>" . $var1 .  "*" . $i . "=" . ($var1 * $i) . "</h2>";
        }
    }
}



?>