<?php
//proses
$filecounter=("counter.txt");
$kunjungan=file($filecounter);
$kunjungan[1]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);
?>