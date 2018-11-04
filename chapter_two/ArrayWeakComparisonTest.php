<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 13:09
 */

use PHPUnit\Framework\TestCase;

class ArrayWeakComparisonTest extends TestCase
{
	public function testEquality()
	{
		$this->assertEquals(
			[1, 2, 3, 4, 5, 6],
			['1', 2, 33, 4, 5, 6]
		);
	}
}
