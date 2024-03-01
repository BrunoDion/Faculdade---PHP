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
        echo "<p>O $num é um numero primo.</p>";
    }else{
        echo "<p>O $num não é um numero primo.</p>";
    }



    //ex 03 - inverter uma string sem usar a função str
    $string = "Repeticao";
    $invertida = "";

    for($i = strlen($string) - 1; $i >= 0; $i--){
        $invertida .= $string[$i];
    }

    echo "<p>$invertida</p>";



    //ex 004 - Crie uma função que receba um número e retorne se é positivo, negativo ou zero.

    function numero($num){
        if($num < 0){
            echo "<p> $num é um numero negativo!</p>";
        }else if($num == 0){
            echo "<p> $num é um numero igual a zero!</p>";
        }else if($num > 0){
            echo "<p> $num é um numero positivo!</p>";
        }
    }

    numero(1);



    //ex 005 - Conte o número de palavras em uma frase e imprima cada palavra em uma nova

    $string = "Eu amo PHP";

    echo str_word_count($string);
    echo "<br>";
    echo str_replace(" ","<br>",$string);








    // ex 06 Crie uma função que verifica se uma palavra é um palíndromo

    function isPalindromo($palavra){
        if($palavra == strrev($palavra)){
            echo "<p>$palavra é um palindromo!</p> ";
        }else{
            echo "<p>$palavra não é um palindromo!</p> ";
        }
    }

    isPalindromo("radar");


    // ex07 - Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por ?

    for($i = 0; $i <= 20; $i++){
        echo $i % 3 == 0 ? '?' : "$i";
            echo " ";
            
    }

    echo "<br>";

    // ex08 - Crie uma função que remova os espaços em branco de uma string.

    $str = "Eu odeio PHP";
    echo "<br>";
    echo str_replace(" ","",$str);



    // ex009 - // Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.
    $num1 = 0;
    $num2 = 1;
    echo $num1 ."||". $num2;
    echo "<br>";
    for($i = 0;$i < 10;$i++){
        $aux = $num2;
        $num2 += $num1;
        $num1 = $aux;
        echo $num1 ."||". $num2;
        echo "<br>";
        
    }

    echo "<br>";


    
// ex10- Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).
        function pangrama($str) { 
            
            $str = strtolower($str); 
            $letras = array_fill(0, 26, false); 
            for ($i = 0; $i < strlen($str); $i++) { 
                $char = $str[$i]; 
                if (ctype_alpha($char)) { 
                    $letras[ord($char) - ord('a')] = true; 
                } 
            } 
            return !in_array(false, $letras); 
        } 
        $str = "abcdefghijklmnopqrstuvwxyz";

        if(pangrama($str)){
            echo "true";
        }
        else{
            echo "false";
        }
        
        ?>