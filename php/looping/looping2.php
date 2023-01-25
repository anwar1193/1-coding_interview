<!--  
    Dari angka 1 s/d 100, berapa kali angka 7 muncul?
-->

<?php  
    $output = 0;

    for($i=1; $i<=100; $i++){
        $splitAngka = str_split($i);

        for($j=0; $j<count($splitAngka); $j++){
            if($splitAngka[$j] == 7){
                $output++;
            }
        }
    }

    echo $output;
?>