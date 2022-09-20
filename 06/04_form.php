<?php 
$num1 = filter_input(INPUT_GET, 'num1');
$num2 = filter_input(INPUT_GET, 'num2');
$operator = filter_input(INPUT_GET, 'operator');

switch($operator){
    case 'addition':
        echo $num1 . ' + ' . $num2 . ' = ' . $num1 + $num2;
        break;

    case 'subtraction':
        echo $num1 . ' - ' . $num2 . ' = ' . $num1 - $num2;
        break;

    case 'multiplication':
        echo $num1 . ' * ' . $num2 . ' = ' . $num1 * $num2;
        break;

    case 'division':
        echo $num1 . ' / ' . $num2 . ' = ' . $num1 / $num2;
        break;

    default:
        echo '正しい演算子を指定して下さい';
        break;


}
