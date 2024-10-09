<?php

// echo "hello world";

// variables

$name = "ebad uddin";

// echo $name;

$var2 = 45;

$bool = true;

$age = null;

$float = 19.6;

$arr = [1, 2, 3, 4, 5]; 
 
// Data types
/* 
string 
integer
float
double
boolean
null
array
*/
// print_r($arr);
// var_dump($arr);

// arithmatic operators +, -, /, *, %

$num1 = 46;
$num2 = 5;

$result = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;
$mod = $num1 % $num2;

// echo "The addition is: " . $result;
// echo "<br>";
// echo "The subtraction is: " . $sub;
// echo "<br>";
// echo "The Mulitiplication is: " . $mul;
// echo "<br>";
// echo "The division is: " . $div;
// echo "<br>";
// echo "The modulus is: " . $mod;


// php type casting

$str = "54";

$num = (int)$str;

$int = 4;

$alpha = (array)$int;



// var_dump($alpha);


// comparison Operators

// scinario-1

// if condition is true then execute the statement
/*
if(condition){
    statement;
}
*/


// scinario-2

// if condition is either true or false then execute the statement

/*
if(condition){
    statement;
}else{
    statement;
}

// scinario-3 (nested if)

if(condition){
    if(condition){
        statement;
    }else{
        statement;
    }
}else{
    statement;
}

*/


$carries_weapon = false;

// if
// if($carries_weapon == true){
//     echo "Bank officer will call the police";
// }


// if else
// if($carries_weapon == true){
//     echo "Bank officer will call the police";
// }else{
//     echo "you can ask your query";
// }


// nested if

// $not_have_weapon = true;
// $acc_verification = true;

// if($not_have_weapon == false){
//     if($acc_verification ==  true){
//         echo "you can withdraw your cash";
//     }else{
//         echo "you can't withdraw your cash";

//     }
// }else{
//     echo "Police bulao";
// }


// $entity = "user";

// if($entity == "superadmin"){
//     echo "you have full access";
// }elseif($entity == "admin"){
//     echo "you have limited access";
// }elseif($entity == "user"){
//     echo "you can just change your profile";
// }


// loops for, while, do while, foreach

/*
for(initialization; condition; increment/decrement){
    statement;
}

*/

// for($i = 100; $i >= 0; $i--){
//     echo $i . "<br>";
// }




// Array
// indexed array, associative array, multi dimensional array
//         // 0        1       2       3 
// $names = ['Ali', 'aman', 'ebad', 'taha'];


// echo $names[2];

// array_push($names,"Hamza", "Usama");

// echo count($names) - 1;

// for($x = 0; $x < count($names); $x++){
//     echo $names[$x] . "<br>";
// }


// // associative array

// $marks = [
//     'aman' => 45,
//     'qasim' => 98,
//     'raffay' => 55,
//     'khawar' => 76
// ];
// // echo $marks['khawar'];

// foreach ($marks as $k => $v) {
//     echo $marks[$k] . "<br>";
// }


$counter = 1;

// while($counter <= 10){
//     echo $counter;
//     $counter++;
// }

// do{
//     echo $counter;
//     $counter++;
// }while($counter <= 20);


// multidimensional array

$multi_array = [
    [1,2,3,4,5],
    [6,7,8,9,10]
];



// for($x = 0; $x < count($multi_array); $x++){
//     for($y = 0; $y < count($multi_array[$x]); $y++){
//         echo $multi_array[$x][$y];
//     }
// }



// mulitdimensional associative array

// $marks = [
//     "Qasim" => ['Maths' => 99, "English" => -10, "Urdu" => 48],
//     "Aman" => ["Maths" => -15, "English" => 1, "Urdu" => 55],
//     "Taha" => ["Maths" => 99, "English" => 89, "Urdu" => 65],
// ];


// foreach ($marks as $key => $value) {
//     echo "$key <br>";
//     foreach($value as $k => $v){
//         echo "$k : $v <br>";
//     }
//     echo "<br>";
    
// }



// array functions

// array_push
// array_pop

$class_stds = ["ali", "qasim", "aman", "taha"];

// $new_array = array_pop($std_info);
// echo $new_array . "<br>";
// print_r($std_info);
// var_dump($std_info). "<br>";

// in_array



$std = "usama";



// if(in_array($std, $class_stds) == true){
//     echo "you can attend the class";
// }else{
//     echo "not allowed";
// }


// functions (block of code which can be reuse again and again)

// function addition(){
//     $a = 4;
//     $b = 5;
//     $result = $a + $b;
//     echo $result;
// }

// addition();
// echo "<br>";

// function subtract(){
//     $a = 4;
//     $b = 5;
//     $result = $a - $b;
//     echo $result;
// }

// subtract();



// function getFullName($firstName, $lastName){
//     echo $firstName . " " . $lastName;
// }

// getFullName("Ebad" , "Uddin");




$numbers = [1,2,3,4,5];

// $marks = [100,200,300,400,500, 600, 700];

// $std = ["Ebad", "Ali","aman"];


// function print_array($arr){

//     for($i = 0; $i < count($arr); $i++){
//         echo $arr[$i] ."<br>";
//     }

// }


// print_array($std);


// function with return statement

function getAddition($num1 = 6 , $num2 = 6){
    $result = $num1 + $num2;
    return $result;
}

// getAddition(2,1);
$data = getAddition();

echo $data;

// super global variables

/*

$_SERVER
$_POST
$_GET
$_REQUEST
$_FILES
$_COOKIE
$_SESSION


*/
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";



























































































?>