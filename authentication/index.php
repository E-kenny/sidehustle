<?php
 session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
   
    if($_SESSION['username'] === $_POST['username'] && $_SESSION['password'] === $_POST['password']){
      
       $username =  $_SESSION['username'] ;
       $password =  $_SESSION['password'] = $_POST['password'];
?>
       
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <style>
                div {
                    margin : auto;
                    width: 50%;
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
                <p>
                    <?php echo "<h1>Hello, $username!!</h1> <h3>your password is $password</h3> <p> you are highly welcome to E_kenny's sidehustle week2 task.";?>
                    <h5>want to change password or username? </h5>
                    <h4><a href="signUp.php">go to Sign up</a></h4>
                </p>
            </div>
            </body>
            </html>
<?php
        }else{
            
            header("location: login.php");

        }
 

} else {

    header("location: signUp.php");

}
?>
