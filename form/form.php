<?php
if(isset($_POST['submitted_form'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $favourite_food = $_POST['favourite_food'];
 $date = $_POST['date'];

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<style>
    div {
        margin : auto;
        width: 50%;
    }
</style>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
<div><h1>Welcome, $firstname $lastname </h1>
<p>Thank God for making you a <strong>$gender</strong>,  you are born <b>$date</b>, you have the email <b>$email</b> and you like eating " ;
if(!empty($favourite_food)){ 
    foreach($favourite_food as $selected){
        echo "<b>".$selected."</b>" ;
    }
    echo  "</P></div><br>
</body>
</html>";


    }
}else{
echo   '<!DOCTYPE html>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        margin : auto;
        width: 30%;
    }
    input[type=\'text\'], input[type=\'date\'], input[type=\'email\']{
        width:98%;
    }
    
    </style>
</head>
<body>
<div>
    <form action="" method="post">
        <label for="firstname">Firstname : </label><br><input type="text" name="firstname" id="" required><br>
        <br>
        <label for="lastname">Lastname : </label><br><input type="text" name="lastname" id="" required><br>
        <br>
        <label for="email">Email : </label><br><input type="email" name="email" id="" required><br>
        <br>
        <label for="">Gender</label><br>
        <input type="radio" name="gender" id="" value="man"><label for="gender">Male</label><br>
        <input type="radio" name="gender" id="" value="woman"><label for="gender">Female</label><br>
        <br>
        <label for="">Favourite Food</label><br>
        <input type="checkbox" name="favourite_food[]" id="" value="Rice"><label for="favourite_food">Rice</label><br>
        <input type="checkbox" name="favourite_food[]" id="" value="Beans"><label for="favourit_food">Beans</label><br>
        <input type="checkbox" name="favourit_food[]" id="" value="Swallow"><label for="favourit_food">Swallow</label><br>
        <br>
        <input type="date" name="date" id=""><br>
        <input type="hidden" name="submitted_form" value="1">
        <br>
        <input type="submit" name="" id="" value="Submit">
    </form>
</div>
</body>
</html>';
}
?>


