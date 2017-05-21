<?php
namespace common;

class mine extends database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get(string $data_type, int $limit = 1): array
    {
        $limit = abs($limit);
        $limit = ($limit >= 1 && $limit <=9999)?$limit:1;
		$sql="SELECT data_value data FROM warehouse_data WHERE data_type=:data_type ORDER BY RAND() LIMIT {$limit};";
		# echo $sql;

		$statement = $this->connection->prepare($sql);
		$statement->bindValue(":data_type", $data_type);

		$success = $statement->execute();
		$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
        #print_r($data);
		
		return $data;
    }
}
