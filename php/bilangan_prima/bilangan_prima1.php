<!--  
    Cari bilangan prima dari angka 1 s/d 100

    Output :
        Bilangan Prima : 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97
-->

<?php  
    echo 'Bilangan Prima : ';
    for($i=1; $i<=100; $i++){

        $jml_bisa_bagi = 0;

        for($j=1; $j<=100; $j++){
            if($i % $j == 0){ // contoh 2 -> 2/1 (bisa), 2/2 (bisa), 2/3 (tidak), 2/4 (tidak), dst (angka 2 bisa dibagi 2 kali (tidak kurang, tidak lebih) berarti masuk bilangan prima)
                $jml_bisa_bagi++;
            }
        }

        if($jml_bisa_bagi == 2){ // jika sebuah angka bisa dibagi 2x (dibagi 1 dan dibagi dirinya sendiri)
            echo $i.' ';
        }

    }
?>