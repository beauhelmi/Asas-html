<?php 
    function tambah($a , $b){
        return $a + $b;
    }

    function ada_baki ($a, $b){
        return ($a % $b);
    }

    echo var_dump(tambah(9, 3));
    echo var_dump(ada_baki(9,3));

    ?>