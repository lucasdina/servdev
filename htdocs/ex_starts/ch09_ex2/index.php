<?php
//set default values
$number1 = 78;
$number2 = -105.33;
$number3 = 0.0049;
$message = 'Enter some numbers and click on the Submit button.';

//Function to check if a field is null or empty.
function IsNullOrEmptyString($field){
    return (!isset($field) || trim($field)==='');
}

//process
$action = filter_input(INPUT_POST, 'action');
switch ($action) {
    case 'process_data':
        $number1 = filter_input(INPUT_POST, 'number1');
        $number2 = filter_input(INPUT_POST, 'number2');
        $number3 = filter_input(INPUT_POST, 'number3');
        $numArray = [$number1, $number2, $number3];


        // make sure the user enters three numbers
        if(IsNullOrEmptyString($number1)){$message = "Number 1 can't be empty or null."; break;}
        if(IsNullOrEmptyString($number2)){$message = "Number 2 can't be empty or null."; break;}
        if(IsNullOrEmptyString($number3)){$message = "Number 3 can't be empty or null."; break;}

        // make sure the numbers are valid
        if(!is_numeric($number1)){$message = "Number 1 must be numeric."; break;}
        if(!is_numeric($number2)){$message = "Number 2 must be numeric."; break;}
        if(!is_numeric($number3)){$message = "Number 3 must be numeric."; break;}

        // get the ceiling and floor for $number2
        $number2_floor = floor($number2);
        $number2_ceil = ceil($number2);

        // round $number3 to 3 decimal places
        $number3_rounded = round($number3, 3);

        // get the max and min values of all three numbers
        $min = 0;
        $max = 0;
        foreach ($numArray as $num){
            if ($num > $max) $max = $num;
            if ($num < $max) $min = $num;
        }

        // generate a random integer between 1 and 100
        $random = rand(0, 100);

        // format the message
        $message =
            "Number 1: $number1\n" .
            "Number 2: $number2\n" .
            "Number 3: $number3\n" .
            "\n" .
            "Number 2 ceiling: $number2_ceil\n" .
            "Number 2 floor: $number2_floor\n" .
            "Number 3 rounded: $number3_rounded\n" .
            "\n" .
            "Min: $min\n" .
            "Max: $max\n" .
            "\n" .
            "Random: $random\n";

        break;
}
include 'number_tester.php';
?>