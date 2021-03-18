<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>crud app</title>
</head>
<body>
    <div>
    <h1>update Task</h1>
        <?php
        if(isset($_POST['submit'])){
            require_once "config.php";
            $username = $_POST['username'];
            $task = $_POST['task'];
            $time = $_POST['time'];
            $id = $_POST['id'];
            $query = "UPDATE `tasks` SET `username`=$username, `task`=$task, `time`=$time WHERE `Id`=$id ";
            $pdo -> exec($query);
            header("location: index.php");
        }else if(isset($_GET['id'])){ 
            $id = $_GET['id'];
            echo '<div><form action="update.php?id='.$id.'" method="post">
            <label for="">Username:</label><br><input type="text" name="username" id="" ><br>
            <br>
            <label for="">Time:</label><br><input type="text" name="time" placeholder="2:00pm" ><br>
            <br>
            <label for="">Task:</label><br><textarea id="" name="task" rows="3" cols="40">

            </textarea>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <h4><a href="index.php">Go to tasks</a></h4>';
        }else{
            header('location: index.php');
        '}
    </div>
</body>
</html>';
}
?>