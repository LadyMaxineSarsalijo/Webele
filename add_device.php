<?php

// check $_POST method
// if empty or wla na set ang $_POST redirect sa Admin-home.php
// else insert ang add device sa db
if (!isset($_POST) || empty($_POST)) {
    header("Location: Admin-home.php");
}

$dname = $_POST['dname'];
$name = $_POST['name'];
$email = $_POST['email'];

$query = "add inyo query dre";
$query_run = mysqli_query($con, $query);
if ($query_run) {
    echo "<p><br><br>Add Successful</br></br>";
    header("Location: Admin-home.php");
} else {
    echo "Add Unsuccessful";
}
