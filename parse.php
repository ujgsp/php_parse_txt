<?php
# buka file text tujuan
$fh = fopen('JM_LMS_SUCCESS_RPT_190101060203.txt','r');
# buka dan buat folder tujuan save as
// $f = fopen("data.csv", "wb");

while ($line = fgets($fh)) {
	# ambil kode dan gunakan tanda koma sebagai delimeternya
    $kode = substr($line, 1, 2).","; # 49
    # ambil waktu_transfer dan gunakan tanda koma sebagai delimeternya
    $waktu_transfer = substr($line, 4, 19).","; # 31/12/2018 12:46:02
    $nomor_flazz = substr($line, 24, 16). ","; # 6019001749175265
    $kode_inv = substr($line, 41, 5); # JM001
    $tarif_tol = substr($line, start)
    echo $kode_inv. "</br>";
    // $nomor_flazz = substr($line, 24, 16). "\n";

    # masukan data hasil parsenya ke array
    /*$data = array(
    	"kode" => $kode,
    	"waktu_transfer" => $waktu_transfer,
    	"nomor_flazz" => $nomor_flazz
    );
    // $d = serialize($data);
    foreach($data as $row) {
    	// echo $row. "</br>";
    	# write file hasil parse
    	fwrite($f, $row);
    }*/
}
# close
// fclose($f);
# close
fclose($fh);


?>