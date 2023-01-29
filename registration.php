<html>
<head>
<link rel="stylesheet" href="./style.css" media="screen">
<style>
a{color:black;}
a:hover{background-color:yellow; color:black;}
</style>
</head>
<body>
<style>
.login_container2{
width: 70%;
height: 50%;
padding-top: 65px;
margin-top:10% auto;
margin-bottom:10% auto;
align-items: center;
justify-content: center;
}
.login-inside-container2{
height: 500px;

background: teal;
padding-top: 25px;
width: 50%;
display: flex;
}
.form-container2{
flex-direction: column;
width: 510px;
align-items: center;
align-content: center;
justify-content: center;
margin-bottom: 20px;
}
.input_container2{
margin: auto;
align-items: center;
justify-content: center;
border-radius: 5px;
width: -500%;
height: 420px;
}
.user_input2{
font-size:20px;
font-style: Serif;
color: black;
}
.p2{
font-size:25px;
font-style: Serif;
color: white;
}
</style>
<br><br><center>
<div class = "login_container2">
<div class ="login-inside-container2">
<div class = "form-container2">
<p class = "p2"> <strong> REGISTER HERE <strong> </p>
<div class="input_container2">
<form method="POST" action="register.php">
<table>
<tr>

<td><input type ="text" name="fname"

placeholder="First Name" class = "user_input2"></td>
</tr><tr><tr></tr><tr></tr>

<td><input type ="text" name="lname"

placeholder="Last Name" class = "user_input2"></td>
</tr><tr><tr></tr><tr></tr>

<td><input type ="text" name="email" placeholder="Email" class = "user_input2"></td>

</tr><tr><tr></tr><tr></tr>
<td><input type ="text" name="password" placeholder="Password" class = "user_input2"></td>

</tr><tr><tr></tr><tr></tr>
<td colspan="4"><br>
<input type ="submit" name="btn_register"

value="Register" class = "user_input2"/>

<?php include("./SQLConnect.php"); ?>
</td>
</tr>
</table>
</form>
</center>

</body>
</html>