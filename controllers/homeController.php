<?php

class homeController extends controller{
    public function __construct(){
         parent::__construct();
    }
    //deve-se ter sempre uma função index
   
	public function index(){
         $dados = array();
 
 
 
	$this->loadview('home',$dados);
	}

}