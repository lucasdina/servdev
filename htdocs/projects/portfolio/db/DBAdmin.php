<?php
include ('DBMain.php');

function getFeedbackRequests(){
    $query0 = "SELECT * FROM feedbackrequests ";
    $response = getdb() ->query($query0);
    while($row = $response->fetch_array(MYSQLI_BOTH))
    {
        //Converting the response to an array of arrays
        $rows[] = $row;
    }

    return $rows;
}