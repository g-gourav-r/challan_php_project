<!DOCTYPE html>
<html>
<head>
    <title>File a Challan | Traffic Challan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Your existing styles remain unchanged */

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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: fit-content;
            background-color: #f2f2f2;
        }

        .box {
            
            padding: 20px;
            width: 400px;
            border: none; /* Removed border */
        }
    </style>
</head>
<body>

<div class="topnav">
    <a href="#" style="pointer-events: none">Ride Safe Ride Responsibly</a>
    <div class="topnav-right">
        <a href="index.php" class="button">Log Out</a>
    </div>
    <div class="topnav-right">
        <a href="modify.php" class="button">Modify Challan</a>
    </div>
    
</div>

<div class="container">
    <div class="box">
        <h2>Challan Entry</h2>
        <form method="post" action="process_challan.php">
            <div class="form-group">
                <label for="vehicle_number">Vehicle Number:</label>
                <input type="text" name="vehicle_number" required>
            </div>
            <div class="form-group">
                <label for="violation_type">Violation Type:</label>
                <input type="text" name="violation_type" required>
            </div>
            <div class="form-group">
                <label for="date_issued">Date Issued:</label>
                <input type="date" name="date_issued" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount (Rs):</label>
                <input type="number" step="0.01" name="amount" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit_challan" value="Add Challan">
            </div>
        </form>
    </div>
</div>

</body>
</html>
