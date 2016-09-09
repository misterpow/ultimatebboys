<?php

class Model {

	protected $db;
	public function __construct(){
global $config;

$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);


	/*	try{
$this->db = new PDO("mysql:dbname=test;host=127.0.0.1","root","");
}catch(PDOException $ex){
echo "Erro: ".$ex.getMessage();
}*/
}
}