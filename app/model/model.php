<?php


require_once 'db.php';



    class model
    {
        
        public $connection;
        public $dataArray = [];


        public function __construct()
        {
            $this->connection = new Database;
        }


        public function selectAll()
        {
            $sql    = "SELECT * FROM users WHERE user_sts = 1";
            $result = $this->connection->conn->query($sql);

            if ($result->num_rows>0) {
                while ($row = $result->fetch_assoc()) {
                    $this->dataArray[] = $row;
                }
            }

            return $this->dataArray;
        }
    }
