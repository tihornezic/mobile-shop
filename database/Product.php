<?php

/* Dependency injection is a technique in which an object receives other objects that it depends on. */

// use to fetch product data
class Product {
    public $db = null;

    // dependency injection
    public function __construct(DBController $db) {
        // if connection is not set
        if (!isset($db->con)) return null;
        // if we have a successful open connection
        $this->db = $db;
    }

    // fetch product data
    public function getData($table = 'products') {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();
        // fetch it as associative array
        // and returns one row (one by one)
        while ($item = mysqli_fetch_array($result, $resulttype = MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}
