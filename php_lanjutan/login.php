<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['u'])) {
            $nameErr = 'Masukkan Username';
        } else {
            $name = bersihkan_input($_POST['u']);
        }
        if (empty($_POST['p'])) {
            $emailErr = 'Masukkan Password';
        } else {
            $email = bersihkan_input($_POST['p']);
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Username: <input type="text" name="u">
        <span style="font-size: 10px; color: red;" class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span style="font-size: 10px; color: red;" class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>