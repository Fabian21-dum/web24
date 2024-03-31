<?php
session_start();


$error = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['username'] == 'Kelompok7' && $_POST['password'] = '7'){
        $username = $_POST['username'];
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = $username;
        header('Location: ./member.php');
        exit();
    }else{
        $error = "Login gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if($error != ""){
        echo "<p>$error</p>";
    }
    ?>

    <form action="login.php" method="post">
        <label for="">
            First Name:
            <input type="text" name="username" id="">
        </label>
        <br/>
        <label for="">
            Last Name:
            <input type="text" name="password" id="">
        </label>
        <br/>
        <input type="submit" value="Login">
    </form>
</body>
</html>