<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

// 'hostname' => 'tcp:dragonstest.database.windows.net,1433',
// 'username' => 'dragonstest@dragonstest',
// 'password' => 'Thisismypassword1!',
// 'database' => 'dragonsTest',
// 'dbdriver' => 'sqlsrv',



$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'tcp:dragons-test.database.windows.net,1433',
	'username' => 'david',
	'password' => 'Password!!',
	'database' => 'dragonsTEST',
	'dbdriver' => 'sqlsrv',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
