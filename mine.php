<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/common/class.database.inc.php");
require_once("src/libraries/classes/common/class.mine.inc.php");

use common\mine;

switch(count($argv))
{
    case 2:
        // mine 1 record
        $category = $argv[1];

        $mine = new mine();
        $data = $mine->get($category, 1);

        echo "\r\n\t", print_r($data, true), "\r\n";
        break;
    case 3:
        // mine n records
        $category = $argv[1];
        $limit = (int)$argv[2];

        $mine = new mine();
        $data = $mine->get($category, $limit);
        #print_r($data);

        echo "\r\n\t", print_r($data, true), "\r\n";
        break;
    default:
        echo "\r\n", "Usage: mine CATEGORY LIMITS";
        echo "\r\n";
        break;
}
