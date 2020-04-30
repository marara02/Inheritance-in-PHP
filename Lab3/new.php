<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            margin: 0 auto;
            width: 250px;
        }
        p{
            text-align: center;
            font-size: 40px;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    Name: <input type="text" name="name"><br>
    Surname: <input type ="text" name ="surname"><br>
    E-mail: <input type="text" name="email"><br>
    Number: <input type = "number" name ="number"><br>
    Traffic: <input type = "number" name = "traffic"><br>
    <input type="submit" name = "submit">
</form></body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 'Welcome' . ' ' . $_POST["name"];
    echo '<br>';
    echo $_POST["surname"];
    echo '<br>';
    echo 'Your email address is:' . $_POST["email"];
    echo '<br>';
    echo $_POST["number"];
    echo 'Traffic:';
    echo $_POST["traffic"];
}