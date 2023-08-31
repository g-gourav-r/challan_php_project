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
    <title>Karnataka Police</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
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
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="topnav">
    <a href="#">Traffic Challan</a>
    <div class="topnav-right">
        <a href="login.php" class="button">Officer Login</a>
    </div>
</div>

<div class="container">
    <h2>Challan Database</h2>
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
