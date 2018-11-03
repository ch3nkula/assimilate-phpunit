<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 03/11/2018
 * Time: 17:27
 */

use PHPUnit\Framework\TestCase;

class MultipleDependenciesTest extends TestCase
{
	public function testProducerFirst()
	{
		$this->assertTrue( true );
		return 'first';
	}

	public function testProducerSecond()
	{
		$this->assertTrue( true );
		return 'second';
	}

	/**
	 * @depends testProducerFirst
	 * @depends testProducerSecond
	 */
	public function testConsumer( $a, $b )
	{
		$this->assertSame( 'first', $a );
		$this->assertSame( 'second', $b );
	}
}
