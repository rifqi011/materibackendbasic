<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 10 - Backend</title>
    <link rel="stylesheet" href="../../mainstyle.css">
</head>

<body>
    <h1>Global Variable</h1>

    <h1>$_SERVER</h1>
    <ul>
        <li>Variable yang menyimpan informasi header, path, dan url dari website</li>
        <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        ?>
    </ul>

    <h1>$_REQUEST</h1>
    <ul>
        <li>Informasi data yang dikirim melalui formulir</li>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </ul>

</body>

</html>