<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Menentukan Deret Geometri</h1>
    <?php
function tentukan_deret_geometri($arr) {
// kode di sini
$hasil="";
$pjg = count($arr);
while ($i < $pjg-2){
      if(($arr[$i+1]/$arr[$i]) == ($arr[$i+2]/$arr[$i+1])){
          $hasil= "TRUE";
      } else{
          $hasil="FALSE";
      }
      $i++;
}
return $hasil;
}
//TEST CASES
echo "<br>".tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "<br>".tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>".tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>".tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>".tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br>".tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "<br>".tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>


</body>
</html>