<!DOCTYPE html>
<html>
<head>
    <title>Challan Entry</title>
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

        .navbar a.logout {
            background-color: red;
            border-radius: 5px;
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
            border: none; /* Removed border */
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-left">
        <a href="#">Karnataka Police</a>
    </div>
    <div class="navbar-right">
        <a href="index.php" class="logout">Logout</a>
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
                <input type="submit" name="submit_challan" value="Submit">
            </div>
        </form>
    </div>
</div>

</body>
</html>
