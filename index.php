<?php
// 1-
// function printer($n){
// return $n;
// }

// echo printer(5);

// 2-
// $n=9;
// if($n % 3 == 0 && $n % 4 == 0){
//     echo "yes";
// }else{
//     echo "no";
// }

// 3-
// $array = [5,3];
// function maxValue($array){
// $max = $array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }
// }
// echo $max;
// }
// echo "max =  " ;
// echo maxValue($array);
// 4-
// function sum($n){
//     if($n < 0){
//         echo "negative";
//     }else{
//        echo "positive";
//     }
// }
// echo   sum(-5)."<br>";
// echo   sum(10);
// 5-
// $array = [7,8,5];
// function maxandminValue($array){
// $max = $array[0];
// $min =$array[0];
// foreach($array as $value){
//     if($max < $value){
//         $max = $value;
//     }elseif($min > $value) {
//         $min = $value;
//     }
     
// }
// echo "max =" .$max."<br>";
// echo "min = ".$min;
// }
 

// echo maxandminValue($array);
// 6-
// function EvenorOod($n){
//     if($n % 2 == 0){
//         echo "even =";
//     }else{
//         echo "odd =";
//     }
//     echo $n;
// }
//  echo EvenorOod(5);
// 7-
// function vowelOrConsonant($x){
//     if($x == "a" || $x== "e" || $x== "i" || $x =="o" || $x=="u"){
//         echo "this is a vowel";
//     }else{
//         echo "this is a consonant";

//     }
// }
// vowelOrConsonant("c");

// echo "<br>";
// vowelOrConsonant("e");
// 8-
// $n =5;
// for($i=1;$i <= $n;$i++){
//     echo $i;
// }
// 9-
// $n =5;
// for($i=1; $i <=12;$i++){
//     echo   $n * $i . "<br>" ;  
              
               
// }
// 10-
// $n=15;
// for($i=1;$i <=$n;$i++){
//     if($i %2==0){
//         echo $i."<br>";
//     }
// }
// 11-
//  function power($x,$y){
//     $pow =1;
//     for($i=0;$i <$y;$i++){
//         $pow *=$x;
//     }
//     return $pow;
//  }
//  echo power(4,3);
// 12-
// $mark1 =95;
// $mark2=76;
// $mark3=58;
// $mark4=90;
// $mark5=89;
// 13-
// $total = $mark1+$mark2+$mark3+$mark4+$mark5;
// $average = $total /5;
// $percentage = ($total /500) * 100;
// echo "total = " .$total . "<br>";
// echo "average = " .$average . "<br>";
// echo "percentage = " .$percentage ;
//  14-
// function month(int $n){
//     if($n==1||$n==3||$n==5||$n==7||$n==8||$n==10||$n==12)   {
//         echo '31 Days   ';

//     }else if($n==4||$n==6||$n==9||$n==11){
//         echo "30Days";
//     }elseif($n==2){
//         echo"28/29 Days";
//     }else{
//         echo 'invalid month.';
//     } 

     

     
// }
// echo month(1);
// 15-
//  $physics =95;
// $chemistry=76;
// $biology=58;
// $mathemtics=90;
// $computer=89;
// 13-
// $total = $mark1+$mark2+$mark3+$mark4+$mark5;
// $average = $total /5;
// $percentage = ($total /500) * 100;
// if ($percentage >= 90) {
//     $grade = "A";
// } elseif ($percentage >= 80) {
//     $grade = "B";
// } elseif ($percentage >= 70) {
//     $grade = "C";
// } elseif ($percentage >= 60) {
//     $grade = "D";
// } elseif ($percentage >= 40) {
//     $grade = "E";
// } else {
//     $grade = "F";
// }
// echo "total = " .$total . "<br>";
// echo "average = " .$average . "<br>";
// echo "percentage = " .$percentage."<br>" ;
// echo "grade =" .$grade;

// 16-
// $month =1;
// switch($month)
// {
//     case 1: 
//        echo "31 days";
//         break;
//     case 2: 
//         echo"28/29 days";
//         break;
//     case 3: 
//         echo"31 days";
//         break;
//     case 4: 
//         echo"30 days";
//         break;
//     case 5: 
//         echo"31 days";
//         break;
//     case 6: 
//         echo"30 days";
//         break;
//     case 7: 
//         echo "31 days";
//         break;
//     case 8: 
//         echo "31 days";
//         break;
//     case 9: 
//         echo "30 days";
//         break;
//     case 10: 
//         echo "31 days";
//         break;
//     case 11: 
//         echo "30 days";
//         break;
//     case 12: 
//         echo "31 days";
//         break;
//     default: 
//         echo"Invalid input! Please enter month number between 1-12";

// }
// 17-
// $x ="z";
// switch($x){
//     case "a":
//         echo "vowel";
//         break;
//         case "e":
//             echo "vowel";
//             break;
//             case "i":
//                 echo "vowel";
//                 break;
//                 case "o":
//                     echo "vowel";
//                     break;
//                     case "u":
//                         echo "vowel";
//                         break;
//                         default:
//                         echo "consonant";
// }
// 18-
// $num1 =15;
// $num2 = 20;
// switch(true){
//     case ($num1 > $num2):
//         echo "the maximun number is:= ".$num1."<br>";
//         break;
//         case ($num1 < $num2):
//             echo "the maximun number is".$num2;
//             break;
//             case ($num1 == $num2):
//                 echo "both number is";
//                 break;
//                 default:
//                 "invalid num";
// }
// 19-
// $n=12;
// switch($n % 2){
//     case 0:
//         echo "even";
//         break;
//         default:
//         echo "odd";
// }
// 20-
// $n=-5;
// switch($n){
//     case($n <0):
//         echo "negative";
//         break;
//         case($n > 0):
//             echo "positive";
//             break;
//             default:
//             "zero";
// }
// 21-
// function Calc($num1,$num2){
//     $operator = "+"; 
//     switch($operator){
//         case "+":
//             echo $num1 + $num2;
//             break;
//             case "-":
//                 echo $num1 - $num2;
//                 break;
//                 case "%":
//                     echo $num1 % $num2;
//                     break;
//                     case "/":
//                         echo $num1 / $num2;
//                         break;
//                         case "*":
//                             echo $num1 * $num2;
//                             break;
//                             default:
//                             "not number";
//     }
// }
// echo Calc(2,3);