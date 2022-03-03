<?php
    // Definisikan Konstanta
    define('PHI', 3.14);
    define('DENAME', 'Inventori');
    define('DESERVER', 'localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas lingkaran dengan jari-jari '.$jari.'cm adalah '.$luas.'cm';
    echo "<br>Dengan keliling $kll cm";
?>
<hr>
<?php
    echo 'Nama databasenya : '.DENAME;
    echo '<br>Lokasi databasenya ada di '.DESERVER;
?>