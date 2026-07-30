<?php
    //1
    echo "Problem 1:<br>";
    $length = 10; $width = 5;
    $area = $length * $width;
    $perimeter = 2*($length+$width);
    echo "Length : $length<br>";
    echo "Width : $width<br>";
    echo "Area : $area<br>";
    echo "Perimeter : $perimeter<br><br><br>";

    //2
    echo "Problem 2:<br>";
    $amount = 500;
    $vAmount = $amount * 0.15;
    $totalAmount = $amount + $vAmount;
    echo "Amount : $amount <br>";
    echo "VAT: $vAmount<br>";
    echo "Total : $totalAmount<br><br><br>";

    //3
    echo "Problem 3:<br>";
    $number = 9;
    echo "$number is: " . (($number % 2 == 0) ? "Even" : "Odd");
    echo "<br><br><br>";

    //4
    echo "Problem 4:<br>";
    $nums = [13,9,23,6,12,53,29];
    $max = $nums[0]; $min = $nums[0];
    for ($i=0;$i<count($nums);$i++){
        if($max<$nums[$i]){$max=$nums[$i];}
        if($min>$nums[$i]){$min=$nums[$i];}
    }
    echo "Numbers: ";
    for ($i = 0; $i < count($nums); $i++) {
    echo "$nums[$i]  ";}
    echo "<br>";
    echo "Max: $max , Min: $min <br><br><br>";

    //5
    echo "Problem 5:<br>";
    echo "All odd numbers between 10 to 100 are:";
    for ($i = 10; $i < 101; $i++){
        if($i%2 != 0){echo  "$i ";}
    }
    echo"<br><br><br>";

    //6
    echo "Problem 6:<br>";
    $elements = [1,23,6,31,53,19,27,3];
    $key = 53; $index=0;
    $isFound = false;
    for ($i = 0; $i < count($elements); $i++){
        if($elements[$i]==$key){$isFound = true; $index=$i;}
    }
    echo "Elements: ";
    for ($i = 0; $i < count($elements); $i++){
    echo "$elements[$i]  ";
    }
    echo "<br>"; 
    if ($isFound){echo "$key found at index $index<br><br><br>";}
    else{echo "$key not found!<br><br><br>";}

    //probem 7
    echo "Problem 7:<br><br>";
    for($i=0; $i<3; $i++){
        for($j=0; $j<$i+1; $j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    
    for($i=0; $i<4; $i++){
        for($j=1; $j<4-$i; $j++){
            echo "$j";
        }
        echo "<br>";
    }
    echo "<br>";

    $char="A";
    for($i=0; $i<3; $i++){
        for($j=0; $j<$i+1; $j++){
            echo "$char";
            $char++;
        }
        echo "<br>";
    }
?>
