<?php

// var lokal hanya bisa di akses di dalam kurung function
// varLokal();
// function varLokal(){
//     $lokal = "Bisa diakses";
//     print "Variabel $lokal di dalam";
// }

// print "Variabel $lokal di luar";

// Variabel publik

varPublik();
$publik = 1000;

function varPublik(){
    print "Permen harganya $publik";
}
echo "<br>";
echo "jelly harganya $publik";


?>