<?php
/**
 * Created by PhpStorm.
 * User: AlangiDerick
 * Date: 06/11/2018
 * Time: 16:50
 */

use PHPUnit\Framework\TestCase;

require 'Stub.php';

class StubMockTest extends TestCase
{
    public function testStub()
    {
        // Create a stub for the Stub class.
        $stub = $this->getMockBuilder(Stub::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');

        // Calling $stub->doSomething() will now return 'foo'
        $this->assertSame('foo', $stub->doSomething());
    }
}
