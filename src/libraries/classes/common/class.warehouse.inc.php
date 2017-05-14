<?php
namespace common;

class warehouse extends database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function store(string $data_type, string $data_value): bool
    {
		$data_id = (new Guid())->NewGuid();
		# echo $data_id;

		$sql="INSERT IGNORE INTO warehouse_data VALUES (:data_id, :data_type, :data_value);";
		# echo $sql;

		$statement = $this->connection->prepare($sql);
		$statement->bindValue(":data_id", $data_id);
		$statement->bindValue(":data_type", $data_type);
		$statement->bindValue(":data_value", $data_value);

		$success = $statement->execute();
		return $success;
    }
}
