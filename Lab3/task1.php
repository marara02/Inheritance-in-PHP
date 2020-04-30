<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check it</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="name" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Log in">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST["name"] == "Sunny") && $_POST["password"] == "12345") {
        echo "Welcome!";
    } else {
       echo 'Try again!';
}
    }
?>
</body>
</html>