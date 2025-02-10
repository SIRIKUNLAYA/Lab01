<?php
require_once("./pdoconnection.php");

if (isset($_POST["username"]) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = login($conN, $username, $password);
}

if (isset($_POST['logout'])) {
    logout();
}
$user = isLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>

<body>
    <?php if (!$user) { ?>
        <form action="" method="post" style="width:50%">
            <fieldset>
                <div style = margin: 5px ;></div>
                <div>
                    <label for="username">User name</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </fieldset>
        </form>
    <?php } else { ?>
        <?php echo "You are logined as $user[username]" ?>
        <form action="" method="post">
            <fieldset>
                <div>
                    <input type="submit" name="logout" value="Logout">/
                </div>
            </fieldset>
        </form>
    <?php } ?>

</body>

</html>