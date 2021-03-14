<?php 
require 'models/Multiple.php' ;
require 'models/Printer.php' ;
 

use PHPUnit\Framework\TestCase;

  
class PrinterTest extends TestCase
{
	
	public function testInputEmptyArray()
	{
		$printer = new Printer([],30);
 
 		 
		$this->assertEquals(30,$printer->choose());
	}

	public function testInputOneMultipleArray()
	{
		$printer = new Printer([new Multiple(8,"Eight")],64);
 
 		 
		$this->assertEquals("Eight",$printer->choose());
	}

	public function testInputOneNotMultipleArray()
	{
		$printer = new Printer([new Multiple(8,"Eight")],61);
  
		$this->assertEquals(61,$printer->choose());
	}

	public function testInputTwoMultipleArray()
	{
		$printer = new Printer([new Multiple(7,"Seven"), 
							  new Multiple(8,"Eight")],56);
  
		$this->assertEquals("SevenAndEight",$printer->choose());
	}

	public function testInputTwoNotMultipleArray()
	{
		$printer = new Printer([new Multiple(7,"Seven"), 
							  new Multiple(8,"Eight")],57);
  
		$this->assertEquals(57,$printer->choose());
	}

	 

}


?>