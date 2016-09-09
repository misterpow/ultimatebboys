<?php
//CRIANDO CACHE ...cria variavel no sistema. para pegar depois 

class Cache{
	private $cache;

	public function setVar($nome,$valor){
		$this->readCache(); //primeiro ler o cache
		$this->cache->$nome = $valor; //tranforma no valor especificado
		$this->saveCache();

	}

	public function getVar($nome){
			$this->readCache(); //sempre ler o cache
			return $this->cache->$nome;
	}
//sempre usa esse metodo em cache´para cria um metodo ou funcão
	public function readCache(){
			$this->cache = new stdClass(); //esse stdClass cria um objeto vazio.
			if (file_exists('cache.cache')) {

				/*JOGA VALORES EM ARQUIVO PARA DENTRO DE CACHE COM O METODO 
				file_get_contents('')...
				cria um arquivo json para tranformar em objeto e arrumar texto la no arquivo
				usa-se_  json_decode*/
				$this->cache = json_decode(file_get_contents('cache.cache'));
			}
	}
	public function saveCache(){
		//cria file_put_contents q salva valores em um arquivo
		//usa-se json_encode para tranformar arquivo cache em texto
file_put_contents('cache.cache', json_encode($this->cache));
	}

}