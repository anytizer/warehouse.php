<?php
namespace tests;

use common\warehouse;
use PHPUnit\Framework\TestCase;

class warehouseTest extends TestCase
{
    public function setup()
    {
    }

    public function testWarehouse()
    {
		$warehouse = new warehouse();
		
		$remote = $warehouse->store("firstname", "John");
		$expect = "ok";
        
		$this->assertEquals($expect, $remote);
    }
}
