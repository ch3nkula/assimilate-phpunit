<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 04/11/2018
 * Time: 12:51
 */

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
	public function testExpectedFooActualFoo()
	{
		$this->expectOutputString( 'foo' );
		print 'foo';
	}

	public function testExpectedBarActualBaz()
	{
		// this should fail as expected :)
		$this->expectOutputString( 'bar' );
		print 'baz';
	}
}
