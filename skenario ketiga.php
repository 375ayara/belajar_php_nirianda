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
// pulang sekolah pukul 15:30 dan tiba di rumah pukul 15:45
// mengaji selama 30 menit, namun Andi harus mandi terlebih dahulu sebelum mengaji.
// Mengerjakan tugas sekolah selama 2 jam tanpa terputus.
// Menghafalkan dialog untuk festival kesenian budaya yang akan dia ikuti di sekolah selama setengah jam.
// ibu meminta Andi untuk membeli bumbu masakan sebelum makan malam.
// Makan malam dilakukan setelah sholat maghrib tetapi harus selesai sebelum sholat isya.
// Antara pukul 17:00 hingga sebelum tidur, Andi perlu menyisihkan waktu 30 menit tanpa terputus untuk chatting mengenai persiapan festival kesenian budaya yang akan dia ikuti di sekolah dengan Raya yang berada di Arab. Perbedaan waktu dengan Arab adalah 4 jam lebih cepat dari waktu di tempat Andi.
// Sebelum tidur, Andi dan keluarganya memiliki kebiasaan mengobrol bersama keluarga selama 30 menit. Mengobrol bersama keluarga dilakukan setelah tugas sekolah Andi selesai dikerjakan. Dapat dimajukan jika tidak ada tugas sekolah.
// Andi tidur jam 22:00 dan bangun jam 04:00.

/* Bahan diskusi:
1. Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan?
2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut!
3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?
4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?
5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?
*/ 

$jam = "22:00";

if($jam == "15:30") {
    echo "<br/> $jam Pulang Sekolah"; 
} else if($jam == "15:45") {
    echo "<br/> $jam Sampai di Rumah";
} else if($jam >=date("15:45") && $jam < "16:10") {
    echo "<br/> $jam Mandi"; 
} else if($jam >= "16:10" && $jam < "16:40") {
    echo "<br/> $jam Mengaji"; 
} else if($jam >= "16:40" && $jam < "17:10") {
    echo "<br/> Menghafalkan dialog festival kesenian budaya";
} else if($jam >= "17:10" && $jam < "17:40") {
    echo "<br/> $jam Beli bumbu";
} else if($jam >= "17:40" && $jam < "18:10") {
    echo "<br/> $jam Chattingan";
} else if($jam >= "18:10" && $jam < "18:35") {
    echo "<br/> $jam Sholat Magrib";
} else if($jam >= "18:35" && $jam < "19:05") {
    echo "<br/> $jam Makan malam";
} else if($jam >= "19:05" && $jam < "19:30") {
    echo "<br/> $jam Sholat Isya";
} else if($jam >= "19:30" && $jam < "21:30") {
    echo "<br/> $jam Mengerjakan tugas";
} else if($jam >= "21:30" && $jam < "22:00") {
    echo "<br/> $jam Ngobrol dengan keluarga";
} else if ($jam == date("04:00")) {
    echo "<br/> $jam Bangun Tidur";
} else if($jam >= "22:00" || $jam < "04:00") {
    echo "<br/> $jam Tidur";
}
else
{
    echo "dunia mimpi";
}

/* 
1. Agar jadwal Andi tidak bertabrakan/terlewatkan, maka kita memastikan semua kegiatan Andi memiliki rentang waktu yang jelas.
2. Urutan kegiatan Anddi yang kami buat berdasarkan logika keseharian dan prioritas aktifitas.
3. Jika Andi chatting pukul 17:40 WIB, maka Raya chattingan dengan Andi pukul 13:40 WAS. Perbedaan waktu antara WIB dan WAS adalah 4 jam, 4 jam lebih cepat di Indonesia dibanding Arab.
4. Saat ini tidak ada waktu luang yang signifikan dalam jadwal Andi karena semua waktu sudah terisi dengan kegiatan. Jika ada waktu luang, ketika Andi tidak ada tugas sekolah.
5. Jika tidak ada tugas sekolah, maka Andi akan memiliki waktu luang 2 jam.
*/
    ?>
</body>
</html>

