<!-- SOAL : Buatlah sebuah fungsi factorial, contoh : saat memasukan angka 5, maka hasilnya = 5 x 4 x 3 x 2 x 1 = 120 -->

<?php  

    function factorial($value){
        if($value == 0){
            return 1;
        }else{
            return $value * factorial($value - 1);
        }
    }

    echo factorial(5);

?>