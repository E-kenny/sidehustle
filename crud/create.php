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
        <?php
        if(isset($_POST['submit'])){
            
            require_once "config.php";
            $query = $pdo->prepare("INSERT INTO `tasks` (`username`, `task`, `time`) VALUES (:username, :task, :time)");
            $query->bindParam(':username', $username);
            $query->bindParam(':task' , $task);
            $query->bindParam(':time', $time);
            $username = $_POST['username'];
            $task = $_POST['task'];
            $time = $_POST['time'];
            $query->execute();
            header("location: index.php");
        }else{
            echo '           
            <div>
            <h1>Create task</h1>
            <hr>
            <form action="" method="post">
            <label for="">Username:</label><br><input type="text" name="username" id="" required><br>
            <br>
            <label for="">Time:</label><br><input type="text" name="time" placeholder="2:00pm" required><br>
            <br>
            <label for="">Task:</label><br><textarea id="" name="task" rows="3" cols="40">

            </textarea>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <h4><a href="index.php">Go to tasks</a></h4>
        
    </div>
</body>
</html>';
}
?>
