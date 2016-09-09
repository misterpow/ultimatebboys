<?php

class Core {
	//private $currentController;
	//private $currentAction;

	public function run(){
//****METODO BASICO
		$url = explode('index.php',$_SERVER['PHP_SELF']);
		$url = end($url);
//****METODO AVANÇADO
		//$url = $_SERVER['REQUEST_URI'];

		$params = array();

		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url); //array_shift($r) Remove a primeira chave do array


			$currentController = $url[0].'Controller';
			array_shift($url);

			if (isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}
if (count($url)> 0) {
	$params = $url;
}

		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		//echo "CONTROLLER :".$this->currentController;
		//echo "<br><br>ACTION: ".$this->currentAction;
		//require_once 'core/controller.php';
		$c = new $currentController();
		call_user_func_array(array($c,$currentAction),$params);

	}

}