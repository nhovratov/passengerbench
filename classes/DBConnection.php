<?php

/**
 * The DBConnector manages the connection to the Database, it is developed with the singletonpattern to make sure that
 * only one instance is running on this server.
 * The Connector makes also sure that no Querys can be injected that will harm the server.
 **/
class DBConnection
{
    /**
     * The following data represents the Database login, please make sure that you don't use ROOT ACCESS!!!
     */
    private $url;
    private $user;
    private $pw;
    private $db;

    /**
     * The conn variable holds the activ connection to the Database.
     */
    private $conn = null;
    private static $me = null;

    /**
     * The Constructor creates the activ connection to the Database and tests the connection,
     * if it fails it will output a error message.
     **/
    protected function __construct()
    {
        $dbConfig = getConfig();
        $this->url = $dbConfig["host"];
        $this->user = $dbConfig["user"];
        $this->pw = $dbConfig["password"];
        $this->db = $dbConfig["db"];

        $this->conn = mysqli_connect($this->url, $this->user, $this->pw, $this->db);
        $this->conn->set_charset('utf8');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /**
     * This function returns the instance of the DBConnector, if there is no activ instance it will create a new one.
     * @return DBConnection object which represents the connection to a MySQL Server.
     **/
    public static function getInstance()
    {
        if (self::$me === null) {
            self::$me = new DBConnection();
        }
        return self::$me;
    }

    /**
     * This function will be called by the Garbagecollector and will close the connection.
     */
    public function __destruct()
    {
        $this->conn->close();
    }

    /**
     * This function will execute a SQL-Query and return the result.
     * @param string $query
     * @return string
     * @internal param string $query The Query that needs to be executed at the database.
     */
    public function executeQuery($query)
    {
        return $this->conn->query($this->conn->real_escape_string($query));
    }
	
	/**
     * This function will execute a prepared SQL-Query and return the result.
     * @param string 
     * @param array 
     * @return Result
     */
	public function executeQueryPrepared(string $query, array $parameters)
	{
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($this->conn, $query)) {
			/* prepare type-string AND array with references */
			$queryParameters = array();
			$typeString = '';
			for($i = 0; $i < count($parameters); $i++)
			{
				$queryParameters[$i] = &$parameters[$i];
				$var = $parameters[$i];
				if(is_int($var))
				{
					$typeString .= 'i';
				} 
				else if(is_double($var))
				{
					$typeString .= 'd';
				} 
				else 
				{
					$typeString .= 's';
				}
			}
			
			/* bind parameters if parameters given */
			if(($parameters != null) && (!empty($parameters)))
			{
				call_user_func_array(array($stmt, "bind_param"), array_merge(array($typeString), $parameters));
			}

			/* execute query */
			$status = $stmt->execute();
			
			/* fetch value */
			$result = $stmt->get_result();
			
			/* Check if Query returned data */
			if(is_bool($result)){
				return $status;
			}
			
			$result = $result->fetch_all(MYSQLI_ASSOC);
			return $result;
		}
	}

    //This function is to prevent to create another instance of the DBConnector, if someone trys to clone the instance it will fail.
    protected function __clone()
    {
    }
}
