<?php
    //fungsi vollume balok (panjang x lebar x tinggi)

    function volbalok($panjang, $lebar, $tinggi){
        $x = $panjang * $lebar * $tinggi ; 
        echo "volume dari balok yang berukuran panjang ".$panjang."cm, lebar ".$lebar."cm dan tinggi ".$tinggi."cm adalah: <b>".$x." cm**3 </b>";
    }

    volbalok(15, 5, 7);
?>