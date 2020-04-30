<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <style>
        select{
            background-color: aliceblue;
            width:10%;
            height:5%;
        }
        input[type=submit] {
            width:9em;
            height: 2em;
        }
        input[type = submit]:hover{
            background-color: cyan;
        }

    </style>
</head>
<body>
<form method = 'post'>
    <select name = 'users[]' >
        <option value = 'Aya'>Aya</option>
        <option value = 'Aida'>Aida</option>
        <option value = 'Dauren'>Dauren</option>
        <option value = 'Marzhan'>Marzhan</option>
    </select>
    <input type = 'submit' name = 'submit' value = Submit>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(isset($_POST['users'])){
        foreach($_POST['users'] as $users)
            print 'Welcome'." ".$users." ".'be with us';
    }
}
