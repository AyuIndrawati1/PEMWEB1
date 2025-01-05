<?php
$Jadwal_MK = "minggu";
switch ($Jadwal_MK) {
    case "senin":
        echo"Mata kuliah bahasa inggris";
        break;
    case "selasa":
        echo "Mata kuliah analisa proses bisnis";
        break;
    case "rabu":
        echo "Mata kuliah statistika";
        break;
    case "kamis":
        echo"Mata kuliah desain jaringan komputer";
        break;
    case "minggu":
        echo"Mata kuliah pemrograman";
        break;
    default:
        echo "Tidak ada mata kuliah";
}
?>