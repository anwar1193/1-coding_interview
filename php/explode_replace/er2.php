<!--  
    Input : "Kd Brg:891298, NmBrg:Fanta, HrgBrg:7000, QtyBrg:10, TtlByr:70000"

    Buatlah menjadi variable : $Kd_Brg, $NmBrg, $HrgBrg, QtyBrg, TtlByr;
    lalu tampilkan/echo nilai dari variable tsb
-->

<?php  
    // Syarat parse_str : parse_str("name=Peter&age=43"); echo $name; echo $age;

    $input = "Kd Brg:891298, NmBrg:Fanta, HrgBrg:7000, QtyBrg:10, TtlByr:70000";

    $input1 = str_replace(":", "=", $input);
    $input2 = str_replace(", ", "&", $input1);

    parse_str($input2);

    echo $Kd_Brg."<br>";
    echo $NmBrg."<br>";
    echo $HrgBrg."<br>";
    echo $QtyBrg."<br>";
    echo $TtlByr."<br>";
?>