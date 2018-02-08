<?php
$lifetime = 60*60*24*365;    // 1 years in seconds
session_set_cookie_params($lifetime, '/');
session_start();
echo "<p>Session ID: ".session_id()."</p>";

// Create a tasklist array if needed
if (empty($_SESSION['tasklist'])) { $_SESSION['tasklist'] = array(); }

$task_list = filter_input(INPUT_POST, 'tasklist', FILTER_DEFAULT,
        FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = array();
}
$action = filter_input(INPUT_POST, 'action');
$errors = array();
//print_r($_SESSION);

switch( $action ) {
    case 'add':
        $new_task = filter_input(INPUT_POST, 'newtask');
        print_r($new_task);
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($_SESSION['tasklist'], $new_task);
        }
        print_r($_SESSION);
        break;
    case 'delete':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($_SESSION['tasklist'][$task_index]);
            $_SESSION['tasklist'] = array_values($_SESSION['tasklist']);
        }
        break;
}

include('task_list.php');
?>