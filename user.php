<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql = "INSERT INTO `crud` (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
    $result= mysqli_query($con,$sql);

    if($result){
        header('location: display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="mobile">Tel</label>
            <input type="text" name="mobile" id="mobile">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>