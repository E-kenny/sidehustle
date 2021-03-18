<?php
    require_once "config.php";
    
    $query = $pdo->prepare('DELETE FROM `tasks` WHERE `Id`= :id ');
    $query->bindParam(':id', $id);
    $id= $_GET['id'];
    $query -> execute();
    header("location: index.php");

?>