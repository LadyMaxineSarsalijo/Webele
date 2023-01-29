<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<style>
body {
background-color: white;
}
.nav {
background-color: teal;
list-style-type: none;
text-align: center;
position: fixed; top:0; width:100%;
}
.nav li {
display: inline-block;
font-size: 20px;
padding: 20px;
}
.nav li a{

text-decoration: none;
color:white
}
.nav li a:hover {
background-color: black;
transition: .5s;
}
</style>
<body>
<h1>Home page!</h1>
<div id="main-container">
<ul class = "nav">
<li><a href='#'>Home</a></li>
<li><a href='./registered_users.php'>Accounts</a></li>
<li><a href='#'>Operations</a></li>
<li><a href='./index.php'>Logout</a></li>
</ul>
<?php include("./registered_users.php");?>
</div>
<br></br>
</html>
<?php include("./login.php");?>