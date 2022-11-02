<?php
    require_once '../configDataBase/TestDB.php';
    
    $testDB = new TestDB();
    $testDB -> delete($_GET['id']); 

    header('Location: ../index.php');
?>