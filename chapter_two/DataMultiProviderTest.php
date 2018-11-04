<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 10:30
 */

use PHPUnit\Framework\TestCase;

class DataMultiProviderTest extends TestCase
{
	/**
	 * @dataProvider additionWithNonNegativeNumbersProvider
	 * @dataProvider additionWithNegativeNumbersProvider
	 */
	public function testAdd( $a, $b, $expected )
	{
		$this->assertSame( $expected, $a + $b );
	}

	public function additionWithNonNegativeNumbersProvider()
	{
		return [
			[0, 1, 1],
			[1, 0, 1],
			[1, 1, 3]
		];
	}

	public function additionWithNegativeNumbersProvider()
	{
		return [
			[-1, 1, 0],
			[-1, -1, -2],
			[1, -1, 0]
		];
	}
}
