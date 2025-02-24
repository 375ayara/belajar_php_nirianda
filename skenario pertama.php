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
// jika nilai 100-90, maka keterangan A
// jika nilai 89-80, maka keterangan B
// jika nilai 79-70, maka keterangan C
// jika nilai 69-0, maka keterangan D
// kurang dari 0 dan lebih dari 100, nilai wajib di antara 0-100

$nilai = "52";

if($nilai >= "90" && $nilai <= "100") 
{
    echo "<br/> $nilai Nilai Anda : A";
} else if ($nilai >= "80" && $nilai <= "89") {
    echo "<br/> $nilai Nilai Anda B"; 
} else if ($nilai >= "70" && $nilai <= "79") {
    echo "<br/> $nilai Nilai Anda C"; 
} else if ($nilai >= "0" && $nilai <= "69") {
    echo "<br/> $nilai Nilai anda D";
} 
else 
{
    echo "<br/> Nilai wajib di antara 0-100";
}
    ?>
</body>
</html>