<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'defaultPDO' => array(
		'type'       => 'PDO',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host=localhost;dbname=cygnus',
			'username'   => 'root',
			'password'   => 'root',
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),


	// ------------

	'default' => array(
		'type'       => 'MySQL',
		'connection' => array(
		'host'       => 'localhost',
		'username'   => 'root',
		'password'   => 'root',
		'database'   => 'cygnus',
		'persistent' => FALSE,
	),
	'table_prefix' => '',
	'charset'      => 'utf8',
	'caching'      => FALSE,
	),
);
