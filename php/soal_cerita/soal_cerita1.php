<!--  
    SOAL :
        Andi menabung dengan uang 750.000 di bulan pertama dan mendapatkan bunga 6% pada bulan berikutnya
        Setiap bulan berikutnya, Andi menyisihkan 3% dari tabungannya & maksimal disisihkan 3% dari 800.000
        Berapakah total tabungan Andi selama 1 tahun?

    Output :
        Saldo awal bulan-1 : 750000 , Bunga : 0 , Sisihkan : 0, Saldo Akhir : 750000
        Saldo awal bulan-2 : 750000 , Bunga : 45000 , Sisihkan : 23850, Saldo Akhir : 771150
        Saldo awal bulan-3 : 771150 , Bunga : 46269 , Sisihkan : 24000, Saldo Akhir : 793419
        Saldo awal bulan-4 : 793419 , Bunga : 47605.14 , Sisihkan : 24000, Saldo Akhir : 817024.14
        Saldo awal bulan-5 : 817024.14 , Bunga : 49021.4484 , Sisihkan : 24000, Saldo Akhir : 842045.5884
        Saldo awal bulan-6 : 842045.5884 , Bunga : 50522.735304 , Sisihkan : 24000, Saldo Akhir : 868568.323704
        Saldo awal bulan-7 : 868568.323704 , Bunga : 52114.09942224 , Sisihkan : 24000, Saldo Akhir : 896682.42312624
        Saldo awal bulan-8 : 896682.42312624 , Bunga : 53800.945387574 , Sisihkan : 24000, Saldo Akhir : 926483.36851381
        Saldo awal bulan-9 : 926483.36851381 , Bunga : 55589.002110829 , Sisihkan : 24000, Saldo Akhir : 958072.37062464
        Saldo awal bulan-10 : 958072.37062464 , Bunga : 57484.342237479 , Sisihkan : 24000, Saldo Akhir : 991556.71286212
        Saldo awal bulan-11 : 991556.71286212 , Bunga : 59493.402771727 , Sisihkan : 24000, Saldo Akhir : 1027050.1156338
        Saldo awal bulan-12 : 1027050.1156338 , Bunga : 61623.006938031 , Sisihkan : 24000, Saldo Akhir : 1064673.1225719
-->

<?php  
    $uang_andi = 750000;

    for($i=1; $i<=12; $i++){ //perulangan 12 bulan
        $bunga = 0;
        $sisih = 0;

        if($i > 1){ // jika bulan berikutnya (Bukan bulan pertama)

            $bunga = $uang_andi * (6/100); // bunga 6% setelah bulan berikutnya

            if($uang_andi + $bunga >= 800000){  // Jika total tabungan andi sudah lebih dari 800.000
                $sisih = 800000 * (3/100);
            }else{                              // Jika total tabungan andi belum mencapai 800.000
                $sisih = ($uang_andi + $bunga) * 3/100;
            }
            
        }

        $saldo_akhir = $uang_andi + $bunga - $sisih;

        echo "Saldo awal bulan-$i : $uang_andi , Bunga : $bunga , Sisihkan : $sisih, Saldo Akhir : $saldo_akhir <hr>";
        $uang_andi = $uang_andi + $bunga - $sisih;
    }
?>