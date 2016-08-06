<?php
//CRIAÇÃO MVC DO ZERO

spl_autoload_register(function($class){
/*Cria um autoload para carregar diretorios diferentes*/

	//strpos = onde esta posicao de string
	if (strpos($class, 'Controller') > -1) {
		if (file_exists('controllers/'.$class.'.php')) {
			require_once 'controllers/'.$class.'.php';
		}
	}else if (file_exists('models/'.$class.'.php')) {
		require_once 'models/'.$class.'.php';
	}else{
		require_once 'core/'.$class.'.php';
	}
});
//Termina carregamento de classes
$core = new Core();
$core->run();