<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Validation</title>
</head>

<body>
    <?php
    $genderErr = "";
    $gender = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["gender"])) {
            $genderErr = "gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <span style="color:red">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" gender="submit" value="Submit">
    </form>
    <?php
    echo "Your gender: $gender";
    ?>
</body>

</html>