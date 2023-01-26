<html>
<head>
</head>
<?php include("./SQLConnect.php");?>
<body>
<style>
.login_container{
width: 70%;
height: 50%;
margin-top:10% auto;
margin-bottom:10% auto;
align-items: center;
justify-content: center;
}
.login-inside-container {
height: 500px;
background: teal;
padding-top: 25px;

width: 50%;
display: flex;
}
.form-container {
flex-direction: column;
width: 510px;
align-items: center;
align-content: center;
justify-content: center;
margin-bottom: 20px;
}
.input_container{
margin: auto;
align-items: center;
justify-content: center;
padding: 10%;
border-radius: 5px;
width: -500%;
height: 420px;
margin-top: 20%;
}
.user {
font-size:25px;
font-style: Serif;
color: white;
}
.user_input {
font-size:25px;
font-style: Serif;
color: black;
}
</style>
<center>
</td><td valign="top">
<?php //second column?>
<div class = "login_container">
<div class ="login-inside-container">
<br><br><br><br>
<div class = "form-container">
<div class="input_container">
<form method="POST" action="login.php">
<table allign="center">

<tr><td class = "user">Email:</td><td><input type="text"

name="email" class="user_input"></td></tr>

<tr><td class = "user">Password:</td><td><input type="text"

name="password" class ="user_input"></td></tr>

<tr><td colspan="2" allign="center"><input type="submit"

name="btn_login" value="Login" class = "user_input"></td></tr>
<tr><td colspan="2" allign="center"><a

href='./registration.php'><input type='button' value='Register' class =
"user_input"/></a>

</td></tr>
</table>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
