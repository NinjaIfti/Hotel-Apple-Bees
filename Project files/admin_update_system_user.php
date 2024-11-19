<?php include_once 'includes/db.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update System User Admin</title>

    <!-- CSS style -->
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <h1>Update System User Login Details</h1>
    <div class = "form1">
        <form id = "regGuestFormReception" action="config/admin_updateSystemUser_config.php" method="post">
            <table class="SearchTable">
                <tbody>
                <tr>
                    <td>Employee ID: </td>
                    <td><input class="userInput" type="number" id="empID" name="empID" required></td>
                </tr>
                <tr>
                    <td>New UserName: </td>
                    <td><input class="userInput" type="text" id="UserName" name="UserName" required></td>
                </tr>
                <tr>
                    <td>New Password: </td>
                    <td><input class="userInput" type="text" id="password" name="password" required></td>
                </tr>

                </tbody>
                </table>

                <br />
                <button type="submit" name="Submit">Update</button>
        </form>

    </div>

</body>
</html>