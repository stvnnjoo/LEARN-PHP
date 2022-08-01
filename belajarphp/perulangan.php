<?php

for ($i = 0; $i < 100; $i++) {
    echo "Wajib Ngulik <br>";
}
//
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}
//codingan diatas menunjukan perhitungan maju dari 1-10
for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
    //codingan diatas menunjukan perhitungan mundur dari 10-1
}
//Menampilkan Array
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 1; $i < count($list); $i++) {
    echo "{$list[$i]} <br>"; 
    //codingan diatas jika diubah menjadi 1 maka tulisan coding akan hilang
}
# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }

    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
    //jika continue dan break dihapus maka dari yang 41 barisan bertambah menjadi 50 barisan (+9)
}
$i = 0;

while ($i < 20) {
    echo "{$i} <br>";

    $i++;
}
while (true) {
    echo "RPL Wajib Ngulik !! <br>";
}
while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);
while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $key => $l) {
    echo "[{$key}] Nama : {$l} <br>";
}
//jika key diubah menjadi kunci maka tidak ada perubahan pada web karena variabel yang diganti harus sama (kunci=kunci)
?>


