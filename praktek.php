<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 2px solid black;
        border-collapse: collapse;
    }
    th,td{
        padding:  10px 10px;
    }
    th{
        background-color: green;
    }
</style>
<body>
<table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Data Pemesanan</th>
                <th>Harga</th>
                <th>Total Harga</th>
            </tr>
            <td>1.</td>
            <td>Zeefa</td>
            <td>
                <?php
                // Data dalam bentuk array
                $dataPemesanan = array("Gamis", "Pasmina", "Rok", "Cardingan", "Kaos Kaki");
                $a = 1;

                foreach($dataPemesanan as $data) {
                echo $a++ . ".". $data;
                echo '<br>';
                }
                ?>
            </td>
            <td>
            <?php
    class harga {
    public $gamis;  
    public $pashmina;
    public $rok;
    public $cardingan;
    public $kaoskaki;

    public function __construct($gamis, $pashmina, $rok, $cardingan, $kaoskaki) {
        $this->gamis = $gamis;
        $this->pashmina = $pashmina;
        $this->rok = $rok;
        $this->cardingan = $cardingan;
        $this->kaoskaki = $kaoskaki;
    }
    public function showHarga() {
        return "$this->gamis
        <br>
        $this->pashmina
        <br>
        $this->rok
        <br>
        $this->cardingan
        <br>
        $this->kaoskaki";
    }
}

    $a = new harga(100000,40000,70000,80000,10000);
    print $a->showHarga();

    ?> 
            </td>
            <td>
               <?php
              totalHarga(100000,40000,70000,80000,10000); 
             function totalHarga($gamis,$pashmina,$rok,$cardingan,$kaoskaki) {
                $totalHarga = ($gamis + $pashmina+ $rok + $cardingan + $kaoskaki);
                echo $totalHarga;
            }
               ?>
            </td>
        </thead>
    </table>
</body>
</html>