<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];
$average = ($uts + $uas + $praktikum) / 3;

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum";

echo "<br> <br>";
echo "Nilai rata-rata" . round($average, 2) . "<br>";
} 

if ($average <= 35) {
    echo "Grade Nilai: E";
} elseif ($average <= 55) {
    echo "Grade Nilai: D";
} elseif ($average <= 69) {
    echo "Grade Nilai: C";
} elseif ($average <= 84) {
    echo "Grade Nilai: B";
} elseif ($average <= 100) {
    echo "Grade Nilai: A";
} elseif ($average < 0) {
    echo "Grade Nilai: I";
} elseif ($average > 100) {
    echo "Grade Nilai: I";
} else {
    echo "ANDA DI DROPOUT!!!";
}
?>