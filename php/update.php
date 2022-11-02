<?php
    require_once '../configDataBase/TestDB.php';
    
    $testDB = new TestDB();
    $testDB -> update($_POST['id'], $_POST['Name'], $_POST['LastName'], $_POST['DateBirth']); 

    header('Location: ../index.php');
?>