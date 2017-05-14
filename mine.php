<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/common/class.database.inc.php");
require_once("src/libraries/classes/common/class.mine.inc.php");

use common\mine;

if(count($argv)!=2)
{
	echo "\r\n", "Usage: mine CATEGORY";
	echo "\r\n";
	die();
}
else
{
	$category = $argv[1];

	$mine = new mine();
	$data = $mine->get($category);

	echo "\r\n\t", $data, "\r\n";
}