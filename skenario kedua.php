<html>
    <head>
        <title>
            tugas percabangan lila salwa
        </title>
    </head>

<body>
    Tugas percabangan 
    <br> Anggota :
    <br> 1. Nirianda Kaylila (22)
    <br> 2. Salwa Rosyita (30)

<?php
    // jam 00:00 - 04:00 keterangan dini hari 
    // jam 04:00 - 10:00 keterangan pagi 
    // jam 10:00 - 15:00 keterangan siang 
    // jam 15:00 - 17:30 keterangan sore 
    // jam 17:30 - 18:30 keterangan petang 
    // jam 18:30 - 24:00 keterangan malam 
    // kurang dari 00:00 dan lebih dari 24:00 keterangan dunia lain

    $jam = "00:00";

    if($jam >=date("00:00") && $jam <=date("04:00")) {
        echo "<br/> $jam <br/> Keterangan : Dini hari";
    } else if ($jam >=date("04:00") && $jam <=date("10:00")) {
        echo "<br/> $jam <br/> Keterangan : Pagi";
    } else if ($jam >=date("10:00") && $jam <=date("15:00")) {
        echo "<br/> $jam <br/> Keterangan : Siang";
    } else if ($jam >=date("15:00") && $jam <=date("17:30")) {
        echo "<br/> $jam <br/> Keterangan : Sore";
    } else if ($jam >=date("17:30") && $jam <=date("18:30")) {
        echo "<br/> $jam <br/> Keterangan : Petang";
    } else if ($jam >=date("18:30") && $jam <=date("24:00")) {
        echo "<br/> $jam <br/> Keterangan : Malam";
    }
    else 
    {
        echo "dunia Lain";
    }
    ?>
</body>
</html>