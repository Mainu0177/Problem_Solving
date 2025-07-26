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