<?php

// jika senin - rabu, maka mengenakan seragam osis
// jika kamis, mengenakan seragam batik 
// jika jumatt, mengenakan seragam pramuka
// jika sabtu, mengenakan seragam olahraga

$hari = "jumat";

 if($hari == "senin" || $hari == "selasa" || $hari == "rabu")
 {
    echo "$hari mengenakan seragam osis";
 } else if ($hari == "kamis") {
    echo "$hari mengenakan seragam batik";
 } else if ($hari == "jumat") {
    echo "$hari mengenakan seragam pramuka";
 } else if ($hari == "sabtu") {
    echo "$hari mengenakan seragam olahraga";
 } 
 else //kalo cmn else gaperlu pake kurung, kalo else if perlu pake kurung
 {
    echo "$hari libur bg";
 }

 // $jam >= date("10:00");
 // $jam <= date("08:00");

?>