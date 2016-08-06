<?php

class homeController extends controller{
    //deve-se ter sempre uma função index
	public function index(){
		$usuario = new usuario();
		$usuario->setName("Paulo Luis");
		$usuario->setIdade(121);


 $dados = array(
 	'name' => $usuario->getName(),
 'age' => $usuario->getIdade());
		$this->loadview('home',$dados);
	}

}