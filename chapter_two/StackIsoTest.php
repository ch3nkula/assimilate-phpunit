<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 16:52
 */

use PHPUnit\Framework\TestCase;

class StackIsoTest extends TestCase
{
	public function testEmpty()
	{
		$stack = [];
		$this->assertEmtpy( $stack );

		return $stack;
	}

	/**
	 * @depends testEmpty
	 */
	public function testPush( array $stack )
	{
		array_push( $stack, 'foo' );
		$this->assertSame( 'foo', $stack[count( $stack ) - 1] );
		$this->assertNotEmpty( $stack );

		return $stack;
	}

	/**
	 * @depends testPush
	 */
	public function testPop(array $stack)
	{
		$this->assertSame( 'foo', array_pop( $stack ));
		$this->assertEmpty( $stack );
	}
}
