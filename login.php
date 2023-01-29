<?php 

include("./SQLConnect.php");

if(isset($_POST['email'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM admin where email='".$email."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
    echo "<a href='./Admin-home.php'><input type='button' value='Home'/></a>";
}
?>