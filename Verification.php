<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verification</title>
    <style>
        /* #27212d
#a527ff */
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #000;
    font-family: "sans-serif-condensed"
    
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    height: 100vh;
    background-image: url("verification.jpg");
    background-size: 1365px 698px;
}
.otp
{
    display: flex;
    margin-bottom: 50px;
}
.otp input
{
    width: 60px;
    font-size: 24px;
    margin: 2px;
    padding: 10px;
    background:none;
    outline: none;
    border: 2px solid #27212d;
    border-radius: 5px;
    text-align: center;
    color: #000;
    transition: all .3s ease;
}
.otp input:focus
{
    border: 2px solid black;
    box-shadow: 0 0 4px 4px #DCB900;
}
.spacing
{
    margin-right: 1rem !important;
}
button
{
    padding: 15px 55px;
    background-color: #DCB900;
    color: #000;
    font-size: 16px;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all .3s;
    font-family: "sans-serif-condensed"
}
button:active
{
    transform: scale(.9);
}
    </style>
</head>
<body>
    <h1 class="otp">Enter OTP</h1>
    <div class="otp">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1" >
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
    </div>
    <button onclick="window.location='resetPassword.php';"><b>Validate</b></button>
</body>
</html>
