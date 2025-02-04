<?php
 function high_num($num1, $num2){
     if($num1>$num2){
         return $num1;
     }
     else{
         return $num2;
     }
 }
 echo high_num(15, 30);

 function oddeven($numri){
     if($numri%2==0){
         echo ('qift');
    }
     else{
         echo ('tek');
     }
 }
 oddeven(9);

