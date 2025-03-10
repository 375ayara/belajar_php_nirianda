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

$tugas = "ada"; 
$waktu_ngobrol = "maju";

//Menampilkan jadwal keseharian Andi 
echo "<h2>Jadwal Harian</h2>";
echo "<ul>";
echo "<li><strong>15:30-15:45</strong>: Andi pulang sekolah</li>";
echo "<li><strong>15:45-16:10</strong>: Andi sedang mandi</li>";
echo "<li><strong>16:10-16:40</strong>: Andi sedang mengaji</li>";
echo "<li><strong>16:40-17:10</strong>: Andi sedang menghafalkan festival kesenian budaya</li>";
echo "<li><strong>17:10-17:40</strong>: Andi sedang membeli bumbu</li>";
echo "<li><strong>17:40-18:10</strong>: Andi sedang chattingan</li>";
echo "<li><strong>18:10-18:35</strong>: Andi sedang sholat maghrib</li>";
echo "<li><strong>18:35-19:05</strong>: Andi sedang makan malam/li>";
echo "<li><strong>19:05-19:30</strong>: Andi sedang sholat isya</li>";

if ($tugas == "ada")  {
    echo "<li><strong>19:30-21:30</strong>: Andi sedang mengerjakan tugas</li>";
    echo "<li><strong>21:30-22:00</strong>: Andi sedang mengobrol dengan keluarga</li>";
} else {
    if ($waktu_ngobrol == "maju") {
        echo "<li><strong>19:30-20:00</strong>: Andi sedang mengobrol dengan keluarga</li>";
        echo "<li><strong>20:00-22:00</strong>: Waktu luang</li>";
    } else {
        echo "<li><strong>19:30-21:30</strong>: Waktu luang</li>";
        echo "<li><strong>21:30-22:00</strong>: Ngobrol dengan keluarga</li>";
    }
}

echo "<li><strong>22:00-23:59</strong>: Andi sedang tidur</li>";
echo "<li><strong>00:00-04:00</strong>: Andi sedang tidur</li>";
echo "<li><strong>04:00-06:45</strong>: Andi sedang siap-siap sekolah</li>";
echo "<li><strong>06:45-15:30</strong>: Andi sedang sekolah</li>";

$jam = "19:35"; 

if ($jam == "15:30") {
    echo "<br/> $jam Pulang Sekolah"; 
} else if ($jam == "15:45") {
    echo "<br/> $jam Sampai di Rumah";
} else if ($jam >= "15:45" && $jam < "16:10") {
    echo "<br/> $jam Mandi"; 
} else if ($jam >= "16:10" && $jam < "16:40") {
    echo "<br/> $jam Mengaji"; 
} else if ($jam >= "16:40" && $jam < "17:10") {
    echo "<br/> $jam Menghafalkan dialog festival kesenian budaya";
} else if ($jam >= "17:10" && $jam < "17:40") {
    echo "<br/> $jam Beli bumbu";
} else if ($jam >= "17:40" && $jam < "18:10") {
    echo "<br/> $jam Chattingan";
} else if ($jam >= "18:10" && $jam < "18:35") {
    echo "<br/> $jam Sholat Maghrib";
} else if ($jam >= "18:35" && $jam < "19:05") {
    echo "<br/> $jam Makan malam";
} else if ($jam >= "19:05" && $jam < "19:30") {
    echo "<br/> $jam Sholat Isya";
} else if ($jam >= "19:30" && $jam < "22:00") {
    if ($tugas == "ada") {
        if ($jam >= "19:30" && $jam < "21:30") {
            echo "<br/> $jam Mengerjakan tugas";
        } else if ($jam >= "21:30" && $jam < "22:00") {
            echo "<br/> $jam Ngobrol dengan keluarga";
        }
    } else {
        if ($waktu_ngobrol == "maju") {
            if ($jam >= "19:30" && $jam < "20:00") {
                echo "<br/> $jam Ngobrol dengan keluarga";
            } else {
                echo "<br/> $jam Waktu luang";
            }
        } else {
            if ($jam >= "21:30" && $jam < "22:00") {
                echo "<br/> $jam Ngobrol dengan keluarga";
            } else {
                echo "<br/> $jam Waktu luang";
            }
        }
    }
} else if ($jam == "22:00" || $jam < "04:00") {
    echo "<br/> $jam Tidur";
} else if ($jam == "04:00") {
    echo "<br/> $jam Bangun Tidur";
} else if ($jam >= "04:00" && $jam <= "06:45") {
    echo "<br/> $jam Siap-siap sekolah";
} else if ($jam >= "06:45" && $jam <= "15:30") {
    echo "<br/> $jam Sekolah";
}
    ?>

<?php
echo "<p>1. Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan? </br> => Agar jadwal Andi tidak bertabrakan/terlewatkan, maka kita memastikan semua kegiatan Andi memiliki rentang waktu yang jelas.</br></p>";
echo "<p>2. Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut! </br> => Urutan kegiatan Andi yang kami buat berdasarkan logika keseharian dan prioritas aktifitas.</br></p>";
echo "<p>3. Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya? </br> => Jika Andi chatting pukul 17:40 WIB, maka Raya chattingan dengan Andi pukul 13:40 WAS. Perbedaan waktu antara WIB dan WAS adalah 4 jam, 4 jam lebih cepat di Indonesia dibanding Arab.</br></p>";
echo "<p>4. Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah? </br> => Saat ini tidak ada waktu luang yang signifikan dalam jadwal Andi karena semua waktu sudah terisi dengan kegiatan. Jika ada waktu luang, ketika Andi tidak ada tugas sekolah.</br></p>";
echo "<p>5. Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki? </br> => Jika tidak ada tugas sekolah, maka Andi akan memiliki waktu luang 2 jam.</br></p>";
    ?>

</body>
</html>