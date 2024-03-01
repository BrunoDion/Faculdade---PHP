<?php 
    //ex 01
    $string = "<p>Manipulaçao de Strings<p>";

    echo str_replace(["a","e","i","o", "u","~"],"*", $string);

    //ex02

    function primo($numero){
        for($j = 2; $j < $numero; $j++){
            if($numero % $j === 0){
                return false;
            }
        }
        return true;
    }

    $num = 19;
    if(primo($num)){
        echo "O $num é um numero primo.";
    }else{
        echo "O $num não é um numero primo.";
    }


?>