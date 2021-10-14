<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree Validation</title>
</head>

<body>
    <?php
    $degreeErr = "";
    $degree = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["degree"])) {
            $degreeErr = "degree is required";
        } else {
            $degree = test_input($_POST["degree"]);
        }
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Degree:
        <input type="checkbox" name="degree" value="SSC">SSC
        <input type="checkbox" name="degree" value="HSC">HSC
        <input type="checkbox" name="degree" value="BSc">BSc
        <input type="checkbox" name="degree" value="MSc">MSc
        <span style="color:red">* <?php echo $degreeErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo "Your degree: $degree";
    ?>
</body>

</html>