<?php
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];

    // Cek buah index ke 2
    echo $ar_buah[2];

    // Cek jumlah buah
    echo '<br>Jumlah Buah '. count($ar_buah);
    
    // Cetak seluruh buah
    echo '<ol>';
    foreach($ar_buah as $buah){
        echo '<li>'. $buah. '</li>';
    }
    echo '</ol>';

    // Tambahkan buah
    $ar_buah[] = "Durian";

    // Hapus buah index ke 1
    unset($ar_buah[1]);

    // Ubah buah index ke 2 menjadi manggis
    $ar_buah[2] = "Manggis";

    // Cetak seluruh buah dengan indexnya
    echo '<ul>';
    foreach ($ar_buah as $k => $v) {
        echo '<li>Buah index ke '. $k.' adalah '. $v.'</li>';
    }
    echo '</ul>';
?>