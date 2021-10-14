<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group Validation</title>
</head>

<body>

    <?php
    $bloodGroupErr = "";
    $bloodGroup = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["bloodGroup"])) {
            $bloodGroupErr = "bloodGroup is required";
        } else {
            $bloodGroup = test_input($_POST["bloodGroup"]);
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Blood Group:
        <select name="bloodGroup" id="">
            <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O">O-</option>
        </select>
        <span style="color:red">* <?php echo $bloodGroupErr; ?></span>
        <br><br>
        <input type="submit" bloodGroup="submit" value="Submit">
    </form>
    <?php
    echo "Your bloodGroup: $bloodGroup";
    ?>
</body>

</html>