<html>

    <head>
        <title>
            nirianda belajar php 
        </title>
        <style>
            .lila {
                color: red;
            }
        </style>
    </head>

    <body>
        Halo
        <?php
        $walkes = " Bu Yuniar "; //$ fungsinya untuk memanggil 
        echo "<br> Kenalin aku nirianda"; //setiap akhir line harus dikasih ; 
        echo "<br> Aku sekolah di SMK Negeri 8 Semarang";
        echo "<div class='lila'>Wali Kelas: ". $walkes ."</div>";

            // ini komentar tapi satu baris
            # ini juga komentar tpi juga cuman satu
            /* ini komentar
            tapi bisa beberapa line
            wow */
 
        $angka1 = 5;
        $angka2 = 10;
        $penjumlahan = $angka1 + $angka2;
        $x = $angka1 * $angka2;

        echo "<br> $angka1 + $angka2 = ". $penjumlahan;
        echo "<br>";
        echo $x ." = $angka1 x $angka2"; 
        echo "<br> $angka1<sup>$angka2</sup> = "; //<sup> fungsinya untuk membuat perpangkatan 
        echo pow($angka1,$angka2); //untuk melihat hasil pake echo pow 
        
        echo "<br> $angka1<sup>$angka2</sup> = ";
        echo number_format(pow($angka1,$angka2), 2, '.', '.');
        /* number_format(
        angkanya,
        jumlah angka di belakang koma,
        'tanda koma/titik paling belakang',
        'tanda koma/titik di antara angka')
        contoh = 1000 jadi 1.000,00
        */
        
    ?>
    </body>

</html>