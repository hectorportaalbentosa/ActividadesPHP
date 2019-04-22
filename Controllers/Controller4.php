<?php
namespace Controllers;

class Controller4{
    function concat(){
        $var1 = $_GET["var1"];
        $mitad = $var1 / 2;
        if(is_float($mitad)){
            $mitad = round($mitad);
        }else{
            $mitad++;
        }
        if($var1 <= 15 && $var1 >= 4){
            for($i = 0; $i < $mitad ; $i++){
                echo "<p> * </p>";
            }
            echo "<p> ******* </p>";
            for($i = $mitad + 1; $i <= $var1 ; $i++){
                echo "<p> *".str_repeat('&nbsp;', 10)."* </p>";
            }
        }else{
            echo "No se puede mostrar la silla";
        }
    }
}



?>