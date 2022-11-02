<?php
    require_once 'configDataBase/TestDB.php';
    
    $testDB = new TestDB();
    $arrayData = mysqli_fetch_assoc($testDB -> getData($_GET['id'])); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление</title>
</head>
<body>
    <h2>Обновить данные</h2>
    <form action="php/update.php" method="post">
        <input type="hidden" name="id" value="<?= $arrayData['id'] ?>">
        <p>Имя</p>
        <input type="text" name="Name" value="<?= $arrayData['Name'] ?>">
        <p>Фамилия</p>
        <input type="text" name="LastName" value="<?= $arrayData['LastName'] ?>">
        <p>Дата рождения</p>
        <input type="date" name="DateBirth" value="<?= $arrayData['DateBirth'] ?>">
        <button type="submit">Обновить</button>
    </form>
</body>
</html>