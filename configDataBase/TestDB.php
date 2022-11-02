<?php
    require_once 'connectDB.php';
    require_once 'crud.php';

    Class TestDB extends ConnectDB implements ICRUD{

        private static $connection;

        public function connect() {
            $this -> setConnection(mysqli_connect('localhost', 'root', '', 'Lesson1'));
            if (!$this -> getConnection()) {
                die('Ошибка при подключении');
            }  else {
                return $this -> getConnection();
            } 
        }

        public function setConnection($query) {
            self :: $connection = $query;
        }

        public function getConnection() {
            return self :: $connection;
        }

        public function create($name, $lastName, $dateBirth) {
            mysqli_query($this -> connect(), "INSERT INTO `test` (`id`, `Name`, `LastName`, `DateBirth`) VALUES (NULL, '$name', '$lastName', '$dateBirth');");
        }

        public function update($id, $name, $lastName, $dateBirth) {
            mysqli_query($this -> connect(), "UPDATE `test` SET `Name` = '$name', `LastName` = '$lastName', `DateBirth` = '$dateBirth' WHERE `id` = '$id';");
        }

        public function getData($id) {
            return mysqli_query($this -> connect(), "SELECT * FROM `test` WHERE `id`='$id'");
        }

        public function delete($id) {
            mysqli_query($this -> connect(), "DELETE FROM `test` WHERE `id` = '$id';");
        }
    }  
?>
