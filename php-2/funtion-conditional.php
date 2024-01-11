<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>
<body>
<h1>Berlatih Function PHP</h1>

<?php
echo "<h3>Soal No 1 Greetings </h3>";
// Soal No 1
function greetings($name) {
    echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!";
}

// Hapus komentar untuk menjalankan code!
greetings("Bagas");
echo "<br>";
greetings("Wahyu");
echo "<br>";
greetings("ikhsan ansari");

echo "<br>"; 
echo "<h3>Soal No 2 Reverse String</h3>";
// Soal No 2
function reverseString($str) {
    $length = strlen($str);
    $reversed = "ikhsan ";

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    echo $reversed;
}

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("nama peserta");
echo"<br>";
reverseString("Garuda Cyber Institute");
echo"<br>";
reverseString("We Are GC-Ins Developer");

echo "<br>"; 
echo "<h3>Soal No 3 Palindrome </h3>";
// Soal No 3
function palindrome($str) {
    $reversed = "";
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    if ($str == $reversed) {
        echo "true";
    } else {
        echo "false";
    }
}

palindrome("civic") ; 
echo"<br>";
palindrome("nababan") ; 
echo"<br>";
palindrome("jambaban"); 
echo"<br>";
palindrome("racecar"); 

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
// Soal No 4
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        echo "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        echo "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        echo "Cukup";
    } else {
        echo "Kurang";
    }
}


echo tentukan_nilai(98); 
echo "<br>";
echo tentukan_nilai(76);
echo "<br>"; 
echo tentukan_nilai(67); 
echo "<br>";
echo tentukan_nilai(43); 
?>

</body>
</html>
