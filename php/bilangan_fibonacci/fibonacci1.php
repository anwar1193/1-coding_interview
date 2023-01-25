<!-- 
    Tampilkan deret Fibonacci 10x

    Fibonacci
        angka pertama adalah 0, angka ke-2 adalah 1
        angka (mulai angka ke-3) adalah penjumlahan dari 2 angka sebelumnya

    Output : 0 1 1 2 3 5 8 13 21 34 55
 -->

 <?php  
    $fibonacci = [];

    $n1 = 0;
    $n2 = 1;

    for($i=0; $i<=10; $i++){
        if($i == 0 || $i == 1){
            array_push($fibonacci, $i);
        }else{
            $total = $n1 + $n2;
            array_push($fibonacci, $total);
            $n1 = $n2;
            $n2 = $total;
        }
    }

    echo 'Deret Fibonacci 10x : ';
    foreach($fibonacci as $data){
        echo $data.' ';
    }
 ?>