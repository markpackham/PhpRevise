<?php

class DB
{
    private $_mysqli,
        $_query,
        $_results = array(),
        $_count = 0;

    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    //Connect to our database (only runs once)
    public function __construct()
    {
        $this->_mysqli = new mysqli('localhost', 'root', '', 'singleton');

        //Connection error check, and kill script
        if ($this->_mysqli->connect_error) {
            die($this->_mysqli->connect_error);
        }

    }

    public function query($sql)
    {
        if ($this->_query = $this->_mysqli->query($sql)) {
            while ($row = $this->_query->fetch_object()) {
                $this->_results[] = $row;
            }
            $this->_count = $this->_query->num_rows;
        }
        //Return the new database instance
        return $this;
    }

    public function results()
    {
        return $this->_results;
    }

    public function count()
    {
        return $this->_count;
    }
}
