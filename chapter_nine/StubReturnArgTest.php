<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 07/11/2018
 * Time: 10:59
 */

require 'Stub.php';

use PHPUnit\Framework\TestCase;

class StubReturnArgTest extends TestCase
{
    public function testReturnArgumentStub()
    {
        // Create a stub for the Stub class.
        $stub = $this->createMock(Stub::class);

        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnArgument(0));

        // $stub->doSomething( 'foo' ) returns 'foo'
        $this->assertSame('foo', $stub->doSomething('foo'));

        // $stub->doSomething( 'bar' ) returns 'bar'
        $this->assertSame('bar', $stub->doSomething('bar'));
    }
}
