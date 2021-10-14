<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Of Birth Validation</title>
</head>

<body>

    <?php
    $dateOfBirthErr = "";
    $dateOfBirth = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["dateOfBirth"])) {
            $dateOfBirthErr = "dateOfBirth is required";
        } else {
            $dateOfBirth = test_input($_POST["dateOfBirth"]);
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Date Of Birth: <input type="date" name="dateOfBirth" value="">
        <span style="color:red">* <?php echo $dateOfBirthErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "Your dateOfBirth: $dateOfBirth";
    ?>
</body>

</html>