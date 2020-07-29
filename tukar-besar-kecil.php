<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Menukar Besar dan Kecil</h1>
    <?php
function tukar_besar_kecil($string){
//kode di sini
$output="";
for($i=0;$i < strlen($string); $i++){
    if ($string[$i]==strtolower($string[$i])){
        $output.=strtoupper($string[$i]);
    }else{
        $output.=strtolower($string[$i]);
        }
    }
    return $output;
}

// TEST CASES
echo "<br>".tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>".tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>".tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>".tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>".tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>


</body>
</html>