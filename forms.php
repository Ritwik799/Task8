<?php
if(isset($_POST["Submit"])){
    echo "Yes it works";
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


<form action="form.php" method="post">

<input type= "text" placeholder="Enter Username">
<input type="password" placeholder="Enter Password"><br>
<input type="Submit" name="Submit">


</form>
    
</body>
</html>