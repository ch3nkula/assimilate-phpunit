<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 16:42
 */

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
	public function testPushAndPop()
	{
		$stack = [];
		$this->assertSame( 0, count( $stack ) );

		array_push( $stack, 'foo' );
		$this->assertSame( 'foo', $stack[count( $stack ) - 1] );
		$this->assertSame( 1, count( $stack ) );

		$this->assertSame( 'foo', array_pop( $stack ) );
		$this->assertSame( 0, count( $stack ) );
	}
}
