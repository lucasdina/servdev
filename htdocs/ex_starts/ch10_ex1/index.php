<?php
//set default value
$message = '';
date_default_timezone_set('America/Denver');

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action =  'start_app';
}

//Function to check if a field is null or empty.
function IsNullOrEmptyString($field){
    return (!isset($field) || trim($field)==='');
}

//process
switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // make sure the user enters both dates
        if(IsNullOrEmptyString($invoice_date_s)){
            $invoice_date_f = 'Field cannot be empty.';
            $due_date_f = "";
            $current_date_f = "";
            $current_time_f = "";
            $due_date_message = "";
            break;
        }
        if(IsNullOrEmptyString($due_date_s)){
            $due_date_f = 'Field cannot be empty.';
            $invoice_date_f = "";
            $current_date_f = "";
            $current_time_f = "";
            $due_date_message = "";
            break;
        }

        // convert date strings to DateTime objects
        // and use a try/catch to make sure the dates are valid
        // format both dates
        try{
            $invoice_date_f = date("l jS, Y", strtotime($invoice_date_s));
        } catch(Exception $e){
            $invoice_date_f = "Date was not formatted correctly.";
            $due_date_f = "";
            $current_date_f = "";
            $current_time_f = "";
            $due_date_message = "";
            break;
        }
        try{
            $due_date_f = date("l jS, Y", strtotime($due_date_s));
        } catch(Exception $e){
            $due_date_f = "Date was not formatted correctly.";
            $invoice_date_f = "";
            $current_date_f = "";
            $current_time_f = "";
            $due_date_message = "";
            break;
        }

        // make sure the due date is after the invoice date
        if((strtotime($due_date_s)-strtotime($invoice_date_s))<0){
            $due_date_message = "Due date must be after the invoice date.";
            break;
        }
        
        // get the current date and time and format it
        $current_date_f = date("l jS, Y");
        $current_time_f = date('g:i:s a');
        $epochTime = new DateTime('now');
        $epochTime = date_timestamp_get($epochTime);
        // get the amount of time between the current date and the due date
        // and format the due date message
        if ($epochTime>strtotime($due_date_s)){
            $diff = $epochTime-strtotime($due_date_s);
            $years = floor($diff/31557600);
            $diff -= ($years*31557600);
            $months = floor($diff/2629746);
            $diff -= ($months*2629746);
            $days = floor($diff/86400);
            $due_date_message = "Your invoice is ".$years." years, ".$months." months, and ".$days." days overdue.";
        }
        else {
            $diff = strtotime($due_date_s)-$epochTime;
            $years = floor($diff/31557600);
            $diff -= ($years*31557600);
            $months = floor($diff/2629746);
            $diff -= ($months*2629746);
            $days = floor($diff/86400);
            $due_date_message = "Your invoice is due in ".$years." years, ".$months." months, and ".$days." days.";
        }
        break;
}
include 'date_tester.php';
?>