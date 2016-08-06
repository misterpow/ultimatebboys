<?php

class usuario{
	private $name;
        private $idade;

public function setName($n){
	$this->name = $n;
}
public function getName(){
	return $this->name;
}

public function setIdade($i){
    $this->idade = $i;
}
public function getIdade(){
    return $this->idade;
}
}