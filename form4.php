
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["submit"])){
    $name = array("Ritwik", "Shiv", "Ritul", "Goutam", "Shipra", "Arpita");

    $minimun = 5;
    $maximun = 10;

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(strlen($username)< $minimun){
        echo "Username has to be longer that five";

    }
    if(strlen($username)> $maximun){
        echo "Username cannot be longer than 10";
    }
    if(in_array($username, $name )){
        echo "Welcome to this Page";

    }else{
        echo "Sorry you are not Allowed";
    }
}
?>


<form action ="form4.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="text" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>
    
</body>
</html>