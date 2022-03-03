<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Fungsi 2</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .d-flex {
            display: flex;
            justify-content: center;
            
        }
        .bagian {
            width: 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        ul, li{
            list-style: none;
            padding: 1px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="bagian bagian1">
        <!-- Fungsi Array Pop -->
        <?php
            echo '<h4>Array Pop</h4>';
            $tims = ["Julmy","Ucup","Jali","Nopall"];
            array_pop($tims);
            foreach($tims as $person) {
                echo '<ul>';
                echo '<li>'.$person . '</li>';
                echo '</ul>';
            }
        ?>
        <hr>
        <!-- Fungsi Array Push -->
        <?php
            echo '<h4>Array Push</h4>';
            $tims = ["Julmy","Ucup","Jali","Nopall"];
            array_push($tims,'Thalhah');
            foreach($tims as $person) {
                echo '<ul>';
                echo '<li>'.$person . '</li>';
                echo '</ul>';
            }
        ?>
        </div>
        <div class="bagian bagian2">
        <!-- Fungsi Shift Array -->
        <?php
            echo '<h4>Shift Array</h4>';
            $tims = ["Kelinci","Ayam","Kucing","Ular"];
            array_shift($tims);
            foreach($tims as $person) {
                echo '<ul>';
                echo '<li>'.$person . '</li>';
                echo '</ul>';
            }
        ?>
        <hr>
        <!-- Fungsi Unshift Array -->
        <?php
            echo '<h4>Unshift Array</h4>';
            $tims = ["Kelinci","Ayam","Kucing","Ular"];
            array_unshift($tims,"Bebek");
            foreach($tims as $person) {
                echo '<ul>';
                echo '<li>'.$person . '</li>';
                echo '</ul>';
            }
        ?>
        </div>
    </div>
</body>
</html>