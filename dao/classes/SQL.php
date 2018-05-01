<?php

    class SQL extends PDO {

        private $conn;

        public function __construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=phpudemy;charset=utf8", "root", "");
        }

        public function query($query, $params = array()){
            $stmt = $this->conn->prepare($query);
            $this->setParameters($stmt, $params);
            $stmt->execute();

            return $stmt;
        }

        private function setParameters($stmt, $params){
            foreach ($params as $key => $value) {
                $this->setParameter($stmt, $key, $value);
            }
        }

        private function setParameter($stmt, $key, $value){
            $stmt->bindParam($key, $value);
        }

        public function select($query, $params = array()):array{
            $stmt = $this->query($query, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

    }

?>