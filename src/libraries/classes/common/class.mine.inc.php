<?php
namespace common;

class mine extends database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get(string $data_type): string
    {
		$sql="SELECT data_value FROM warehouse_data WHERE data_type=:data_type ORDER BY RAND() LIMIT 1;";
		# echo $sql;

		$statement = $this->connection->prepare($sql);
		$statement->bindValue(":data_type", $data_type);

		$success = $statement->execute();
		$data = $statement->fetch(\PDO::FETCH_ASSOC);
		
		return $data["data_value"]??"";
    }
}
