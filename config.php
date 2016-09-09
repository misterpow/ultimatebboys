<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'misterpow';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'misterpow';
	$config['dbpass'] = '123454';
}else{

	$config['dbname'] = 'misterpow';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'misterpow';
	$config['dbpass'] = '123454';
}