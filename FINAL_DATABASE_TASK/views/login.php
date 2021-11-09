<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <form action="../controller/login-check.php" method="POST">
        <fieldset>
            <legend>
                <h1>Login</h1>
            </legend>
            <label for="username">Username</label><br>
            <input type="text" name="username" value=""><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" value=""><br><br>
            <input type="checkbox" name="remember-me" value="true">Remember me <br> <br>
            <input type="submit" name="submit" value="Sign In"><br><br>
            <a href="forget-password.php">Forgot your password?</a>
        </fieldset>
    </form>
</body>

</html>