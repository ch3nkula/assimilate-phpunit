<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 14/11/2018
 * Time: 15:54
 */

use PHPUnit\Framework\TestCase;

class ArrayHasKeyTest extends TestCase
{
	public function testFailure()
	{
		$this->assertArrayHasKey( 'foo', ['bar' => 'baz'] );
	}
}
