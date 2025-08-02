<?php

// 1. Write a PHP function that takes a string as input and returns a new string with all special characters removed.
// function removeSpecialChar($str) {
//     return preg_replace("/[\.!@#\$%\^&,\*\(\)]/", "", $str);
// }
// // echo "Enter String: \n";
// // $input = trim(fgets(STDIN));
// $input = readline("Enter String: ");

// // call the function
// $output = removeSpecialChar($input);
// echo "Output:\n";
// echo $output . "\n";


// 2.
// echo "Enter String: \n";
// $input = trim(fgets(STDIN));

// $number = '';

// for($i = 0; $i < strlen($input); $i++){
//     if(is_numeric($input[$i])){
//         $number = $input[$i];
//         break;
//     }
// }

// echo $number . PHP_EOL;


// 2.
    // echo "Enter String: \n";
    // $input = trim(fgets(STDIN));
    // function extractNumber($input){
    //     $number = '';

    //     for($i = 0; $i < strlen($input); $i++){
    //         if(is_numeric($input[$i])){
    //             $number .= $input[$i];
    //         }
    //     }
    //     return $number;
    // }

    // $result = extractNumber($input);

    // echo $result . PHP_EOL;

// 3. Write a PHP function that takes a number as input and returns the sum of all the natural numbers up to that number.
// echo "Enter Number: \n";
// $input = (int)trim(fgets(STDIN));
// function sumOfNaturalNumber($input){
//     $sum = 0;
//     for($i = 1; $i <= $input; $i++){
//         $sum += $i;
//     }
//     return $sum;
// }

// $result = sumOfNaturalNumber($input);
// echo $result . PHP_EOL;

// mathematical formula
// function sumOfNaturalNumber($input){
//     return ($input * ($input + 1)) / 2; // (n * (n + 1)) / 2
// }
// $result = sumOfNaturalNumber($input);
// echo $result . PHP_EOL;

// 4. Write a PHP function that takes a number as input and returns the remainder when divided by 2.
// echo "Enter Number: \n";
// $input = strtolower(trim(fgets(STDIN)));
// function getReminderByTwo($word){
//     $wordToNumber = [
//         'zero' => 0,
//         'one' => 1,
//         'two' => 2,
//         'three' => 3,
//         'four' => 4,
//         'five' => 5,
//         'six' => 6,
//         'seven' => 7,
//         'eight' => 8,
//         'nine' => 9
//     ];
//     if(array_key_exists($word, $wordToNumber)){
//         $number = $wordToNumber[$word];
//         return $number % 2;
//     }
// }
// echo getReminderByTwo($input) . PHP_EOL;


// 5. Write a PHP function that takes a number as input and returns true if the number is a repeated digit.
// echo "Enter Number: \n";
// $input = trim(fgets(STDIN));
// function isRepdigit($number){
//     // convert number to string
//     $number = (string) $number;
    
//     for($i = 0; $i < strlen($number); $i++){
//         if($number[$i] != $number[0]){
//             return false;
//         }
//     }
//     return true;
// }
// $result = isRepdigit($input);
// if($result){
//     echo "true";
// }else{
//     echo "false";
// }

// 6.
// echo "Enter Number: \n";
// $input = (int) trim(fgets(STDIN));
// function evenOrOdd($number){
//     if($number % 2 == 0){
//         return "even";
//     }else{
//         return "odd";
//     }
// }
// $result = evenOrOdd($input);
// if($result == "even"){
//     echo "even";
// }else{
//     echo "odd";
// }
// $input = (int)trim(fgets(STDIN));
//     function evenOrOdd($number){
//         $number = str_replace("-", "", $number);
//         $sum = 0;
//         for ($i = 0; $i < strlen($number); $i++) {
//             $sum += (int)$number[$i];
//         }

//         if ($sum % 2 == 0) {
//             return "Even";
//         } else {
//             return "Odd";
//         }
//     }
//     $result = evenOrOdd($input);
//     echo $result . PHP_EOL;

// 7. 
// echo "Enter a number: \n";
// $input = (int) trim(fgets(STDIN));
// function isConsecutive($arr){
//     $number = count($arr);
//     if($number == 0){
//         return false;
//     }

//     $unique = array_unique($arr);
//     if(count($unique) != $number){
//         return false;
//     }

//     $min = min($arr);
//     $max = max($arr);
//     return ($max - $min + 1);
// }

// $line = trim(fgets(STDIN));
// $arr = array_map('intval', explode(" ", $line));

// $result = isConsecutive($arr);
// echo $result ? "true\n" : "false\n";

// function isConsecutive($arr) {
//     $n = count($arr);
//     if ($n == 0) return false;

//     // 🔁 ডুপ্লিকেট চেক
//     $unique = array_unique($arr);
//     if (count($unique) != $n) return false;

//     // ✅ min, max
//     $min = min($arr);
//     $max = max($arr);

//     // 🧠 ধারাবাহিক কি না
//     // 1 থেকে N পর্যন্ত সংখ্যা থাকলে max - min + 1 == n হবে
//     if ($max - $min + 1 != $n) return false;

//     // 🎯 check every element in the range exists
//     $set = array_flip($arr);
//     for ($i = $min; $i <= $max; $i++) {
//         if (!isset($set[$i])) {
//             return false;
//         }
//     }

//     return true;
// }

// // ✅ ইনপুট নেওয়া
// echo "Enter number of elements: ";
// $handle = fopen("php://stdin", "r");
// $n = (int)trim(fgets($handle));

// echo "Enter $n numbers separated by space:\n";
// $line = trim(fgets($handle));
// $arr = array_map('intval', explode(" ", $line));

// // ✅ রেজাল্ট
// echo isConsecutive($arr) ? "true\n" : "false\n";

    $input = (int) trim(fgets(STDIN));
    function isConsecutive($arr){
    $number = count($arr);
    if($number == 0) return false;

    $unique = array_unique($arr);
    if(count($unique) != $number) return false;

    $min = min($arr);
    $max = max($arr);
    if ($max - $min + 1 != $number) return false;

    $set = array_flip($arr);
    for($i = $min; $i <= $max; $i++){
        if(!isset($set[$i])) return false;
    }
    return true;
}

$line = trim(fgets(STDIN));
$arr = array_map('intval', explode(" ", $line));

$result = isConsecutive($arr);
echo $result ? "true\n" : "false\n";