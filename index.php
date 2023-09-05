<?php
include 'koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Koperasi</title>
</head>

<body>

    <div>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">password</label>
            <input type="text" name="password" id="password">
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>