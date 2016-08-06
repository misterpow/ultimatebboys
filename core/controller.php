<?php

class controller{
	public function loadview($viewName,$viewData = array()){

		extract($viewData); //tranforme valor array em variaveis
		include 'views/'.$viewName.'.php';
	}
}