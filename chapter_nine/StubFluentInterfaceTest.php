<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 09/11/2018
 * Time: 17:16
 */

require 'Stub.php';

use PHPUnit\Framework\TestCase;

class StubFluentInterfaceTest extends TestCase
{
	public function testReturnSelf()
	{
		// Create a stub for the class Stub
		$stub = $this->createMock( Stub::class );

		// Configure the stub
		$stub->method( 'doSomething' )
			 ->will( $this->returnSelf() );

		// $stub->doSomething() returns $stub
		$this->assertSame( $stub, $stub->doSomething() );
	}
}
