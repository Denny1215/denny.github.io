<?php
    function compute($num1, $num2, $operation) {
        $total = 0;
        switch($operation) {
            case '+':
                $total = $num1 + $num2;
                break;
            case '-':
                $total = $num1 - $num2;
                break;
            case '*':
                $total = $num1 * $num2;
                break;
            case '/':
                $total = $num1 / $num2;
                break;
            case '%':
                $total = $num1 % $num2;
                break;
            default:
                $total = "Invalid operation!";
                break;
        }

        return $total;
    }

    $total = compute(10, 5, '/');
    echo $total;
?>