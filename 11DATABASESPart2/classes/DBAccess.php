<?php
class DBAccess
{
    private $_DSN;
    private $_username;
    private $_password;
    private $_pdo;

    public function __construct($_DSN,$_username,$_password)
    {
        $this->_DSN = $_DSN;
        $this->_username = $_username;
        $this->_password = $_password;
    }

    public function connect()
    {
        try{
            $this->_pdo = new PDO($this->_DSN,$this->_username,$this->_password);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("Connection failed: ".$e->getMessage());
        }
    }

    public function disconnect()
    {
        $this->_pdo = "";
    }

    public function executeSQL($sql)
    {
        try
        {
            $rows = $this->_pdo->query($sql);
        }
        catch(PDOException $e)
        {
            die("query failed: ".$e->getMessage());
        }

        return $rows;
    }

    //execute sql query returning one colum
    public function executeSQLReturnOneValue($sql)
    {
        try
        {
            $row = $this->_pdo->query($sql);
            $value = $row->fetchColumn();
        }
        catch(PDOException $e)
        {
            die("query failed: ".$e->getMessage());
        }

        return $value;
    }

}
?>