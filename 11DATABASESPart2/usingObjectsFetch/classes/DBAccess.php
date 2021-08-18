<?php
class DBAccess
{
	private $_DSN;
	private $_userName;
	private $_password;
	private $_pdo;

	//set up database connection details
	public function __construct($DSN, $userName, $password)
	{
		$this->_DSN = $DSN;
		$this->_userName = $userName;
		$this->_password = $password;
	}

	//connect to the database
	public function connect()
	{
		try
		{
			$this->_pdo = new PDO($this->_DSN, $this->_userName, $this->_password);
			$this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} 
		catch(PDOException $e) 
		{
			die("Connection failed: " . $e->getMessage());
		}
	}

	//disconnect from database
	public function disconnect()
	{
		$this->_pdo = "";
	}

	//execute SQL query returning back rows 
	public function executeSQL($sql)
	{
		try
		{
			$rows = $this->_pdo->query($sql);
		}
		catch(PDOException $e)
		{
			die("Query failed: " . $e->getMessage());
		}
		return $rows;
	}

	//return a single value
	public function executeSQLReturnOneValue($sql)
	{
		try
		{
			//execute the query
			$row = $this->_pdo->query($sql);
			
			//get the column value
			$value = $row->fetchColumn();
		}
		catch(PDOException $e)
		{
			die("Query failed: " . $e->getMessage());
		}
		return $value;
	}
}
?>
