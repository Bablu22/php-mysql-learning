<?php

abstract class Database
{
    public $connection;
    public $connectionActive = false;

    abstract function setConnection($bdName);
    abstract function getConnection();
}

class DBConnection extends Database
{
    function setConnection($bdName)
    {
        $this->connectionActive = true;
        $this->connection = "Connection is active";
    }
    function getConnection()
    {
        if ($this->connectionActive) {
            return $this->connection;
        }
    }
}

$db = new DBConnection();
$db->setConnection(("Test"));
echo $db->getConnection();