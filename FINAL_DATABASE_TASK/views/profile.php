<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <form action="../controller/update-profile.php" method="POST">
        <fieldset>
            <legend>
                <h1>Account Details</h1>
            </legend>
            <img src="../img/default-avatar.jpg" alt="Loading error">
            <label for="avatar">
                <h2>Avatar</h2>
            </label>
            <input type="file" name="myfile"><br>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $_SESSION["email"]; ?>"><br></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $_SESSION["username"]; ?>"></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><input type="text" name="dateofbirth" value="<?php echo $_SESSION["dateofbirth"]; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender" value="<?php echo $_SESSION["gender"]; ?>"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" value="<?php echo $_SESSION["country"]; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="edit" value="Edit"><br><br>
                        <a href="change-password.php">Change password</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>