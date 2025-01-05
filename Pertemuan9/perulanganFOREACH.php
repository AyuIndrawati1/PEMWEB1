<?php
$books = [
    "Panduan belajar PHP untuk pemula",
    "Membangun aplikasi web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat chat bot dengan PHP"
];

echo "<h5>Judul Buku PHP</h5>";
echo "<ul>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
?>