<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
<h1>Soal Angka Palindrome</h1>
<?php
    function palindrome($text){
       $hasil = FALSE;
       if(strrev($text)== $text){
           $hasil = TRUE;
       }
       return $hasil;
    }
    function palindrome_angka($angka) {
        // tulis kode di sini
        if ($angka >= 1 && $angka <=8){
            return $angka+1;
        }
        if(palindrome($angka)){
            $angka++;
        }
        while(palindrome($angka) == FALSE){
            $angka++;
        }
        return $angka;
    }

    // TEST CASES
    //echo palindrome_angka(117);
    
    $tes1 = palindrome_angka(8); // 9
    echo "Palindrome dari angka 8 adalah $tes1 <br>";
    $tes2 = palindrome_angka(10); // 11
    echo "Palindrome dari angka 11 adalah $tes2 <br>";
    $tes3 = palindrome_angka(117); // 121
    echo "Palindrome dari angka 117 adalah $tes3 <br>";
    $tes4 = palindrome_angka(175); // 181
    echo "Palindrome dari angka 175 adalah $tes4 <br>";
    $tes5 = palindrome_angka(1000); // 1001
    echo "Palindrome dari angka 1000 adalah $tes5 <br>";
    
    ?>

</body>
</html>