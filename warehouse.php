<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/common/class.guid.inc.php");
require_once("src/libraries/classes/common/class.database.inc.php");
require_once("src/libraries/classes/common/class.warehouse.inc.php");

use common\guid;
use common\warehouse;

if(count($argv)!=3)
{
	echo "\r\n", "Usage: php -f warehouse.php firstname John";
	echo "\r\n", "Usage: warehouse firstname John";
	echo "\r\n";
	die();
}
else
{
	$category = $argv[1];
	$value = $argv[2];

	$warehouse = new warehouse();
	$success = $warehouse->store($category, $value);

	$status = $success?"ok":"fail";
	echo "\r\n\t", $status, "\r\n";
}