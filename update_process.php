<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<style>
.login_container1{
width: 70%;
height: 50%;
margin-bottom:10% auto;
align-items: center;
}
.login-inside-container1 {
height: 350px;
background: teal;
padding-top: 25px;
width: 50%;
display: flex;
}
.form-container1 {
flex-direction: column;
width: 510px;

align-items: center;
align-content: center;
justify-content: center;
margin-bottom: 20px;
}
.input_container1{
margin: auto;
align-items: center;
justify-content: center;
padding: 10%;
border-radius: 5px;
width: -500%;
height: 420px;
}
.user_input1{
font-size:20px;
font-style: Serif;
color: black;
}
.p1 {
font-size:25px;
font-style: Serif;
color: white;
margin: 0;
}
</style>
<br><br>
<br><br><center>
<div class = "login_container1">
<div class ="login-inside-container1">
<div class = "form-container1">
<p class= "p1"> <strong> Fill Out to Update <strong> <p1>
<div class="input_container1">
<form action="update.php" method="POST">
<table>
<tr>
<td><input type ="text" name="studID" placeholder="Current Student

ID" class = "user_input1"></td>

</tr><tr>
<td><input type ="text" name="firstName" placeholder="Update First

Name" class = "user_input1"></td>

</tr><tr>
<td><input type ="text" name="lastName" placeholder="Update Last

Name" class = "user_input1"></td>

</tr><tr>
<td><input type ="text" name="MI" placeholder="Update Middle Initial"

class = "user_input1"></td>
</tr><tr>
<td><input type ="text" name="course" placeholder="Update Course"

class = "user_input1"></td>
</tr><tr>
<td><input type ="text" name="yearlevel" placeholder="Update Year

Level" class = "user_input1"></td>

</tr><tr>
<td colspan="4">
<button type="submit" name="update" class =

"user_input1">Update</button>

</td>
</tr>
</table>
</form>
</body>
</html>