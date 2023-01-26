<html>
<head>
<style>
table {
position: middle;
width: 100%;
height: 90%;
border-collapse:collapse;
background-color:#F8D866;
color: #000;
font-size: 18px;

}
a {
color: black;
}
a:hover {
background-color:white;
transition: .5s;
}

</style>
</head>
<body>
<?php include("./SQLConnect.php");?>
<?php
echo "<br><br>";
echo "<table border='1'>
<th>User ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Action</th>
<th>Action</th>
";

$query1 = mysqli_query($con, "SELECT * FROM users WHERE status =
'Active'") or die(mysqli_error());
while($row = mysqli_fetch_array($query1)){
echo "<tr>
<td>$row[userID]</td>
<td>$row[fname]</td>
<td>$row[lname]</td>
<td>$row[email]</td>
<td>$row[password]</td>
<td align='center'><a style='text-decoration:none;'

href='delete.php/?id=$row[userID]'>X</a></td>


<td align='center'><a style='text-decoration:none;'

</tr>";

}
echo "</table><br><br>"
?>
</html>