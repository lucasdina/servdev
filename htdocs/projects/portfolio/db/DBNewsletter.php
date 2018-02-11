<?php
include ('DBMain.php');

function addUserToNewsLetter($fname, $lname, $email){
    $query = "INSERT INTO newslettersubscribers (fname, lname, email) VALUES ('$fname', '$lname', '$email')";
    $response = getdb()->query($query);

    if (!$response){
        $message = 'Invalid query: '. mysql_error(). '/n';
        $message .= 'Whole query: '. $query;
        die($message);
    }
}

function removeUserFromEmailList($email){
    $subName = null;
    $query0 = "SELECT fname FROM newslettersubscribers WHERE email = '$email'";
    $response = getdb() ->query($query0);
    if($response->num_rows >0){
        while($row = $response->fetch_assoc()){
            $subName = $row['fname'];
        }
    }

    $query = "DELETE FROM newslettersubscribers WHERE email = '$email'";
    $response0 = getdb() ->query($query);
    if (!$response){
        $message = 'Invalid query: '. mysql_error(). '/n';
        $message .= 'Whole query: '. $query;
        die($message);
    }

    return $subName;
}