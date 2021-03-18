<?php
# buka file text tujuan
$fh = fopen('JM_LMS_SUCCESS_RPT_190101060203.txt','r');
# buka dan buat folder tujuan save as
$f = fopen("data.csv", "wb");

while ($line = fgets($fh)) {
    # ambil kode dan gunakan tanda koma sebagai delimeternya
    $kode = substr($line, 1, 2).","; # 49
    # ambil waktu_transfer dan gunakan tanda koma sebagai delimeternya
    $waktu_transfer = substr($line, 4, 19).","; # 31/12/2018 12:46:02
    $nomor_flazz = substr($line, 24, 16). ","; # 6019001749175265
    $kode_inv = substr($line, 41, 5). ","; # JM001
    $tarif_tol = strstr($line, 'JM001'); # JM001 15000.00 15000.00 04/PALIMANAN 24/CIKARANG UTAMA 23 1 1 451758 088833 019941 31/12/2018 23:05:24 31/12/2018 23:05:24 000885023100201 20181231EPJ01143001141112.share
    $tarif_tol_2 = strstr($tarif_tol, '/', true); # JM001 15000.00 15000.00 04
    $tarif_tol_3 = substr(strrchr($tarif_tol_2, "JM001"), 5); # 15000.00 15000.00 04
    $tarif_tol_4 = explode(" ", $tarif_tol_3);
    $tarif_tol_5 = array_filter($tarif_tol_4);
    $tarif_tol_6 = array_splice($tarif_tol_5, 0). "\n";
    /*echo "<pre>";
    print_r($tarif_tol_6);
    echo "</pre>";*/
    // echo $tarif_tol_6[0]. "</br>";
    // echo $tarif_tol_4. "</br>";

    // $nomor_flazz = substr($line, 24, 16). "\n";

    # masukan data hasil parsenya ke array
    $data = array(
        "kode" => $kode,
        "waktu_transfer" => $waktu_transfer,
        "nomor_flazz" => $nomor_flazz,
        "kode_inv" => $kode_inv,
        "tarif_tol" => $tarif_tol_6
    );
    // $d = serialize($data);
    foreach($data as $row) {
        // echo $row. "</br>";
        # write file hasil parse
        fwrite($f, $row);
    }
}
# close
fclose($f);
# close
fclose($fh);


?>