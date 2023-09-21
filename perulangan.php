<?php

// Perulangan For
// Semuanya di masukin ke dalam for

// $angka = 1;
// $angkaMaks = 30;

// for($angka; $angka <=$angkaMaks; $angka++){
//     echo "Perulangan for ke - " . $angka;
//     echo "<br>";
// }

// Perulangan while
// Meriksa dulu baru melakukan perulangan

// $angka = 1;

// cara pertama

// while($angka <= 40){
//     $angka = $angka + 1;
//     echo "Perulangan while ke - " . $angka;
//     echo "<br>";
// }

// cara kedua

// while($angka <= 20){
//     echo "While ke - $angka";
//     $angka++;
//     echo "<br>";
// }

// kurung kurawalnya di ganti jadi : sama endwhile

// while($angka <= 20):
//     echo "While ke - $angka";
//     $angka++;
//     echo "<br>";
// endwhile

// Do While
// proses dulu baru ngecek

// $angka = 1;

// do{
//     echo "Do while ke -" . $angka;
//     echo "<br>";
//     $angka++;
// }while($angka <= 40);

// Foreach loop buat array

// cara pertama

// $makanan = array("Sate", "Pempek", "Seblak", "Ceker");
// $a = 1;

// foreach($makanan as $food){
//     echo $a+ 1 . "." . $makanan[$a];
//     echo "<br>";
// }

// cara kedua

// foreach($makanan as $food){
//     echo $a++ . "." . $food;
//     echo "<br>";
// }

// Break atau Continue

$a = 0;

// kalo ini data terkhir yang mau di keluarin jadi gaada

for($a; $a<= 30; $a++){
    if($a == 15){
        break;
    }

    echo "Loop Break ke -" . $a;
    echo "<br>";
}

?>