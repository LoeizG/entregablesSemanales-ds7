<?php 

require_once 'config/config.php';

class Db {

	private $host;
	private $db;
	private $user;
	private $pass;
	public $conection;

	public function __construct() {		

		$this->host = constant('DB_HOST');
		$this->db = constant('DB');
		$this->user = constant('DB_USER');
		$this->pass = constant('DB_PASS');

		try {
         $this->conection = new PDO('mysql:host='.$this->host.'; dbname='.$this->db.';charset=utf8', $this->user, $this->pass);
		   //$pdo = new PDO('mysql:host=localhost;dbname=practica;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }

	}

}

?>