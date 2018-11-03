<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 17:56
 */

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd( $a, $b, $expected )
	{
		$this->assertSame( $expected, $a + $b );
	}

	public function additionProvider()
	{
		return [
			'adding zeros' => [0, 0, 0],
			'zero plus one' => [0, 1, 1],
			'one plus zero' => [1, 0, 1],
			'one plus one' => [1, 1, 3]
		];
	}
}
