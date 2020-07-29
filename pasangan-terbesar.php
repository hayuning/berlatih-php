<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Pasangan Terbesar</h1>
<?php
function pasangan_terbesar($angka){
// kode di sini
$terbesar = substr($angka,0,2);
for ($i=0; $i <= strlen($angka); $i++){
    $pasangan = substr($angka, $i, 2);
    if ($pasangan > $terbesar){
        $terbesar = $pasangan;
    }
}
return $terbesar; 
}

// TEST CASES
echo "<br>".pasangan_terbesar(641573); // 73
echo "<br>".pasangan_terbesar(12783456); // 83
echo "<br>".pasangan_terbesar(910233); // 91
echo "<br>".pasangan_terbesar(71856421); // 85
echo "<br>".pasangan_terbesar(79918293); // 99

?>


</body>
</html>