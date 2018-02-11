<?php

function getdb(){
    $servername = 'localhost';
    $username = 'projectone_admin';
    $passwd = '1qazxsw2';
    $dbname = 'project1';

    //Creating db link
    $link = mysqli_connect($servername, $username, $passwd, $dbname);
    if($link->connect_error){
        die('Not connected : '.$link->connect_error);
    } else {
        return $link;
    }
}

?>