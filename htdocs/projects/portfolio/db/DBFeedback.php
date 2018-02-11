<?php
include ('DBMain.php');

function sendFeedback($email, $org, $message){
    $query = "INSERT INTO feedbackrequests (userEmail, userOrganization, message) VALUES('$email','$org','$message')";
    $result = getdb()->query($query);
}

function getServiceSpecialist(){
    $csrequest = "SELECT * FROM servicespecialists ORDER BY rand() LIMIT 1";
    $response = getdb() ->query($csrequest);
    if($response->num_rows >0){
        while($row = $response->fetch_assoc()){
            return ($row['fname'].' '.$row['lname']);
        }
    } else {
        return 'Lucas Dina';
    }
}