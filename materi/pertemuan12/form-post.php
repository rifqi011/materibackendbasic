<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>

<body>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukan Email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukan Password">
        <button name="submit" type="submit">Login</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "Email anda: " . $_POST['email'];
        echo "</br>";
        echo "Password anda: " . $_POST['password'];
    }
    ?>
</body>

</html>