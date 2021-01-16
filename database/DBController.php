<?php

class DBController {

    // database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'mobile_shop';

    // connection property
    public $con = null;

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Error" . $this->con->connect_error;
        }
    }

    // closing connection when the object is not in use 
    // destructor is automatically called when the object is not in use
    public function __destruct() {
        $this->closeConnection();
    }

    // closing mysqli connection
    protected function closeConnection() {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
