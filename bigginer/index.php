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
echo "Enter String: \n";
$input = trim(fgets(STDIN));

$number = '';

for($i = 0; $i < strlen($input); $i++){
    if(is_numeric($input[$i])){
        $number = $input[$i];
        break;
    }
}

echo $number . PHP_EOL;


