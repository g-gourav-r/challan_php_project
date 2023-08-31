<!DOCTYPE html>
<html>
<head>
    <title>Officer Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Your existing styles remain unchanged */

        body {
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar-left {
            float: left;
        }

        .navbar-right {
            float: right;
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
    </style>
</head>
<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="traffic_challan_db";

    $con = mysqli_connect($host,$user,$password,$db);
    //mysql_select_db($db);

    if(isset($_POST['username'])){
        
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
        
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)==1){
            header("Location: challan.php");
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
            
    }
?>
<body>

<div class="navbar">
    <div class="navbar-left">
        <a href="index.php">Traffic Challan</a>
    </div>
    <div class="navbar-right">
        <a href="index.php">Home</a>
    </div>
</div>

<div class="container">
    <div class="box">
        <h2>Officer Login</h2>
        <form method="post" action="">
        <div class="form" id="frm">
                <form name="frmContact" action="#" method="POST">
                    <input type="text" name="username" required="required" placeholder="Enter the Username" autofocus required></input>  
                    <input type="password" name="password" required="required" placeholder="Enter the Password" required></input>
                    <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
                </form>
            </div>
        </form>
    </div>
</div>

</body>
</html>
