<?php
$ip = getenv("REMOTE_ADDR") ;
// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=c9',
	'emulatePrepare' => true,
	'username' => 'rahmanmca',
	'password' => '',
	'charset' => 'utf8',
	'tablePrefix' => 'tbl_',
	
);