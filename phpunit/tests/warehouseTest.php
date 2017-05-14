<?php
namespace tests;

use common\warehouse;
use PHPUnit\Framework\TestCase;

class warehouseTest extends TestCase
{
    public function setup()
    {
    }

    public function testWarehouseFirstName()
    {
		$warehouse = new warehouse();
		
		$remote = $warehouse->store("firstname", "John");
		$expect = true;
        
		$this->assertEquals($expect, $remote);
    }
	
	public function testWarehouseLastName()
    {
		$warehouse = new warehouse();
		
		$remote = $warehouse->store("lastname", "Doe");
		$expect = true;
        
		$this->assertEquals($expect, $remote);
    }
	
	public function testDuplicateRecord()
    {
		$warehouse = new warehouse();
		
		$remote = $warehouse->store("lastname", "Doe");
		$expect = true;
        
		$this->assertEquals($expect, $remote);
    }
	
	public function testSqlInjectionSafe()
    {
		$warehouse = new warehouse();
		
		$remote = $warehouse->store("lastname", "D'oe");
		$expect = true;
        
		$this->assertEquals($expect, $remote);
    }
}
