<?php

class Core {
	//private $currentController;
	//private $currentAction;

	public function run(){
		$url = substr($_SERVER['PHP_SELF'],10);
//echo $url;
		if (!empty($url)) {
			$url = explode('/',$url);
			array_shift($url); //array_shift($r) Remove a primeira chave do array

			$currentController = $url[0].'Controller';
			if (isset($url[1])) {
				$currentAction = $url[1];
			}else{
				$currentAction = 'index';
			}


		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		//echo "CONTROLLER :".$this->currentController;
		//echo "<br><br>ACTION: ".$this->currentAction;
		require_once 'core/controller.php';
		$c = new $currentController();
		$c->$currentAction();


	}

}