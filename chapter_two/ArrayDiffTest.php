<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 12:59
 */

use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{
	public function testEquality()
	{
		$this->assertSame(
			[1, 2,  3, 4, 5, 6],
			[1, 2, 33, 4, 5, 6]
		);
	}
}
