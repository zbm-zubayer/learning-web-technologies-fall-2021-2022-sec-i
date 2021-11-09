<?php
session_start();
if (isset($_SESSION["flag"]) || isset($_COOKIE["flag"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Steam</title>
    </head>

    <body>
        <center>
            <h1>Steam</h1><br>
            <a href="profile.php">Profile</a>
            <a href="../controller/logout.php">Logout</a>
            <a href="store.php">Store</a>
            <a href="community.php">Community</a>
            <a href="about.php">About</a>
            <a href="support.php">Support</a>
            <br><br>
            <a href="customer-store.php">Your store</a>
            <br><br>
            <form action="">
                <input type="search" name="search" placeholder="Search"><br>
            </form>
        </center>
        <table border="1" align="center">
            <tr>
                <td>
                    <a href=""><img src="../img/tombraider.jpg" alt="Tombraider"></a>
                </td>
                <td>
                    <a href=""><img src="../img/deathloop.jpg" alt="Deathloop"></a>
                </td>
                <td>
                    <a href=""><img src="../img/conanexiles.jpg" alt="Conan Exiles"></a>
                </td>
            <tr>
                <td>
                    <h3>Weekend Deal</h3>
                </td>
                <td>
                    <h3>Weekend Deal</h3>
                </td>
                <td>
                    <h3>Weekend Deal</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Upto 89% off</h4>
                </td>
                <td>
                    <h4>Upto 70% off</h4>
                </td>
                <td>
                    <h4>Upto 60% off</h4>
                </td>
            </tr>
        </table>
    </body>

    </html>
<?php
} else {
    header("location: login.php");
}
?>