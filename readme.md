# warehouse.php

 * Store something in the repository database.
 * Helpful in building sample data.
 * Auto categorizes data.


## Examples


### PHP

    $warehouse = new warehouse();
	$warehouse->store("firstname", "John");
	$warehouse->store("lastname", "Doe");


### CLI
(Refer to ./bin/)

    php -f warehouse.php firstname John
    php -f warehouse.php lastname Doe
    
	warehouse firstname John
    warehouse lastname Doe


### CLI Mining

Pulls a random record from selected data tye (category).

    mine CATEGORY


### Aliasing
(Refer to ./bin/)

    lastname LASTNAME
	firstname FIRSTNAME


## SQL Table Structure

    CREATE TABLE `warehouse_data` (
      `data_id` varchar(255) NOT NULL COMMENT 'Warehouse ID',
      `data_type` varchar(255) NOT NULL COMMENT 'Warehouse Data Type/Category',
      `data_value` varchar(255) NOT NULL COMMENT 'Warehouse Data Value',
      PRIMARY KEY (`data_id`),
      UNIQUE KEY `data_type` (`data_type`, `data_value`) COMMENT 'Unique Data'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


## Installation

    composer require anytizer/warehouse.php=dev-master
