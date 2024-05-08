<?php

include 'file2.php';

function multiply_three_numbers($num1, $num2, $num3=5) {
    
    $conn = connect_to_database();
    
    
    $result = $num1 * $num2 * $num3;
    
    $conn->close();
    
    return $result;
}

$num1 = 2;
$num2 = 4;
$num3 = 5;
$result = multiply_three_numbers($num1, $num2, $num3);
echo $result;


?>
