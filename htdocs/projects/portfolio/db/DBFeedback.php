<?php
include ('DBMain.php');

function sendFeedback($email, $org, $message){
    try {
        $query = "INSERT INTO feedbackrequests (userEmail, userOrganization, message) VALUES('$email','$org','$message')";
        $result = getdb()->query($query);
    } catch (Exception $e){
        return false;
    }
}

function getServiceSpecialist(){
    try {
        $csrequest = "SELECT * FROM servicespecialists ORDER BY rand() LIMIT 1";
        $response = getdb()->query($csrequest);
        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                return ($row['fname'] . ' ' . $row['lname']);
            }
        } else {
            return 'Lucas Dina';
        }
    } catch (Exception $e){
        return false;
    }
}