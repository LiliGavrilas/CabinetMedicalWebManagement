<?php
    class Controller
    {
        
        public $conn = null;

        public function __construct()
        {
            try
            {
                $this->openSqlConnection();
            }
            catch (PDOException $e) 
            {
                exit('Sql connection error');
            }
        }
        
        private function openSqlConnection()
        {
            // sql connection with PDO connector http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $this->conn = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }


        
        public function model($model)
        {
            require_once __DIR__ . '/../models/' . $model . '.php';
            return new $model;
        }
        
        public function view($view, $data = [])
        {
            require_once __DIR__ . '/../views/' . $view . '.php';
        }

    }

?>