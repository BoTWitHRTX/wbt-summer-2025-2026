<?php
    //Task 1
    echo "Task 1: <br><br>";
    $principal = 10000;
    $rate = 0.25;
    $time = 2;
    $interest = ($principal * $rate * $time)/100;
    echo "Principal: $principal<br>";
    echo "Rate: $rate<br>";
    echo "Time: $time<br>";
    echo "Simple Interest: $interest<br>";
    echo "<br><br>";

    //Task 2
    echo "Task 2: <br><br>";
    $num = 19;
    $count = 1;
    for ($i=2; $i<=$num; $i++){
        if($num % $i == 0){$count++;}
    }
    if($count == 2){echo "$num is a prime number<br>";}
    else{echo "$num is a not prime number<br>";}
    echo "<br><br>";

    //Task 3
    echo "Task 3: <br><br>";
    $number = 8;
    $fact = 1;
    for($i = 2; $i<=$number; $i++){
        $fact = $fact * $i;
    }
    echo "Factorial of $number is : $fact<br>";
    echo "<br><br>";

    //Task 4
    echo "Task 4: <br><br>";
    $n = [1,3,5,4,6,7,12,2 ];
    echo "Array: ";
    for($i =0; $i < count($n); $i++){
        echo"$n[$i] ";
    }
    echo "<br>";
    $total = 0;
    for($i =0; $i < count($n); $i++){
        $total += $n[$i];
    }
    $avg = $total/count($n);
    echo "Total: $total<br>";
    echo "Average: $avg<br>";
    echo "<br><br>";

    //Task 5
    echo "Task 5: <br><br>";
    for ($i=1; $i<5;$i++){
        $ch = $i;
        for ($j=0;$j<$i;$j++){
            echo "$ch";
        }
        echo "<br>";
    }
?>
