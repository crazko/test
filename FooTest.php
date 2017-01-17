<?php

require 'Foo.php';

class FooTest extends PHPUnit_Framework_TestCase
{
	public function testGetResult()
	{
		$foo = new Foo;
		$result = $foo->getResult();

		$this->assertTrue($result);
	}
}