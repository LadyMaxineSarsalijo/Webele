<?php
//register.php
//Inserts new student record to tbl_students table in newbies_db database.
include("./SQLConnect.php");
$query = mysqli_query($con,"INSERT INTO admin (email, fname, lname,password) VALUES 
('$_POST[email]','$_POST[fname]','$_POST[lname]','$_POST[password]')") or die(mysql_error());
if(!$query){
echo '<p>Alert! Admin not added.</p>';
}
else{
echo  ("Admin successfully added!");
}
//echo "<a href='./Admin-home.php'><input type='button' value='Home'/></a>";
?>