<?php 
require 'models/Multiple.php' ;

use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
	public function testGetVerbose()
	{
		$multiple = new Multiple(7,"Seven");
 
		$this->assertEquals("Seven",$multiple->get_verbose());
	}


}



?>