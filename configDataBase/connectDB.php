<?php
    abstract Class ConnectDB {

        abstract public function connect(); 

        abstract public function setConnection($query);

        abstract public function getConnection();
    }
?>