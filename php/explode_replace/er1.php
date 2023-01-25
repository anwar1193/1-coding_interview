<!--  
    Input : Total Pembelian Baju Dinas Sebesar Rp 675.000
    Output 1 : 675.000
    Output 2 : 675000
-->

<?php  
    $input = "Total Pembelian Baju Dinas Sebesar Rp 675.000";

    $explodeInput = explode(' ', $input);

    // print_r($explodeInput);

    // echo $explodeInput[6];
    echo end($explodeInput);

    echo '<br>';
    
    echo str_replace('.','', $explodeInput[6]);
?>