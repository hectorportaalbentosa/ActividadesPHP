<?php
namespace Controllers;

class Controller1{
    function concat(){
     $var1 = $_GET["var1"];
     $var2 = $_GET["var2"];
     echo "<h1> $var1 $var2 </h1>";
    }
}



?>