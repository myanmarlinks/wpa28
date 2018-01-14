<?php 

class DB extends PDO {
	private static $_instance;
	private $table_name;

	private $engine; 
    private $host; 
    private $database; 
    private $user; 
    private $pass; 
    public function __construct(){ 
    	echo "DB Construct! <br>";
        $this->engine = 'mysql'; 
        $this->host = 'localhost'; 
        $this->database = 'wpa28db'; 
        $this->user = 'root'; 
        $this->pass = ''; 
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host; 
        parent::__construct( $dns, $this->user, $this->pass ); 
    } 
    public function __destruct() {
    	echo "DB Destruct! <br>";
    }
    public static function table($table_name) {
    	if(!self::$_instance instanceof DB) {
    		self::$_instance = new DB();
    	}
    	self::$_instance->table_name = $table_name;
    	return self::$_instance;
    }

    public function where($id, $value) {
    	$valuetype = gettype($value);
    	$sql = "SELECT * FROM " . $this->table_name . " WHERE " . $id . " = ";
    	if($valuetype == "string") {
    		$sql .= "'" . $value . "'";
    	} else {
    		$sql .= $value;
    	}
    	return $this;
    }
    public function get() {
    	$sql = "SELECT * FROM " . $this->table_name;
    	$prep = $this->prepare($sql);
    	$prep->execute();	
    	$results = $prep->fetchAll(PDO::FETCH_OBJ);
    	return $results;
    }
}

?>