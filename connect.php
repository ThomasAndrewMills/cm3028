<?php
//connect to csdm-webdev server and select database
$db = new mysqli(
        "eu-cdbr-azure-west-a.cloudapp.net",
        "b083e6b6e1b36a",
        "2f7148ee",
        "1401990cm3028db"
);
//test if connection was established, and print any errors
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

//create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
//execute the SQL query
$result = $db -> query ($sql_query);

//iterate over $result object one $row at a time
//use fetch_array() to return an associative array
while($row = $result ->fetch_array()){
    //process the row
    //print out fields form row of data
    echo "<p>'</p>"
}