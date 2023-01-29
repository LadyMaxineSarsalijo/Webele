<?php

// suggestions
// pwede na e remove ang gpang comment sa ubos pra limpyo inyo code pra dle mo maglibog

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_electrical';
//Connection String
$con = mysqli_connect($hostname, $username, $password, $db_name);
//Host name, Username, Password :NO, DB name

//Test connection to database
if (!$con) {
    die('Could not connect: ' . mysqli_error()); // If not connected
}




// else{
// //echo "<br><br>Status: Connected to phpmyadmin"; //If connected
// }
// $db = mysqli_select_db($con,"db_electrical"); //Select a specific database
// if(!$db){
// die('<br>No Database: ' . mysqli_error($con)); // If not connected
// }
// else{
// //echo "<br>Connected to Database.";
// }

// $db = mysqli_select_db("datashop", $con);
// if(!$db){
// echo "database does not exist";
// }
// else{
// echo "Connected to database";
// }
// $query=mysqli_query("Select * from tbl_products") or die(mysqli_error());
// while($row = mysqli_fetch_array($query)){
// echo $row['PID'];
// }
