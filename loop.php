<?php 

    // for loop

    for($x = 1000; $x > 0; $x -= 100){
        echo "$x ali <br>";
    }

    // foreach loop

    $kelas = [];
    $kelas[] = [
        'nama' => 'Siti',
        'umur' => '22'
    ];
    $kelas[] = [
        'nama' => 'Atan',
        'umur' => '11'
    ];

    foreach($kelas as $murid){
        
        echo $murid['nama'];
        echo "<br>";
        echo '<pre>';
        print_r($murid);
        echo '</pre>';
    }
    ?>