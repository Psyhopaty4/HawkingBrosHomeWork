<?php
    interface ICRUD {

        public function create($name, $lastName, $dateBirth);

        public function update($id, $name, $lastName, $dateBirth);

        public function getData($id);

        public function delete($id);
    }
?>