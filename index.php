<?php
    require_once 'configDataBase/TestDB.php';
    
    $testDB = new TestDB();
    $selectQuery = mysqli_query($testDB -> connect(), 'SELECT * FROM test');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
</head>
<body>
    <h1>Вот они слева направо:</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
            foreach(mysqli_fetch_all($selectQuery) as $item) {
                ?>
                    <tr>
                        <td><?= $item[0]?></td>
                        <td><?= $item[1]?></td>
                        <td><?= $item[2]?></td>
                        <td><?= $item[3]?></td>
                        <td><a href="updateForm.php?id=<?= $item[0]?>">Обновить</a></td>
                        <td><a href="php/delete.php?id=<?= $item[0]?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?> 
    </table>

    <h2>Добавить нового чела</h2>
    <form action="php/create.php" method="post">
        <p>Имя</p>
        <input type="text" name="Name">
        <p>Фамилия</p>
        <input type="text" name="LastName">
        <p>Дата рождения</p>
        <input type="date" name="DateBirth">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>