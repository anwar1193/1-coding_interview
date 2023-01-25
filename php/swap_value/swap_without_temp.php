<!--  
    Write an algorithm to swap the following value (without temp variable)
    a = 10 , b = 3
-->

<?php  
    $a = 10;
    $b = 3;

    $b = $b + $a; // 13

    $a = $b - $a; // 13 - 10 = 3
    $b = $b - $a; // 13 - 3 = 10

    echo $a;
    echo '<br>';
    echo $b;
?>