<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Menentukan Deret Aritmatika</h1>
    <?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
//$selisih = $arr[1] - $arr[0];   
$hasil="";
$pjg = count($arr);
while ($i < $pjg-2) {
      if(($arr[$i+1]-$arr[$i]) == ($arr[$i+2]-$arr[$i+1])){
          $hasil= "TRUE";
      } else{
          $hasil="FALSE";
      }
      $i++;
}
return $hasil;
}


// TEST CASES
echo "<br>".tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>".tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>".tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>


</body>
</html>