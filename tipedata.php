<?php

// Number$dataNumber
// var_dump -> dia ngasih tau tipe datanya dan jumlahnya

// $dataString = "Sate";
// echo "Makanan kesukaan saya adalah $dataString";
// echo "<br>";
// print $dataString;
// echo "<br>";
// var_dump($dataString);
// echo "<br>";
// print_r($dataString);

// Number
// float sama number sama cuma kalo float buat desimal

// $dataNumber = 200.3278;
// echo "Nomor nya $dataNumber";
// echo "<br>";
// print $dataNumber;
// echo "<br>";
// var_dump($dataNumber);
// echo "<br>";
// print_r($dataNumber);

// Boolean
// kalo manggil pake var maka 1 = true, dan false = kosong gaada angka angkanya

// $dataBoolean = true;

// if($dataBoolean){
//     echo "Hasilnya true";
// }else{
//     echo "Hasilnya false";
// }

// Null

// $dataNull = null;
// $dataNull2 = 60;

// print "Ini datanya $dataNull";

// pengecekan data Null
// $cekNull = is_null($dataNull);
// echo $cekNull;
// var_dump($cekNull);

// Array

// $bias = array("jk", "v", "jimin", "suga", "rm", "jin", "jhope");
// print "Bias saya $bias[2]";
// echo "<br>";
// echo $bias[1];
// echo "<br>";
// array (beberapa data {[index] tipedata(jumlahnya) isi datanya})
// var_dump($bias);

// Operasi Array

// Mengubah data -> rumusnya $var[index] = "value"
// $bias[0] = "jungkook";
// echo $bias[0];
// echo "<br>";
// echo "Bias diurutannya adalah" . $bias[3] = "suga";

// Menambah data di belakang -> rumusnya $var[] = "value"
// echo $bias[] = "chaenwoo";
// echo "<br>";
// var_dump($bias);

// Hapus data pada array rumusnya -> unset($var[index])
// unset($bias[7]);
// var_dump($bias);

// Menghitung data di array rumusnya -> count($var)
// echo count($bias);


// Mapping Array
// $nama = array(
//     "depan" => "Tasya",
//     "tengah" => "Munawar",
//     "belakang" => "Awaliah"
// );

// cara aksesnya panggil bungkus paling luar atau var baru ["key"], key itu = depan tengah atau belakang
// echo $nama["depan"];

// Mapping Array dalam array

$nama = array(
    "depan" => "Tasya",
    "tengah" => "Munawar",
    "belakang" => "Awaliah",
    "alamat" => array(
        "kota" => "Cianjur",
        "negara" => "Indonesia"
    )
);

echo $nama["depan"] . " " . $nama["alamat"]["kota"];

?>