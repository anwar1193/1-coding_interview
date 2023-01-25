<!-- 
    Pisahkan bilangan ganjil & genap dari 1 - 100 

    Output :
        nilai genap : 0 2 4 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 52 54 56 58 60 62 64 66 68 70 72 74 76 78 80 82 84 86 88 90 92 94 96 98 100
        nilai ganjil : 1 3 5 7 9 11 13 15 17 19 21 23 25 27 29 31 33 35 37 39 41 43 45 47 49 51 53 55 57 59 61 63 65 67 69 71 73 75 77 79 81 83 85 87 89 91 93 95 97 99

    Ketentuan : Data (ganjil & genap) harus di tampung ke dalam array dulu, baru di looping lagi
-->

<?php  
    $data_genap = [];
    $data_ganjil = [];

    for($i=0; $i<=100; $i++){
        if($i % 2 == 0){
            array_push($data_genap, $i);
        }else{
            array_push($data_ganjil, $i);
        }
    }

    echo 'nilai genap : ';
    foreach($data_genap as $row_genap){
        echo $row_genap.' ';
    }

    echo '<br>';

    echo 'nilai ganjil : ';
    foreach($data_ganjil as $row_ganjil){
        echo $row_ganjil.' ';
    }
?>