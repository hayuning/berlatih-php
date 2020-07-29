<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Soal Papan Catur</h1>
    <?php

function papan_catur($angka) {
// tulis kode di sini
$x=1;
$output = "";
while ($x <= $angka) {
    $y=1;
    while ($y <= $angka) {
    if ($x%2==0){
        $output.="#";
    }else{
        $output.=" # ";
    }
     $y++;
    }
    $output.="<br>";
    $x++;
}

return $output;
}


// TEST CASES
echo "<br>".papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 
*/
echo "<br>".papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<br>".papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>