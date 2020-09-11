<?php
    $num1 = $_POST["num1"] ; 
    $num2 = $_POST["num2"] ; 
    $ope = $_POST["operator"]  ;

    switch($ope)
    {
        case "+":
            echo $num2 + $num1 ; 
            break ; 
        case "-":
            echo $num1 - $num2 ; 
            break ; 
        case '*':
            echo $num1 * $num2 ;
            break ;
        case "/":
            echo $num1 / $num2 ;
             break ;
        default : 
            echo "le signe entre n'est pas bon " ; 

    }
?>