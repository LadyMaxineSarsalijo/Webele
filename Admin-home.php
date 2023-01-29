<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <style>
        body {
            position: absolute;
            width: 1920px;
            height: 1080px;
            background: #EFECE1;
            border-radius: 10px;
        }

        .rectangle {
            position: fixed;
            width: 2150px;
            height: 85px;
            left: -10px;
            top: 0px;
            background: #F9D75C;
        }

        .logo {
            position: absolute;
            left: 10.9%;
            right: 78.82%;
            top: -10px;
            bottom: 90.14%;
            width: 80px;
            height: 90.83px;
        }

        .ec {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 50px;
            top: 20px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 67.55px;
            color: #000000;
        }

        .logout {
            position: border-box;
            background-position: absolute;
            box: #FBF5D4;
            border: 1px solid #000000;
            height: 82px;
            text-align: center;
            width: 150px;
            font-size: 20px;
        }

        .lg {
            position: fixed;
            right: -72px;
            width: 222.67px;
            top: 0px;

        }

        .adddevices {
            position: absolute;
            box-sizing: border-box;
            background: #F9D75C;
            border: 1px solid #000000;
            height: 50px;
            text-align: center;
            width: 150px;
            font-size: 15px;
        }

        .ad {
            position: absolute;
            top: 450px;
            left: 3.5%;

        }

        .ad1 {
            position: absolute;
            top: 550px;
            left: 3.5%;

        }

        .adddevices1 {
            position: absolute;
            box-sizing: border-box;
            background: #F9D75C;
            border: 1px solid #000000;
            height: 50px;
            text-align: center;
            width: 150px;
            font-size: 15px;
        }

        .rectangle13 {
            position: absolute;
            width: 297px;
            height: 1065px;
            left: -8px;
            background: #FFFDFD;
            ;
            top: 75px;
        }

        .square {
            position: absolute;
            width: 1737px;
            height: 1065px;
            left: 340px;
            background-image: url("female.png");
            background: #FFFDFD;
            top: 160px;

        }

        .user {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 350px;
            top: 100px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 67.55px;
            color: #000000;
        }

        .name {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 355px;
            top: 160px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 23px;
            line-height: 67.55px;
            color: #000000;
        }

        .nod {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 650px;
            top: 160px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 23px;
            line-height: 67.55px;
            color: #000000;
        }

        .dbl {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 1060px;
            top: 160px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 23px;
            line-height: 67.55px;
            color: #000000;
        }

        .status {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 1530px;
            top: 160px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 23px;
            line-height: 67.55px;
            color: #000000;
        }

        .actions {
            position: absolute;
            width: 308px;
            height: 63.92px;
            left: 1860px;
            top: 160px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 23px;
            line-height: 67.55px;
            color: #000000;
        }

        .fmlg {
            position: absolute;
            left: 4.1%;
            right: 66.82%;
            top: 115px;
            bottom: 90.14%;
            width: 120px;
            height: 115.83px;
        }

        #popup-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #F3DA82;
            padding: 20px;
            border: 1px solid black;
        }
    </style>
    <div> </div>
    <div class="rectangle13"></div>
    <div class="square" <?php include("./registered_users.php")?>></div>
    <div class="ad">
        <button onclick="window.location='devices.php';" class="adddevices"><b>DEVICES</b></button></div>
    <div>
        <div class="ad1">

            <button id="popup-button" class="adddevices"><b>ADD DEVICES</b></button></div>
    </div>
    <div id="popup-form" style="display:none">

        <!-- butangi lng og action inyo form -->
        <form action="add_device.php" method="post">
            <b><label for="dname">Name of Device</label></b>
            <input type="text" id="dname" name="dname">
            <b><label for="name">No. of Devices</label></b>
            <input type="text" id="name" name="name">
            <b> <label for="email">No. of Hours </label></b>
            <input type="email" id="email" name="email">
            <button type="submit">Submit</button>
            <button id="popup-close">Close</button>
        </form>

    </div>

    <div class="rectangle"></div>
    <div class="lg">
        <button onclick="window.location='index.php';" class="logout"><b>LOG OUT</b></button>
    </div>
    </div>
    <div>
        <img class="logo" src="logo2.png" alt="">
    </div>
    <div>
        <img class="fmlg" src="user1.png" alt="">
    </div>

    <div class="ec">
        <b>electriCAL</b>
    </div>
    <script>
        document.getElementById("popup-button").addEventListener("click", function () {
            document.getElementById("popup-form").style.display = "block";
        });

        document.getElementById("popup-close").addEventListener("click", function () {
            document.getElementById("popup-form").style.display = "none";
        });
    </script>
</body>

</html>