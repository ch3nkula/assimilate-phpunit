<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 13:02
 */

use PHPUnit\Framework\TestCase;

class LongArrayDiffTest extends TestCase
{
	public function testEquality()
	{
		$this->assertSame(
			[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,  3, 4, 5, 6],
			[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 33, 4, 5, 6]
		);
	}
}
