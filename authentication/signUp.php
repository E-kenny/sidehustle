<?php 
if(isset($_POST['submit'])){
    session_start();
$_SESSION['username'] = htmlspecialchars($_POST['username']) ;
$_SESSION['password'] = htmlspecialchars($_POST['password']) ;

header("location: login.php");

} else {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    div {
        margin : auto;
        width: 50%;
        border-radius: 20px;
        height: 70vh;
    }
    input[type='text'], input[type='password'], input[type='email']{
        width:90%;
        border: 2px solid grey;
        border-radius: 30px;
        margin: auto;
    }
    a{
        text-decoration: none;
     }
    
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Sign Up</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="">Username:</label><br><input type="text" name="username" id="" required><br>
        <br>
        <label for="">Password:</label><br><input type="password" name="password" id="" required><br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <h5>Already Signed up? </h5>
    <h4><a href="login.php">go to login</a></h4>
    </div>
</body>
</html>
<?php
}
