<?php
    // $a = (int)readline('Enter an integer to choose operation: '); 
    // $b = (int)readline('Enter another integer to operate: ');
    // $c = (int)readline('Enter another integer to operate: ');
    $a=4;
    $b=20;
    $c=5;
    
    if($a==1){
        echo $b + $c;
    } elseif ($a==2) {
        echo $b - $c;
    }elseif ($a==3) {
        echo $b * $c;
    }
    elseif ($a==4) {
        echo $b / $c;
    }
    elseif ($a==5) {
        if($b%2==0){
            echo "Number is Even";
        }else{
            echo "Number is Odd";
        }
    }
    elseif ($a==6) {
        echo "Wrong Input";
    }
?>