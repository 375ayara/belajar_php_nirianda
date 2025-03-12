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
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

// Hari menggunakan for
echo "<br/> Hari: ";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . " ";
}

// Tanggal menggunakan foreach
echo "<br/> Tanggal: ";
foreach ($tanggal as $t) {
    echo $t . " ";
}

// Bulan menggunakan while
echo "<br/> Bulan: ";
$i = 0;
while ($i < count($bulan)) {
    echo $bulan[$i] . " ";
    $i++;
}

// Tahun menggunakan do while
echo "<br/> Tahun: ";
$i = 0;
do {
    echo $tahun[$i] . " ";
    $i++;
} while ($i < count($tahun));

// Menampilkan tanggal spesifik
echo "<br/> {$hari[1]}, {$tanggal[9]} - {$bulan[2]} - {$tahun[1]} <br/>";
?>

<?php
// Menggunakan perulangan for buat hitung
$anakAyam = 30;

for ($i = $anakAyam; $i >= 1; $i--) {
    if ($i == 1) {
        echo "<br/> Anak ayam turun $i, tinggal induknya.";
    } else {
        echo "<br/> Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "\n";
    }
}
echo "<br/>";
?>

<?php
// Mawar yang dimiliki Sholeh
$mawarDimiliki = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    $mawarDimiliki[] = $mawar;
}

// Mawar yang akan diberikan ke ibunya
$mawarDiberikan = [];
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawarDiberikan[] = $mawar;
}

// mawar yang dimiliki Sholeh
echo "<br/> Mawar yang dimiliki Sholeh: " . implode(", ", $mawarDimiliki);
echo "<br/> Jumlah mawar yang dimiliki Sholeh: " . count($mawarDimiliki);

// mawar yang dikasih ke ibunya
echo "<br/> Mawar yang diberikan ke ibunya: " . implode(", ", $mawarDiberikan);
echo "<br/> Jumlah mawar yang diberikan ke ibunya: " . count($mawarDiberikan);

// mawar yang dimiliki sholeh tapi ga dikasih ke ibunya)
$mawarUntukSholehah = array_diff($mawarDimiliki, $mawarDiberikan);

echo "<br/> Mawar yang akan diberikan ke Sholehah: " . implode(", ", $mawarUntukSholehah);
echo "<br/> Jumlah mawar yang akan diberikan ke Sholehah: " . count($mawarUntukSholehah);
echo "<br/>";
    ?>

    <?php
// array buat suasana hati dan lagu
$suasanaHatiLagu = [
    ["Galau", "Mesin Waktu - Budi Doremi"],
    ["Bersemangat", "Selamat Pagi - Ran"],
    ["Marah", "Yang Patah Tumbuh, Yang Hilang Berganti - Banda Neira"]
];

// perulangan suasana hati dan lagu yang pas
foreach ($suasanaHatiLagu as $hatiLagu) {
    echo "<br/> Jika Ambyar sedang {$hatiLagu[0]}, maka dia mendengarkan lagu: {$hatiLagu[1]}\n";
}
    ?>

</body>
</html>