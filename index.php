<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "traffic_challan_db";

$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$challan_query = "SELECT * FROM challan";
$challan_result = mysqli_query($con, $challan_query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home | Traffic Challan</title>
    <style>

         @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');

        body {
            color: #2C3E50;
            margin: 0;
            background-color: #BDC3C7;
            font-family: Arial, Helvetica, sans-serif;
            font-family: 'Inter', sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #2C3E50;
        }

        .topnav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topnav-right {
            float: right;
        }
        

        .topnav-right a {
            border-radius: 25px;
            background-color: #34495E;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
        }
        .topnav-right a:hover{
            background-color: white;
            color:#34495E
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #BDC3C7;
        }

        tr {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="topnav">
    <a href="#" style="pointer-events: none">Ride Safe Ride Responsibly</a>
    <div class="topnav-right">
        <a href="login.php" class="button">Officer Login</a>
    </div>
</div>

<div class="container">
    <center><h1>Challan Database</h1>
    <p>Official traffic challan viewing portal</p></center>
    <div class="challan-list">
        <table>
            <tr>
                <th>ID</th>
                <th>Vehicle Number</th>
                <th>Violation Type</th>
                <th>Date Issued</th>
                <th>Amount (Rs)</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($challan_result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['vehicle_number'] . "</td>";
                echo "<td>" . $row['violation_type'] . "</td>";
                echo "<td>" . $row['date_issued'] . "</td>";
                echo "<td>" . number_format($row['amount'], 2) . " Rs</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
