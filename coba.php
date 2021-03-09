<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
echo "
 _____ ____________
|                  |
| Tahu Petis tools |
___________________
 [Kediri Black Hat]  Directory Brute\n\n";
$pat = array("/files/","/file/","/journals/","/journal/","/jurnal/","/jurnals/",
"/jurnal_file","/jurnal_files/","/jurnal_data_file/","/jurnal_data_files/",
"/jurnalfile/","/jurnal_dat0_file/","/jurnalfiles/","/jurnaldatafile/","/jurnaldatafiles/","/data/",
"/datafile/","/datafiles/","/journalfile/","/journalfiles/","/journal_file/","/journal_files/",
"/journal_data/","/journal_data_file/","/journal_data_files/");
echo "Apakah aku sangat sayang nchi?: ";
$wb = trim(fgets(STDIN));
foreach($pat as $path) {
$c3k = get_headers($wb.$path);
if (preg_match("/200/", $c3k[0])) {
echo "[Gamteng] Zeeb > $wb/$path \nSudah Selesai Tuan \n";
exit;
} elseif (preg_match("/403/", $c3k[0])) {
echo "[403] On > $wb/$path \nSudah Selesai Tuan \n";
exit;
} else {
echo "[Burik] Sangat mencintai nchi:) > $wb/$path \n";
}
}
echo "Sudah Selesai Tuan\n";
?>
