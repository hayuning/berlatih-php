<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Mengubah Huruf</h1>
    <?php
function ubah_huruf($string){
//kode di sini
$huruf = "abcdefghijklmnopqrstuvwxyz";
$hasil = "";
for($j=0; $j < strlen($string); $j++){
    $posisi = strrpos($huruf, $string[$j]);
    $hasil.=substr($huruf, $posisi+1, 1);
}
return $hasil;
}

// TEST CASES
echo "<br>".ubah_huruf('wow'); // xpx
echo "<br>".ubah_huruf('developer'); // efwfmpqfs
echo "<br>".ubah_huruf('laravel'); // mbsbwfm
echo "<br>".ubah_huruf('keren'); // lfsfo
echo "<br>".ubah_huruf('semangat'); // tfnbohbu

?>


</body>
</html>