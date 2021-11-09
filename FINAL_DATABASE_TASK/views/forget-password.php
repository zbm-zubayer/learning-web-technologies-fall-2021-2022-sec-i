<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>

<body>
    <form action="forget-password-new.php" method="POST">
        <fieldset>
            <legend>
                <h1>Forget Password</h1>
            </legend>
            <table>
                <tr>
                    <td>Username/Email</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Verification Code</td>
                    <td><input type="text" name="verification-code"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Next">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>