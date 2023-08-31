<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "traffic_challan_db";

$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit_challan'])) {
    $vehicle_number = $_POST['vehicle_number'];
    $violation_type = $_POST['violation_type'];
    $date_issued = $_POST['date_issued'];
    $amount = $_POST['amount'];

    $insert_query = "INSERT INTO challan (vehicle_number, violation_type, date_issued, amount) VALUES ('$vehicle_number', '$violation_type', '$date_issued', $amount)";

    if (mysqli_query($con, $insert_query)) {
        echo '
        <!DOCTYPE html>
<html>
<head>
    <title>Centered Box Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
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
            text-align: center;
        }

        .greeting {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #1c1c25;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-left">
        <a href="#">Karnataka Police</a>
    </div>
</div>

<div class="container">
    <div class="box">
        <div class="greeting">
            Challan added Successfully !!! 
        </div>
        <br>
        <a href="challan.php" class="btn">DONE</a>
    </div>
</div>

</body>
</html>

        ';
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
