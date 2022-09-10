<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus Luas dan Keliling Lingkaran </h1>
    <p>Jari - Jari :</p>
    <input type="number" name="r"  placehorder="Ex. 5"/>
    <input type="submit" name="proses"  value="Hitung Luas & Keliling"
    />
</from>

<?php
if ( isset($_POST["proses"]) ) {
    echo "<hr>";
    $r = $_POST["r"];
    $phi = 3.14;
    $luas = $phi * $r * $r;
    $keliling = 2 * 3.14 * $r;

    echo "Jari Jari : $r <br>";
    echo "Luas lingkaran : $luas <br>";
    echo "keliling lingkaran : $keliling <br>";
}