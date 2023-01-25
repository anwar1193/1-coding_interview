<!--  
    Write an algorithm to swap the following value (with temp variable)
    a = 10 , b = 3
-->

<?php  
    $a = 10;
    $b = 3;

    $temp = $b;
    $b = $a;
    $a = $temp;

    echo $a;
    echo '<br>';
    echo $b;
?>