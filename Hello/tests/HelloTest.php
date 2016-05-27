<?php
 
use Luuvanhoa\Hello\Hello;
 
class HelloTest extends PHPUnit_Framework_TestCase {
 
	public function testNachHasCheese()
	{
		$nacho = new Hello;
		$this->assertTrue($nacho->hasCheese());
	}
 
}