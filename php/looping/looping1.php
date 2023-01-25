<!--  
    Soal :
    Write an algorithm to print the following
    *******
     *****
      ***
       *
-->

<?php  
    function triangle($length){
        $result = '';

        for($i=$length; $i>=1; $i--){

            for($j=0; $j<=$length-$i; $j++){
                $result .= '&nbsp';
            }

            for($k=0; $k<(2*$i-1); $k++){
                $result .= '*';
            }

            $result .= '<br>';
        }
        return $result;
    }

    echo triangle(4);
?>