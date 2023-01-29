<?php
session_start();
if(isset($_POST['update']))
{
$id = $_POST['studID'];
$last = $_POST['lastName'];
$first = $_POST['firstName'];
$mi = $_POST['MI'];
$xcourse = $_POST['course'];
$year = $_POST['yearlevel'];
$query = "UPDATE tbl_students SET lastName='$last', firstName='$first' ,
MI='$mi', course='$xcourse', yearlevel='$year' WHERE studID='$id' ";
$query_run = mysqli_query($con, $query);
if($query_run)
{
echo "<p><br><br>Update Successful</br></br>";

}
else
{
echo "Update Unsuccessful";
}
}
include ('registered_users.php');
?>