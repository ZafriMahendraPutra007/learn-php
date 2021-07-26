<?php
//menghitung BMI
/**
 * 1. menentukan weight
 * 2. menentukan height
 * 3. count BMI -> weight / height * height
 * 4. show number of BMI
 * 5. show category
 */
$weight = 60;
$height = 1.78;
$bmi = $weight / $height * $height ;
echo "Your BMI : $bmi \n";
if ($bmi < 18.5){
    echo "kurang berat badan";
}elseif ($bmi >= 18.5 && $bmi <23){
    echo"Normal";
}elseif ($bmi >= 23 && $bmi< 30){
    echo "cenderung obesitas";
}elseif ($bmi >= 30) {
    echo "obesitas";
}   
?>