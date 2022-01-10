<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php 
    $year = 2013;
    if($year % 4 ===0 ){
        echo "This year is a leap year";
    } else {
        echo "This is not a leap year";
    }
    ?> -->

    <!-- <?php 
    $temp = 27;
    if($temp < 20) {
        echo "We are in winter";
    } else {
        echo "We are in summer";
    }
    ?> -->

    <!-- <?php 
    $x = 2;
    $y = 2;
    if($x === $y) {
        echo ($x + $y)*3;
    } else {
        echo $x + $y;
    }
    ?> -->


    <!-- <?php 
    $x = 10;
    $y = 12;
    if($x + $y === 30) {
        echo $x + $y;
    } else {
        echo "false";
    }
    ?> -->

    <!-- <?php 
    $num = 5;
    if(abs($num) % 3 === 0){
        echo "true";
    } else {
        echo "false";
    }
    ?> -->

    <!-- <?php 
    $min_num = 20;
    $max_num = 50;
    $num = 45;
    if($num >= $min_num && $num <= $max_num){
        echo "true";
    } else {
        echo "false";
    }
    ?> -->

    <!-- <?php 
    $numbers = [1,5,9];
    echo max($numbers);
    ?> -->

    <!-- <?php 
    $bill = 240;
    if($bill <= 50){
        echo $bill * 2.5;
    } elseif ($bill <= 150){
        echo (50*2.5 + ($bill-50)*5);
    } elseif($bill <= 250){
        echo (50*2.5 + 100*5 + ($bill-150)*6.2);
    } else {
        echo (50*2.5 + 100*5 + 100*6.2 + ($bill-250)*7.5);
    }
    ?> -->

    <!-- <?php 
    function calculator($number_one,$number_two,$operation){
        if($operation === "addition"){
            echo $number_one + $number_two;
        } elseif($operation === "subtraction"){
            echo $number_one - $number_two;
        } elseif($operation === "multiplication"){
            echo $number_two * $number_one;
        } elseif($operation === "division"){
            echo $number_one / $number_two;
        } else{
            echo "operation is not clear";
        }
    }

    calculator(5,6,"multiplication");
    ?> -->

    <!-- <?php 
    $age = 16;
    if($age >= 18){
        echo "You can vote";
    } else {
        echo "you cant vote";
    }
    ?> -->

    <!-- <?php 
    $number = 40;
    if($number > 0){
        echo "positive";
    } elseif($number < 0){
        echo "negative";
    } else {
        echo "number is zero";
    }
    ?> -->

    <!-- <?php 
    $grades = [60,86,95,63,55,74,79,62,50];
    $average = array_sum($grades) / count($grades);
    if($average < 60){
        echo "F";
    } elseif($average <70){
        echo "D";
    } elseif($average < 80){
        echo "C";
    } elseif($average < 90){
        echo "B";
    } elseif($average < 100) {
        echo "A";
    }
    ?> -->

    <!-- <?php 
    $ten = range(1,10);
    for($i = 0; $i<count($ten);$i++){
        if($i === count($ten) - 1){
            echo $ten[$i];
        } else {
            echo $ten[$i]."-";
        }
    }
    ?> -->

    <!-- <?php 
    $thirty = range(0,30);
    $sum = 0;
    foreach($thirty as $val){
        $sum += $val;
    }
    echo $sum;
    ?> -->

    <!-- <?php 
    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j >= ($length - 1 - $i)){
                echo chr(ord("A") + $i);
            } else {
                echo "A";
            }
        }
    }
    ?> -->


    <!-- <?php 
    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j >= ($length - 1 - $i)){
                echo $i+1;
            } else {
                echo 1;
            }
        }
    }
    ?> -->


    <!-- <?php 
    $length = 5;
    for($i = 0;$i<$length;$i++){
        echo "<br>";
        for($j = 0;$j<$length;$j++){
            if($j === $i){
                echo $i+1;
            } else {
                echo 0;
            }
        }
    }
    ?> -->

    <!-- <?php 
    $number =5;
    $sum=0;
    for($i=0 ; $i<=$number; $i++){
        $sum *= $i;
    }
    echo $sum;
    ?> -->

    <!-- <?php 
    $num1 = 0;
    $num2 = 1;
    $length = 10;
    for($i = 0; $i<$length;$i++){
        echo $num1." ";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;

    }
    ?> -->

    <!-- <?php 
    $string = "Orange Coding Academy";
    $sum =0;
    for($i = 0;$i<strlen($string);$i++){
        if(strtolower($string[$i]) === "c"){
            $sum += 1;
        }
    }
    echo $sum;
    ?> -->

    <!-- <?php 
    echo "<table border =1 style='border-collapse: collapse', cellpadding=3px>";
    for($i = 0 ; $i<6; $i++){
        echo "<tr>";
        for($j = 0;$j<5;$j++){
            echo "<td>" .($i+1).'*'.($j+1).'='.(($i+1)*($j+1)). "</td>" ;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?> -->

    <!-- <?php 
    $numbers = range(1,50);
    foreach($numbers as $val){
        if($val % 3 ===0){
            echo "Fizz ";
        } elseif($val % 5 === 0){
            echo "Buzz ";
        } elseif($val % 3 ===0 && $val % 5 === 0){
            echo "FizzBuzz ";
        } else{
            echo $val." ";
        }
    }
    ?> -->

    <!-- <?php 
    $counter = 1;
    for($i=1;$i<=5;$i++){
        echo "<br>";
        for($j=1;$j<=$i;$j++){
            echo $counter;
            $counter++;
        }
    }
    ?> -->

    
</body>
</html>