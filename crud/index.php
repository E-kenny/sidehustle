<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tasks</title>
</head>
<body>
    <?php
        require_once "config.php";
        $sql = 'SELECT * FROM `tasks`';
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
            $id = $row['Id'];
            $username = $row['username'];
            $task = $row['task'];
            $time = $row['time'];
           echo '<section class="task-container">
                <div class="button">'.$id. '</div>
                <div  class= "task">'.$task. '</div>
                <div  class= "button">'.$username. '</div>
                <div  class= "button">'.$time. '</div>
                <div  class= "button"><a href="update.php?id='.$id.'&username='.$username.'&time='.$time.'">Update </a></div>
                <div  class= "button"><a href="delete.php?id='.$id.'">Delete </a> </div>
           </section>
           ';
        }
        ?>
       <h4><a href="create.php">Create-task</a></h4>
</body>
</html></html>
