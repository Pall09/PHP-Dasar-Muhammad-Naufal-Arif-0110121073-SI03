<!DOCTYPE html>
<html>
<body>
    <?php
        // Perulangan biasa
        $ar_buah = ["p" => "Pepaya", "a" => "Apel", "m" => "Mangga", "j" => "Jambu"];
        echo '<p>Sebelum dilakukan Sorting</p>';
        echo '<ol>';
        foreach ($ar_buah as $k => $v) {
            echo '<li>Buah dengan key ' . $k . ' = ' . $v . '</li>';
        };
        echo '</ol>';

        // Sort
        sort($ar_buah);
        echo '<hr>';
        echo '<p>Setelah dilakukan Sort</p>';
        echo '<ol>';
        foreach ($ar_buah as $k => $v) {
            echo '<li>Buah dengan urutan huruf index ke ' . $k . ' = ' . $v . '</li>';
        };
        echo '</ol>';
        // Fungsi untuk mengurutkan data dari yg terkecil

        // Arsort
        arsort($ar_buah);
        echo '<hr>';
        echo '<p>Setelah dilakukan Arsort</p>';
        echo '<ol>';
        foreach ($ar_buah as $k => $v) {
            echo '<li>Buah dengan urutan huruf index ke ' . $k . ' = ' . $v . '</li>';
        };
        echo '</ol>';
        // Fungsi untuk mengurutkan data dari yg terbesar
    ?>
</body>
</html>