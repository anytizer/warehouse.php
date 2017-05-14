<?php
namespace common;

class database
{
	protected $connection;
	
	public function __construct()
	{
		$hostname = "localhost";
		$database = "awesome_warehouse";
		$username = "root";
		$password = "";

		$options = array(
			\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8;",
		);

		$this->connection = new \PDO("mysql:host={$hostname};port=3306;dbname={$database}", $username, $password, $options);
		$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	}
}