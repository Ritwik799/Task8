<?php
if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Ritwik" . $username;
    echo "Your password is: " .$password;

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action ="form3.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="text" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>
    
</body>
</html>