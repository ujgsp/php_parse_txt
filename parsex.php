<?php
$str = "TRANSFER DARI | PEMINDAHAN DARI 177634945 DANA SETORAN NEW PREPAID | 0001000005001/LMS | PBY Manual / September 2020 | 0808080070 Selisih Valid";
$parse1 = strstr($str, '/');
echo $str. "<hr>";
echo $parse1 . "<hr>"; # / JAPEK | PBY Manual / Januari 2021 | 0808080070 Pending File SHR

$parse2 = substr(strrchr($parse1, "/"), 1); # Desember 2020 | 0808080070 Selisih Valid
echo $parse2. "<hr>";

$parse4 = strstr($parse2, '|', true); # Desember 2020
echo $parse4. "</br>";
/*echo strlen($parse4). "<hr>";
$tes = trim($parse4);
echo $tes. "</br>";
echo strlen($tes). "<hr>";*/

?>