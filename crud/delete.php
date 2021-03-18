<?php
    require_once "config.php";
    $id= $_GET['Id'];
    $query = 'DELETE FROM `tasks` WHERE `Id`= $id ';
    $pdo -> exec($query);
    header("location: index.php");

?>