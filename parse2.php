<?php
// $file = fopen("test.txt","a");
// echo fwrite($file,"\nini isi ke dua");
// fclose($file);

$fh = fopen('JM_LMS_SUCCESS_RPT_190101060203.txt','r');
while ($line = fgets($fh)) {
    $kode = substr($line, 1, 2); # 49
    $waktu_transfer = substr($line, 4, 19); # 31/12/2018 12:46:02
    $nomor_flazz = substr($line, 24, 16); # 6019001749175265
    echo $nomor_flazz. "</br>";
}
fclose($fh);


?>