<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 09/11/2018
 * Time: 17:25
 */

require 'Stub.php';

use PHPUnit\Framework\TestCase;

class StubValueMapTest extends TestCase
{
	public function testReturnValueMapStub()
	{
		// Create a stub for Stub class.
		$stub = $this->createMock( Stub::class );

		// Create a map of arguments to return values.
		$map = [
			[ 'a', 'b', 'c', 'd' ],
			[ 'e', 'f', 'g', 'h' ]
		];

		// Configure the stub.
		$stub->method( 'doSomething' )
			 ->will( $this->returnValueMap( $map ) );

		// $stub->doSomething() returns different values depending on
		// the provided arguments.
		$this->assertSame( 'd', $stub->doSomething( 'a', 'b', 'c' ) );
		$this->assertSame( 'h', $stub->doSomething( 'e', 'f', 'g' ) );
		$this->assertSame( [ 'c', 'd' ], $stub->doSomething( 'a', 'b' ) );
	}
}
