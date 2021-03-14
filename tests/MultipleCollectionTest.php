<?php 
 require 'models/MultipleCollection.php' ;

use PHPUnit\Framework\TestCase;

 
class MultipleCollectionTest extends TestCase
{
	public function testRemoveDuplication()
	{
		$multipleCollection = new MultipleCollection([
	[3,"Three"],
	[3,"Three"]
	]);

		$this->assertEquals(1,sizeof($multipleCollection->get_multiples()));
	}

}



?>