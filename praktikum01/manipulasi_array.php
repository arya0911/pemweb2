<?php
$arrayBuah = ["Mangga","Duren","Mengkudu","Nangka"];

//mengurutkan array
sort($arrayBuah);

//menghapus paling akhir
array_pop($arrayBuah);

//menghapus vaiabel atau array
unset($arrayBuah[0]);

//menambahkan array di paling akhir
array_push($arrayBuah,"Kurma");

//menghapus array dipaling awal
array_shift($arrayBuah);

//menambahkan value di awal
array_unshift($arrayBuah, "Nanas");

//mengubah array dengan spesifik
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}