<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <form action="../controller/change-password-check.php" method="POST">
        <fieldset>
            <legend>
                <h1>Change Password</h1>
            </legend>
            <table>
                <tr>
                    <td>Current password</td>
                    <td><input type="password" name="current-password"></td>
                </tr>
                <tr>
                    <td>New password</td>
                    <td><input type="password" name="new-password"></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                    <td><input type="password" name="confirm-password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>