<!--  
    array = [1,4,5,3,2,5,3,4,8,5,4,3,6,0,4,3,2,1,5,9,9,4,3,1,3,0,2,2,4,6,2,4,7,4]

    SOAL :
        1. Tampilkan array diatas tanpa berulang (tanpa ada angka yang sama) & tampilkan ada berapa angka yang berbeda
        2. Tampilkan berapa jumlah dari tiap2 angka


    OUTPUT :

        Array (All) : 1 4 5 3 2 5 3 4 8 5 4 3 6 0 4 3 2 1 5 9 9 4 3 1 3 0 2 2 4 6 2 4 7 4

        Array (Tidak Duplikat) : 1 4 5 3 2 8 6 0 9 7
        Jumlah (Tidak Duplikat) : 10

        Angka 1 sebanyak : 3
        Angka 4 sebanyak : 8
        Angka 5 sebanyak : 4
        Angka 3 sebanyak : 6
        Angka 2 sebanyak : 5
        Angka 8 sebanyak : 1
        Angka 6 sebanyak : 2
        Angka 0 sebanyak : 2
        Angka 9 sebanyak : 2
        Angka 7 sebanyak : 1
-->

<?php  
    $array = [1,4,5,3,2,5,3,4,8,5,4,3,6,0,4,3,2,1,5,9,9,4,3,1,3,0,2,2,4,6,2,4,7,4];
    $array_tampung = [];
    $count_tiap_angka_v = '';

    for($i=0; $i<count($array); $i++){
        $ketemu = false;

        for($j=0; $j<count($array_tampung); $j++){
            if($array[$i] == $array_tampung[$j]){ // Jika ada array_tampung yg nilainya sama dengan array (utama)
                $ketemu = true;
            }
        }

        if($ketemu == false){ // jika tidak ada data sama ditemukan (antara array (utama) dan array_tampung)
            array_push($array_tampung, $array[$i]); // masukkan nilai array utama ke dalam array tampung

            // Cari ada berapa (count) setiap angka dari array utama
            $total_ketemu = 0;
            for($k=0; $k<count($array); $k++){
                if($array[$i] == $array[$k]){
                    $total_ketemu++;
                }
            }

            $count_tiap_angka_v .= "Angka ".$array[$i]." sebanyak : ".$total_ketemu."<br>";
        }
    }

    echo 'Array (All) : ';
    foreach($array as $row){
        echo $row.' ';
    }

    echo '<br><br> Array (Tidak Duplikat) : ';
    foreach($array_tampung as $row){
        echo $row.' ';
    }

    echo '<br> Jumlah (Tidak Duplikat) : '.count($array_tampung);

    echo '<br><br>'.$count_tiap_angka_v;
?>