<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users' home page</title>
    </head>
    <body>
        <h1>Welcome </h1>
        <a href="">Profile</a><br>
        <a href="">Change Password</a><br>
        <a href="">Logout</a><br>
    </body>
    </html>
<?php
} else {
    header('location: login.html');
}
?>