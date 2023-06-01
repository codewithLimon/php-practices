<html>

<head></head>

<body data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed="">
    <h3 align="Center">1D Arrays tutorials</h3>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>


<?php

$Narray1 = [10, 20, 30, 40, 50];

echo 'Number Array1 :  [';
for ($i = 0; $i < 5; $i++) {
    if ($i !== 4) {
        echo $Narray1[$i] . ', ';
    } else {
        echo $Narray1[$i];
    }
}
echo ']' . "<br>";
echo 'Narray1 elements: '.count($Narray1) ."<br>" ."<br>";


$StringArrays1 = ['Facebook', 'Instagram', 'LinkedIn', 'Twitter', 'Whatsapp'];
echo 'StringArrays1  :  [';
for ($i = 0; $i < 5; $i++) {
    if ($i !== 4) {
        echo $StringArrays1[$i] . ', ';
    } else {
        echo $StringArrays1[$i];
    }
}
echo ']' ."<br>";
echo 'StringArrays1 elements: '.count($StringArrays1) ."<br>" ."<br>";

//add elements in an array:

array_push($Narray1, 66);
echo 'After adding one element in Narray1: [';
for ($i = 0; $i < count($Narray1); $i++) {
    if ($i !== count($Narray1)-1) {
        echo $Narray1[$i] . ', ';
    } else {
        echo $Narray1[$i];
    }
}
echo ']' . "<br>";
echo 'Narray1 elements: '.count($Narray1) ."<br>" ."<br>";
echo array_merge($StringArrays1,$Narray1);
?>