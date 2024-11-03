<?php 
/*
    $x = 1;

    echo "$x <br>";
    $x = 15 - 4; // tolak, hasil 11
    echo "$x <br>";
    $x = 15 + 4; // tambah, hasil 19
    echo "$x <br>";
    $x = 15 / 4; // bahagi, hasil 3.75
    echo "$x <br>";
    $x = 15 * 4; // darab, hasil 60
    echo "$x <br>";
    $x = 15 % 4; // modulus (baki), hasil 3
    echo "$x <br>";
    $x = 15 ** 4; // kuasa, hasil 50,625
    echo "$x <br>";
*/
/*
    $x = 15; // memberi nilai 15
    echo "$x <br>";
    
    $x += 15; // ditambah 15
    echo "$x <br>";
    
    $x -= 15; // ditolak 15
    echo "$x <br>";

    $x *= 15; // didarab 15
    echo "$x <br>";

    $x /= 15; // dibahagi 15
    echo "$x <br>";

    $x %= 15; // operasi modulus
    echo "$x <br>";
    */
    /*
    $x = 15;

    echo $x++ . '<br>'; // memberi nilai, kemudian tambah nilai 
    echo $x.' -- <br>'; // nilai sebenar
    echo ++$x . '<br>'; // ditambah 1, kemudian pamerkan nilai
    echo $x.' -- <br>'; // nilai sebenar
    echo $x-- . '<br>'; // memberi nilai, kemudian tolak nilai
    echo $x.' -- <br>'; // nilai sebenar
    echo --$x . '<br>'; // ditolak 1, kemudian pamerkan nilai
    echo $x.' -- <br>'; // nilai sebenar

    */

    $x = 10;
    $y = 15;

    if ($x === $y) {
        echo "YES";
    } else {
        echo "NO";
    }

    /* 

        if ($x === $y) {. . .} // sama dengan, very strict
        if ($x != $y) {. . .} // tidak sama dengan, tak consider data type
        if ($x !== $y){. . . } // tidak sama dengan, consider data type
        if($x > $y){. . . } // lebih besar
        if($x >= $y){. . . } // lebih besar atau sama dengan
        if($x < $y){. . . } // lebih kecil
        if($x <= $y){. . .} // lebih kecil atau sama dengan

?>