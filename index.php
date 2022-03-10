    <?php
    // membuat variable user
    $nama = "Dzaky Zahran";
    $umur = 18;
    $berat = 61.5;

    // menampilkan variable
    echo "Nama : " . $nama;
    echo "<br/>Umur : $umur";
    echo "<br/>Berat : $berat";

    // menampilkan variable sistem 
    echo "<br/>Document Root : " . $_SERVER['DOCUMENT_ROOT'];

    // membuat variable konstan
    Define ('phi', 3.14);
    $r = 10;
    $luas = phi * $r * $r;

    // menampilkan luas lingkaran
    echo "<br/>Luas Lingkaran : $luas";