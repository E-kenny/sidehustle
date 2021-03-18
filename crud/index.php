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
    <h1><a href="create.php">Create-task</a></h1>
    <section class="task-container">
                <section class="button-sn">SN</section>
                <section  class= "task">Tasks</section>
                <section  class= "button-username">Username</section>
                <section  class= "button-time">Time</section>
                <section  class= "button-up">Button</section>
                <section  class= "button-del">Button</section>
    </section>
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
                <section class="button-sn">'.$id. '</section>
                <section  class= "task">'.$task. '</section>
                <section  class= "button-username">'.$username. '</section>
                <section  class= "button-time">'.$time. '</section>
                <section  class= "button-up"><a href="update.php?id='.$id.'&username='.$username.'&time='.$time.'&task='.$task.'">Update </a></section>
                <section  class= "button-del"><a href="delete.php?id='.$id.'">Delete </a> </section>
           </section>
           ';
        }
        ?>
</body>
</html></html>
