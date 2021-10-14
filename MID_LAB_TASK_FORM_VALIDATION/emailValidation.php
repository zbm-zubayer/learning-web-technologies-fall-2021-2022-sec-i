<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>

<body>

    <?php
    $emailErr = "";
    $email = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Email: <input type="email" name="email" value="">
        <span style="color:red">* <?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" email="submit" value="Submit">
    </form>
    <?php
    echo "Your email: $email";
    ?>
</body>

</html>