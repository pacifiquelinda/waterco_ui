<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/member.css">
    <link rel="icon" href="images/logo.png">
    <title>Waterco/Member</title>
</head>
<body>
    <div class="container">
        <div class="nav">
            <h1>WATERco</h1>
            <hr>
            <ul>
                <li><a href="member.php">Members</a></li>
                <li><a href="premise.php">Premises</a></li>
                <li><a href="bill.php">Bills</a></li>
                <li><a href="payment.php">Payments</a></li>
                <li><a href="route.php">Routes</a></li>
                <li><a href="user.php">Users</a></li><br><br><br><br><br><br><br><br><br>
                <li><a href="index.php">LogOut</a></li>
            </ul> 
        </div>
        <div class="body-part">
            <div class="insertion">
                <form action="">
                    <h2>Add Bill</h2><br><br>
                    <label for="">No_Zones:</label><br>
                    <input type="text"><br><br>
                    <input type="button" value="Add Bill" id="btn"><br><br>
                </form>
            </div>
            <div class="view-data">
                <table>
                    <tr>
                        <th>Bill Id</td>
                        <th>No_Zones</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>350</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html> 