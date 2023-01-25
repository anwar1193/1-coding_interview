<!-- 
    Cari bilangan prima di dalam array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15)

    Output :
        Bilangan prima : 2 3 5 7 11 13
 -->

 <?php  
    echo 'Bilangan prima : ';

    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

    for($i=1; $i<=count($angka); $i++){
        $jml_bisa_bagi = 0;

        for($j=1; $j<=count($angka); $j++){
            if($i % $j == 0){ // contoh 2 -> 2/1 (bisa), 2/2 (bisa), 2/3 (tidak), 2/4 (tidak), dst (angka 2 bisa dibagi 2 kali (tidak kurang, tidak lebih) berarti masuk bilangan prima)
                $jml_bisa_bagi++;
            }
        }

        if($jml_bisa_bagi == 2){ // jika sebuah angka bisa dibagi 2x (dibagi 1 dan dibagi dirinya sendiri)
            echo $i.' ';
        }
    }
 ?>