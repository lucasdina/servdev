<?php
//connect to db
$servername = 'localhost';
$username = 'projectone_admin';
$passwd = '1qazxsw2';
$dbname = 'project1';

//grab id from POST
$id = $_POST['requestId'];

//Create db link
$link = mysqli_connect($servername, $username, $passwd, $dbname);
if($link->connect_error){
    die('Not connected : '.$link->connect_error);
}

//Create sql query
$query0 = "DELETE FROM feedbackrequests where `ID` = ".$id;
$response = $link ->query($query0);
if($response){
    include 'admin.php';
}