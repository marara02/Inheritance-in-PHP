<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="text" name="mail" placeholder="Email"><br><br>
    <input type="number" name="age" placeholder="Age"><br><br>
    <input type="submit" value="Log in">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST["age"])>0 && ($_POST["age"]<=100)) {
        echo "Your age validate.Operation was done successfully";
    } else {
        echo "Age don't satisfy validate date";
    }
}
?>