<?php

class controller{
	protected $db;
	protected $holder;

public function __construct(){
	global $config;

$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);


	/*	try{
$this->db = new PDO("mysql:dbname=test;host=127.0.0.1","root","");
}catch(PDOException $ex){
echo "Erro: ".$ex.getMessage();
}*/
}

	public function loadView($viewName,$viewData = array()){

		extract($viewData); //tranforme valor array em variaveis
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName,$viewData = array()){
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName,$viewData){
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function setHolder($h){
		$this->holder = $h;
	}

	public function getHolder(){
		return $this->holder;
	}
}