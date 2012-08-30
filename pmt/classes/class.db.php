<?php

/**
 * PDO Class
 *
 * PDO Class is Used To Work With MySQL (or any another db) Via PDO PHP Extension
 * 
 * @author Khalid Magdy <Khalid.k@aol.com>
 * 
 */

class DB {

	private $connection;

/**
 * Construct Function That Connects To DB
 * @param string $host Host name
 * @param string $user db username
 * @param string $pass db password
 * @param string $db   dbname
 */
	public function __construct($host,$user,$pass,$db){

		try{

		$this->connection = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

		$this->connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}


	public function db_get_all($table,$extras = NULL){

		$query = $this->connection->query("SELECT * FROM $table ".$extras);

		$query->setFetchMode(PDO::FETCH_OBJ);

		$data = array();

		while($row = $query->fetch()){

			$data[] = $row;

		}

		return $data;

	}


	public function db_where($table,$key,$value){

		try{

		$query  = $this->connection->prepare("SELECT * FROM $table WHERE $key = :value");

		$query->setFetchMode(PDO::FETCH_OBJ);
		
		$bindings = array( 
			"value"=>$value
		);
		
		$query->execute($bindings);

		$data  = $query->fetch();

		return $data;

	}catch(PDOException $e){
	
		echo $e->getMessage();
	
	}

	}


	public function db_query($query,$bindings){        
    
    $statment = $this->connection->prepare($query);    
    	
    	foreach($bindings as $k=>$v){
        
        	$statment->bindValue($k, $v);
    	
    	}
    
    return $statment->execute();

}


}


?>