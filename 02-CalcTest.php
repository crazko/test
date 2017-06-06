<?php

require '02-Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
	public function testSum()
	{
		$calc = new Calc;
		$result = $calc->sum(1, 2);

		$this->assertEquals(3, $result);
	}
}